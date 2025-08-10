<div>
    <div class="flex justify-between items-center mx-auto w-[90%]">
        <button class="p-4 bg-blue-500 rounded-lg cursor-pointer text-white" wire:navigate
            href="{{ route('post') }}">Create article</button>
        <h1 class="text-5xl font-bold text-white text-center">Blog page</h1>
    </div>
    <div class="my-6 mx-6">
        <livewire:dash.blog.filterblog />
    </div>
    <div class="w-[90%] mx-auto my-10 grid md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse ($posts as $post)
            @if ($post->title !== '' || $post->content !== '')
                <div class="flex flex-col gap-2 w-full py-2 px-4  border rounded-xl bg-neutral-700">
                    <div class="flex justify-between items-center">
                        <h1 class="text-2xl font-bold">Title:</h1>
                        <p> {{ $post->title }}</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <h1 class="text-2xl font-bold">Content:</h1>
                        <p> {{ $post->content }}</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <h1 class="text-2xl font-bold">Type:</h1>
                        <p> {{ $post->type }}</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <h1 class="text-2xl font-bold">Status:</h1>
                        <p> {{ $post->status }}</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <h1 class="text-2xl font-bold">Level:</h1>
                        <p> {{ $post->level }}</p>
                    </div>

                    <div class="flex justify-between items-center mt-4">
                        <button wire:navigate wire:click="showPost({{ $post->id }})"
                            class="p-2 border rounded-lg cursor-pointer text-white hover:bg-blue-600/60">Edit</button>
                        <button wire:click="deletePost({{ $post->id }})"
                            class="p-2 border rounded-lg cursor-pointer text-red-600 hover:bg-red-600/60">Delete</button>
                    </div>

                    {{-- popup to update --}}
                    @if ($show)
                        <div
                            class=" absolute bottom-[25%] right-10 z-10 w-[60%] mx-auto flex justify-between items-center mt-4">
                            @foreach ($posts as $post)
                                <form class="w-1/2 flex flex-col gap-2 bg-neutral-700/60 p-4 mb-5 border rounded-xl ">
                                    <div class="flex justify-between items-center w-full text-center">
                                        <label for="title" class="text-xl font-medium text-white ">Title:</label>
                                        <div class="flex flex-col gap-2 w-[80%]">
                                            <input type="text" wire:model="title"
                                                class="w-full p-2 rounded-lg bg-neutral-600"
                                                value="{{ $post->title }}">
                                            @error('title')
                                                <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center w-full text-center">
                                        <label for="content" class="text-xl font-medium text-white ">Content:</label>
                                        <div class="flex flex-col gap-2  w-[80%]">
                                            <textarea wire:model="content" class="w-full p-2 rounded-lg bg-neutral-600" value="{{ $post->content }}"></textarea>
                                            @error('content')
                                                <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <label for="status" class="text-xl font-medium text-white">Status:</label>
                                        <div class="flex flex-col gap-2 w-[80%]">
                                            <select wire:model="status" class="w-full p-2 rounded-lg bg-neutral-600"
                                                value="{{ $post->status }}">
                                                <option value="published">Published</option>
                                                <option value="draft">Draft</option>
                                            </select>
                                            @error('status')
                                                <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <label for="type" class="text-xl font-medium text-white">Type:</label>
                                        <div class="flex flex-col gap-2 w-[80%]">
                                            <select wire:model="type" class="w-full p-2 rounded-lg bg-neutral-600"
                                                value="{{ $post->type }}">
                                                <option value="reading">reading</option>
                                                <option value="writing">writing</option>
                                                <option value="listening">listening</option>
                                                <option value="speaking">speaking</option>
                                            </select>
                                            @error('type')
                                                <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center w-full">
                                        <label for="level" class="text-xl font-medium text-white">Level:</label>
                                        <div class="flex flex-col gap-2 w-[80%]">
                                            <select wire:model="level" class="w-full p-2 rounded-lg bg-neutral-600"
                                                value="{{ $post->level }}">
                                                <option value="beginner">Beginner</option>
                                                <option value="intermediate">Intermediate</option>
                                                <option value="advanced">Advanced</option>
                                            </select>
                                            @error('level')
                                                <span class="text-red-600">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                            @endforeach
                            <div class="flex justify-between items-center mx-6">
                                <button wire:click="updatePost"
                                    class="bg-blue-500 p-2 rounded-lg cursor-pointer">Update</button>
                                <button wire:navigate href="{{ route('blog') }}"
                                    class="bg-neutral-500 p-2 rounded-lg cursor-pointer">Cancel</button>
                            </div>
                            </form>
                        </div>
                    @endif
                </div>
            @endif
        @empty
            <p class="text-white">No posts found</p>
        @endforelse
    </div>
