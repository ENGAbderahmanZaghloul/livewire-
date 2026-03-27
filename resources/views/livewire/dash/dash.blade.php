<div>
    <h1 class="text-6xl font-bold text-center ">Dashboard</h1>
    <flux:sidebar class=" bg-zinc-400 w-[200px] h-screen fixed left-0 top-24 text-left items-start  ">
        <h1 class="text-2xl font-bold mx-auto text-black ">Dashboard</h1>
        <flux:button wire:navigate href="{{ route('blog') }}" class="w-full">Blog</flux:button>
        <div>
            <flux:button wire:navigate href="{{ route('settings.profile') }}" class="w-full">profile</flux:button>
            <flux:button wire:navigate href="{{ route('logout') }}" class="w-full">Logout</flux:button>
        </div>
    </flux:sidebar>



</div>
