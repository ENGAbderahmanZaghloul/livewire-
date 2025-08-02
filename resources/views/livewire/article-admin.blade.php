<div class="mx-auto w-1/2"
    class="mt-5 w-2xl overflow-hidden mx-auto overflow-x-auto rounded-sm border border-neutral-300 dark:border-neutral-700">
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
                <tr>
                    <td class="p-4">{{ $index + 1 }}</td>
                    <td class="p-4 text-xl font-bold text-gray-200">{{ $article->title }}</td>
                    <td class="p-4">
                        <button type="button" wire:click='delete({{ $article->id }})'
                            class="px-4 py-2 text-white rounded-lg cursor-pointer hover:bg-red-600 bg-red-700">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
