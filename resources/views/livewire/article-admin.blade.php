<div class="mx-auto w-1/2"
    class="mt-5 w-2xl overflow-hidden mx-auto overflow-x-auto rounded-sm border border-neutral-300 dark:border-neutral-700">
    <div>
        <button class="bg-blue-500 p-4 rounded-lg cursor-pointer right-4 absolute" wire:click="ShowForm">Add
            Article</button>
        @if ($form)
            <div
                class="w-fit p-8 mx-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  bg-gray-700">
                <form wire:submit.prevent="Create" class="p-4 flex flex-col gap-5 items-center w-full">
                    <div class="flex  items-center gap-5  ">
                        <div class="flex flex-col gap-2">
                            <label for="title">Title:</label>
                            <input type="text" name="title" wire:model.live="title"
                                class="border p-2 rounded-lg w-full">
                            @error('title')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex  items-center gap-5">
                        <div class="flex flex-col gap-2">
                            <label for="content">Content:</label>
                            <input type="text" name="content" wire:model.live="content"
                                class="border p-2 rounded-lg w-full">
                            @error('content')
                                <span class="text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" wire:click="Create"
                        class="bg-blue-500 p-2 rounded-lg cursor-pointer">Create</button>
                </form>
            </div>
        @endif
    </div>
    <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
        <thead
            class="border-b border-neutral-300 bg-neutral-400 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
            <tr>
                <th scope="col" class="p-4">Id</th>
                <th scope="col" class="p-4">Title</th>
                <th scope="col" class="p-4"></th>
            </tr>
        </thead>
        <tbody>
            {{-- thisi index work as acounter  --}}
            @foreach ($articles as $index => $article)
                <tr wire:key='{{ $article->id }}'>
                    <td class="p-4">{{ $index + 1 }}</td>
                    <td class="p-4 text-xl font-bold text-gray-200">{{ $article->title }}</td>
                    <td class="p-4">
                        <button type="button" wire:click='delete({{ $article->id }})'
                            wire:confirm='Are You Sure to delete the article'
                            class="px-4 py-2 text-white rounded-lg cursor-pointer hover:bg-red-600 bg-red-700">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
