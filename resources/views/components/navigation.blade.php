<div class="flex items-center justify-between border rounded p-2 mb-2 bg-white">
    <div class="flex items-center gap-4">
        <a href="/" class="w-8 h-8 hover:scale-125 trantition-all ease-linear duration-100">
            <x-heroicon-s-home/>
        </a>
        <x-logout :action="route('logout')" class="text-red-400 text-sm rounded font-bold">
            Sign Out
        </x-logout>
    </div>

    {{ $slot }}

</div>
