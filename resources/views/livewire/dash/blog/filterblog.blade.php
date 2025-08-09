<div class="flex gap-8 items-center  border p-2 rounded-lg border-gray-600"  >
    <input type="text" wire:model.live="search" placeholder="Search" class="w-[60%] border p-2 rounded-lg pl-4 border-gray-400">
    <div class="flex justify-between items-center w-[25%]">
        <select wire:model.live="status" placeholder="All" class=" block p-2 border cursor-pointer border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-neutral-700 text-white">
            <option value="">All</option>
            <option value="published">Published</option>
            <option value="draft">Draft</option>
        </select>
        <select wire:model.live="type" placeholder="Category" class=" block p-2 border cursor-pointer border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-neutral-700 text-white">
            <option value="" class="bg-gray-600">All</option>
            <option value="reading">Reading</option>
            <option value="writing">Writing</option>
            <option value="listening">Listening</option>
            <option value="speaking">Speaking</option>
        </select>
        <select wire:model.live="level" placeholder="Level" class=" block p-2 border cursor-pointer border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-neutral-700 text-white">
            <option value="">All</option>
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select>
    </div>
</div>
