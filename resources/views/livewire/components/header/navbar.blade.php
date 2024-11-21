<nav class="bg-gradient-to-br from-gray-900 to-violet-900 border-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">WireTask</span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button" wire:click="toggleMenuOpen"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden text-white"
                aria-controls="navbar-dropdown" aria-expanded="false">
			<span class="sr-only">Open
				main
				menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">s
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="{{ $isMenuOpen ? 'block' : 'hidden' }} w-full md:block md:w-auto items-center" id="navbar-dropdown">
            <ul
                class=" flex flex-col font-medium p-4 md:p-0 mt-4 border border-white rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <livewire:components.header.nav-link title="Home" href="/" :active="request()->routeIs('home')"/>
                @auth
                    <livewire:components.header.nav-link title="Task" href="/task" :active="request()->routeIs('task')"/>
                    <livewire:auth.logout/>
                @endauth
                @guest
                    <li>
                        <a href="/login" class="border text-white border-white  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
