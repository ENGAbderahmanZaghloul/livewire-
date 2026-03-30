<div>
    <div class="flex justify-between items-center mx-auto w-[90%]">
        <button class="p-4 bg-blue-500 rounded-lg cursor-pointer text-white" wire:navigate
            href="{{ route('post') }}">Create article</button>
        <h1 class="text-5xl font-bold text-white text-center">Blog page</h1>
    </div>
    <div class="w-[90%] mx-auto mt-10 grid md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($posts as $post)
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
            </div>
        @endforeach
    </div>
</div>
