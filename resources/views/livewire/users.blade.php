

    <div class="flex flex-col gap-5 !w-[80%] mx-auto">
        <form wire:submit.prevent="save">
            <div class="flex flex-col gap-4">
                <flux:field class="w-full">
                    <flux:label for="name" class="text-xl font-medium text-white">Name</flux:label>
                    {{-- there is aproblem with flux-input classes --}}
                    <input type="text" name="name" placeholder="name"
                        class="bg-neutral-700 h-[40px] py-2 px-3 rounded-xl" wire:model="name" />
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

                <flux:button wire:click="save" type="submit" class="mt-5 w-fit bg-blue-700 cursor-pointer">Submit
                </flux:button>

            </div>
        </form>



        <div
            class="mt-5 w-2xl overflow-hidden mx-auto overflow-x-auto rounded-sm border border-neutral-300 dark:border-neutral-700">
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
                            <td class="p-4">{{ $user->name }}</td>
                            <td class="p-4">{{ $user->email }}</td>
                            <td class="p-4">
                                <flux:button type="button" class="bg-blue-700">Edit</flux:button>
                                <flux:button type="button" class="bg-red-700">Delete</flux:button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

