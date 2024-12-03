<nav class="flex items-center justify-between py-4 px-10 bg-blue-50 border-b border-blue-200 shadow-sm">
    <!-- Left Section: Logo and Navigation Links -->
    <div id="nav-left" class="flex items-center space-x-10">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center">
            <x-application-mark class="h-10 w-auto" />
        </a>
        <!-- Navigation Links -->
        <div class="top-menu hidden md:flex space-x-8">
            <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')" class="text-blue-700 hover:text-blue-500 transition-colors duration-200 font-semibold">
                {{ __('Home') }}
            </x-nav-link>
            <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')" class="text-blue-700 hover:text-blue-500 transition-colors duration-200 font-semibold">
                {{ __('Blog') }}
            </x-nav-link>
        </div>
    </div>

    <!-- Right Section: User Authentication Links -->
    <div id="nav-right" class="flex items-center space-x-6">
        @auth
            @include('layouts.partials.header-right-auth')
        @else
            <a href="{{ route('login') }}" class="text-blue-700 hover:text-blue-500 transition-colors duration-200 font-semibold">Login</a>
            <a href="{{ route('register') }}" class="text-blue-700 hover:text-blue-500 transition-colors duration-200 font-semibold">Register</a>
        @endauth
    </div>
</nav>
