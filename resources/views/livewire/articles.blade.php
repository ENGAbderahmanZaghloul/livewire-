<div class="mx-6 ">
    <form class="items-center gap-2  text-center">
        <label for="title" class="text-xl font-bold"> Article: </label>
        <input type="search" wire:model.live="content" class="border px-4 py-2 rounded-lg w-1/2 ">
    </form>

    <ul class="mt-8 space-y-2 mx-auto w-1/2 ">
        @forelse ($articles as $article)
            @if ($article->content !== '')
                <li class="mb-5 border-b border-gray-500 py-2 ">
                    <h2 class="text-xl font-bold">{{ $article->title }}</h2>
                    <p class="text-gray-500">{{ $article->content }}</p>
                </li>
            @endif
        @empty
            <li class="text-gray-500 text-2xl text-center">No thing found</li>
        @endforelse
    </ul>
</div>
