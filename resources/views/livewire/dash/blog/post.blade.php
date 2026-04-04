<div class="w-[90%] mx-auto">
    <form wire:submit="submit" class="w-1/2 flex flex-col gap-2 bg-neutral-700 p-4 border rounded-xl ">
        <div class="flex justify-between items-center w-full text-center">
            <label for="title" class="text-xl font-medium text-white ">Title:</label>
            <div class="flex flex-col gap-2 w-[80%]">
                <input type="text" wire:model="title" class="w-full p-2 rounded-lg bg-neutral-600" placeholder="title">
                @error('title')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex justify-between items-center w-full text-center">
            <label for="content" class="text-xl font-medium text-white ">Content:</label>
            <div class="flex flex-col gap-2  w-[80%]">
                <textarea wire:model="content" class="w-full p-2 rounded-lg bg-neutral-600" placeholder="content"></textarea>
                @error('content')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex justify-between items-center w-full">
            <label for="status" class="text-xl font-medium text-white">Status:</label>
            <div class="flex flex-col gap-2 w-[80%]">
                <select wire:model="status" class="w-full p-2 rounded-lg bg-neutral-600" placeholder="status">
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
                <select wire:model="type" class="w-full p-2 rounded-lg bg-neutral-600" placeholder="type">
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
                <select wire:model="level" class="w-full p-2 rounded-lg bg-neutral-600" placeholder="level">
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                </select>
                @error('level')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button type="submit" class="bg-blue-500 p-2 rounded-lg cursor-pointer">submit</button>
        <button type="submit" class="bg-gray-500 p-2 rounded-lg cursor-pointer">Reset</button>
    </form>
</div>
