<!-- resources/views/layouts/navigation.blade.php -->
<nav x-data="{ open: false }" class="bg-white border-b border-gray-200 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Left Side -->
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto text-indigo-600" />
                    </a>
                </div>

                <!-- Desktop Nav Links -->
                <div class="hidden sm:flex sm:space-x-8 sm:ml-10">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <i class="fas fa-tachometer-alt mr-1"></i> {{ __('Dashboard') }}
                    </x-nav-link>

                    @can('view permission')
                        <x-nav-link :href="route('permission.index')" :active="request()->routeIs('permission.index')">
                            <i class="fas fa-key mr-1"></i> {{ __('Permissions') }}
                        </x-nav-link>
                    @endcan

                    @can('view roles')
                        <x-nav-link :href="route('role.index')" :active="request()->routeIs('role.index')">
                            <i class="fas fa-user-shield mr-1"></i> {{ __('Roles') }}
                        </x-nav-link>
                    @endcan

                    @can('Banner')
                        <x-nav-link :href="route('banner.index')" :active="request()->routeIs('banner.index')">
                            <i class="fas fa-key mr-1"></i> {{ __('Banner') }}
                        </x-nav-link>
                    @endcan

                    @can('Grid')
                    <x-nav-link :href="route('grid.index')" :active="request()->routeIs('grid.index')">
                        <i class="fas fa-key mr-1"></i> {{ __('Grid') }}
                    </x-nav-link>
                @endcan
                @can('Category')
                <x-nav-link :href="route('category.index')" :active="request()->routeIs('category.index')">
                    <i class="fas fa-key mr-1"></i> {{ __('Category') }}
                </x-nav-link>
            @endcan
            @can('Link')
            <x-nav-link :href="route('link.index')" :active="request()->routeIs('link.index')">
                <i class="fas fa-key mr-1"></i> {{ __('Link') }}
            </x-nav-link>
        @endcan

                    @can('view users')
                        <x-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                            <i class="fas fa-users mr-1"></i> {{ __('Users') }}
                        </x-nav-link>
                    @endcan
                </div>
            </div>

            <!-- Right Side -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @auth
                    <!-- User Dropdown -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-gray-600 bg-white hover:text-gray-800 focus:outline-none transition">
                                <div>
                                    {{ Auth::user()->name }}
                                    <span class="text-xs text-gray-500">
                                        ({{ Auth::user()->roles->pluck('name')->implode(', ') }})
                                    </span>
                                </div>
                                <div class="ml-1">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75
                                            0 111.08 1.04l-4.25 4.5a.75.75
                                            0 01-1.08 0l-4.25-4.5a.75.75
                                            0 01.02-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                <i class="fas fa-user mr-1"></i> {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Logout -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt mr-1"></i> {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endauth

                @guest
                    <div>
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800 px-3">Login</a>
                        <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-800 px-3">Register</a>
                    </div>
                @endguest
            </div>

            <!-- Mobile Hamburger -->
            <div class="flex items-center sm:hidden">
                <button @click="open = !open" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-700 hover:bg-gray-100 focus:outline-none transition"
                    aria-controls="mobile-menu" :aria-expanded="open.toString()">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="sm:hidden hidden bg-white z-50" id="mobile-menu">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <i class="fas fa-tachometer-alt mr-1"></i> {{ __('Dashboard') }}
            </x-responsive-nav-link>

            @can('view permission')
                <x-responsive-nav-link :href="route('permission.index')" :active="request()->routeIs('permission.index')">
                    <i class="fas fa-key mr-1"></i> {{ __('Permissions') }}
                </x-responsive-nav-link>
            @endcan

            @can('view roles')
                <x-responsive-nav-link :href="route('role.index')" :active="request()->routeIs('role.index')">
                    <i class="fas fa-user-shield mr-1"></i> {{ __('Roles') }}
                </x-responsive-nav-link>
            @endcan

            @can('view users')
                <x-responsive-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                    <i class="fas fa-users mr-1"></i> {{ __('Users') }}
                </x-responsive-nav-link>
            @endcan
        </div>

        <!-- Mobile Profile Section -->
        @auth
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        <i class="fas fa-user mr-1"></i> {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt mr-1"></i> {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth

        @guest
            <div class="pt-4 pb-1 border-t border-gray-200 px-4">
                <a href="{{ route('login') }}" class="block py-2 text-gray-600 hover:text-gray-800">Login</a>
                <a href="{{ route('register') }}" class="block py-2 text-gray-600 hover:text-gray-800">Register</a>
            </div>
        @endguest
    </div>
</nav>
