<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body style="background-color: #252525; color: white"
    class="min-h-screen w-full bg-black dark:bg-[#0a0a0a] text-white mx-auto  ">
    <main>
        <nav class="flex justify-between items-center  bg-zinc-600 shadow-lg shadow-zinc-800 px-8 py-5">
            <div>
                <h1 wire:navigate href="{{ route('home') }}" class="text-3xl font-extrabold cursor-pointer">Livewire</h1>
            </div>
            <ul class="flex gap-5">
                <li>
                    {{-- we use request to check active becausre -> livewire delete / from request so we use wire:current and home not alivewire  --}}
                    <a href="/" class="text-xl @if (request()->is('/')) font-bold text-black @endif">Home</a>
                </li>
                {{-- <li>
                <a href="/users" wire:navigate>Users</a>
            </li> --}}
                <li>
                    <a href="/users" class="text-xl" wire:current="font-bold text-black">Users</a>
                </li>
                <li>
                    <a href="/articles" class="text-xl" wire:current="font-bold text-black">Articles</a>
                    <a href="/product" class="text-xl" wire:current="font-bold text-black">Product</a>
                </li>
                <li>
                    <a href="/dashboard" class="text-xl" wire:current="font-bold text-black">Admin Dashboard</a>
                </li>
            </ul>
        </nav>


        <div class="mt-10">
            {{ $slot }}
        </div>
    </main>






    @livewireScripts
</body>

</html>
