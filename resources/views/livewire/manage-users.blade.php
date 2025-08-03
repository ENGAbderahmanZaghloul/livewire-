
<div
    class="w-fit p-8 mx-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  bg-gray-700">
    <form wire:submit="saveEdit" class="p-4 flex flex-col gap-5 items-center w-full">
        <div class="flex  items-center gap-5  ">
            <div class="flex flex-col gap-2">
                <label for="name">Name:</label>
                <input type="text" name="name" wire:model="name"
                    class="border p-2 rounded-lg w-full">
                @error('name')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex  items-center gap-5">
            <div class="flex flex-col gap-2">
                <label for="email">Email:</label>
                <input type="text" name="email" wire:model="email"
                    class="border p-2 rounded-lg w-full">
                @error('email')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex  items-center gap-5">
            <div class="flex flex-col gap-2">
                <label for="password">Password:</label>
                <input type="text" name="password" wire:model="password"
                    class="border p-2 rounded-lg w-full">
                @error('password')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <button type="submit"
            class="bg-blue-500 p-2 rounded-lg cursor-pointer">Edit</button>
    </form>
</div>

