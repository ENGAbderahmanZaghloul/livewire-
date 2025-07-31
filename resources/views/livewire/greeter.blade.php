<div>
    <form class="flex flex-col gap-2 items-center" wire:submit="changeName()">
        <select name="" id="" wire:model="changing">
            <option value="hi">hi</option>
            <option value="hello">hello</option>
            <option value="hii">hii</option>
        </select>
        <h1 class="text-2xl font-[900] text-green-600 text-center">{{ $greetingMsg }}</h1>
        <input type="text" class="border px-4 py-2 rounded-lg " wire:model.live="name">
        <div>
            @error('name')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" style="background-color: blue"
            class="border bg-blue-600 px-4 py-2 text-white cursor-pointer">
            submit
        </button>
    </form>

    @if ($greetingMsg !== '')
        {{ $greetingMsg }}
    @endif
</div>
