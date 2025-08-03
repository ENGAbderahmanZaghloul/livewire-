<div class="flex flex-col gap-5 !w-[80%] mx-auto">
    <form wire:submit.prevent="save">
        <div class="flex flex-col gap-4">
            <flux:field class="w-full">
                <flux:label for="name" class="text-xl font-medium text-white">Name</flux:label>
                {{-- there is aproblem with flux-input classes --}}
                <input type="text" name="name" placeholder="name" class="bg-neutral-700 h-[40px] py-2 px-3 rounded-xl"
                    wire:model="name" />
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </flux:field>

            <flux:field>
                <flux:label for="email" class="text-xl font-medium text-white">Email</flux:label>
                <input type="text" name="email" class="bg-neutral-700 h-[40px] py-2 px-3 rounded-xl"
                    placeholder="email@example.com" wire:model="email" />
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </flux:field>

            <flux:field>
                <flux:label for="password" class="text-xl font-medium text-white">Password</flux:label>
                <input type="text" name="password" class="bg-neutral-700 h-[40px] py-2 px-3 rounded-xl"
                    placeholder="password" wire:model="password" />
                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </flux:field>

            <flux:button wire:click="save" class="mt-5 w-fit bg-blue-700 cursor-pointer">Submit
            </flux:button>

        </div>
        @if (session('success') && $alert)
            <div class="flex  flex-col gap-5 items-center bg-green-50 border border-green-200 text-green-800 text-sm rounded-lg px-4 py-6 w-[300px] h-fit absolute right-[40%] top-[350px] mx-auto mb-4 shadow-sm"
                role="alert">
                <button type="button"
                    class="absolute top-3 right-3 cursor-pointer bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                    wire:click="close">
                    X
                </button>
                <svg class="w-20 h-20 mr-2 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.707a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
                <span class="font-medium text-xl">{{ session('success') }}</span>
            </div>
        @endif

    </form>



    <div
        class="mt-5 w-[1000px] overflow-hidden mx-auto overflow-x-auto rounded-sm border border-neutral-300 dark:border-neutral-700">
        <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
            <thead
                class="border-b border-neutral-300 bg-neutral-400 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
                <tr>
                    <th scope="col" class="p-4">Id</th>
                    <th scope="col" class="p-4">Name</th>
                    <th scope="col" class="p-4">Email</th>
                    <th scope="col" class="p-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="p-4">{{ $user->id }}</td>
                        <td class="p-4 text-lg font-medium text-white">{{ $user->name }}</td>
                        <td class="p-4 text-lg font-medium text-white">{{ $user->email }}</td>
                        <td class="p-4 flex gap-2 items-center justify-center">
                            <a href="{{ route('manage-users', $user->id) }}"
                                class=" cursor-pointer bg-blue-500 px-4 py-2 rounded-lg text-white">Edit</a>
                            <button type="button" wire:click="delete({{ $user->id }})"
                                class="cursor-pointer bg-red-700 px-4 py-2 rounded-lg text-white">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
