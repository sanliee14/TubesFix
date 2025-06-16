<nav x-data="{ open: false }" class="bg-[#FF69B4]">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex items-center space-x-4">
                <!-- Logo with Text -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                        <span class="ml-3 text-2xl font-bold text-[#FFD1DC] tracking-tight font-['figtree']">EventConnect</span>
                    </a>
                </div>
            </div>

            {{-- Search Bar Positioned Lower --}}
            <div class="flex-1 max-w-xl mx-4 mt-1"> 
                <form action="{{ route('search.admin') }}" method="GET" class="relative">
                    <div class="flex items-center">
                        <input
                            type="text"
                            name="search"
                            placeholder="Search"
                            class="w-full px-4 py-2 rounded-full shadow focus:outline-none focus:ring-2 focus:ring-[#FFD1DC] bg-pink-100 text-pink-900 placeholder-pink-400"
                        >
                        <button
                            type="submit"
                            class="absolute right-0 bg-[#FF1493] hover:bg-[#C71585] text-white px-4 py-2 rounded-full font-semibold mr-1 transition-colors duration-200">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Settings Dropdown -->
            <div class="flex items-center sm:ms-6">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-pink-900 bg-pink-100 hover:bg-pink-200 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endauth

                @guest
                    <div class="text-sm text-[#FFD1DC] space-x-4">
                        <a href="{{ route('login') }}" class="hover:text-white">Login</a>
                        <a href="{{ route('register') }}" class="hover:text-white">Register</a>
                    </div>
                @endguest
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-[#FFD1DC] hover:text-white hover:bg-[#FF1493] focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-[#FF69B4]">
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-pink-300">
            @auth
                <div class="px-4">
                    <div class="font-medium text-base text-[#FFD1DC]">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-pink-200">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')" class="text-[#FFD1DC] hover:bg-[#FF1493]">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                class="text-[#FFD1DC] hover:bg-[#FF1493]">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @endauth

            @guest
                <div class="px-4 text-sm text-[#FFD1DC] space-y-2">
                    <a href="{{ route('login') }}" class="block py-2 hover:text-white">Login</a>
                    <a href="{{ route('register') }}" class="block py-2 hover:text-white">Register</a>
                </div>
            @endguest
        </div>
    </div>
</nav>