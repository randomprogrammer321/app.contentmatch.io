{{-- Bottom Navigation Bar --}}
<div class="h-[72px] w-full fixed right-0 bottom-0 left-0 z-30 bg-black border-t border-custom6 flex items-center justify-between px-[26px] size5:hidden">
    {{-- Home --}}
    <a href="{{ route('home') }}" class="h-6 w-6">
        <img class="h-full w-full" 
             src="{{ asset('assets/icon/nav/home-mobile-active.svg') }}" 
             alt="Home"/>
    </a>

    {{-- Explore --}}
    <a href="{{ route('home') }}" class="h-6 w-6">
        <img class="h-full w-full" 
             src="{{ asset('assets/icon/nav/explore-inactive.svg') }}" 
             alt="Explore"/>
    </a>

    {{-- Creator Match --}}
    <a href="{{ route('home') }}" class="h-6 w-6">
        <img class="h-full w-full" 
             src="{{ asset('assets/icon/nav/creator-match-inactive.svg') }}" 
             alt="Creator Match"/>
    </a>

    {{-- Notifications --}}
    <a href="{{ route('home') }}" class="h-6 w-6">
        <img class="h-full w-full" 
             src="{{ asset('assets/icon/nav/notification-inactive.svg') }}" 
             alt="Notifications"/>
    </a>

    {{-- Communities --}}
    <a href="{{ route('home') }}" class="h-6 w-6">
        <img class="h-full w-full" 
             src="{{ asset('assets/icon/nav/community-inactive.svg') }}" 
             alt="Communities"/>
    </a>
</div>

{{-- Mobile Menu Backdrop --}}
<div id="back-drop" class="hidden inset-y-0 z-20 h-screen w-screen backdrop-blur-md bg-custom10 top-0 left-0"></div>

{{-- Mobile Menu --}}
<nav class="flex flex-col w-full sm:hidden">
    {{-- Profile Card --}}
    <div class="w-full border-b border-custom6 h-[76px] flex items-center pl-5 sm:h-[84px] sm:pl-3 size3:pl-10">
        <div class="flex">
            <div class="h-10 w-10 rounded-full">
                <img class="h-full w-full object-cover" 
                     src="{{ asset('assets/images/home/pp-placeholder.png') }}"/>
            </div>
            <div class="ml-2">
                <p class="text-sm leading-[19.6px] mb-1 text-white">User Name</p>
                <p class="text-custom4 text-xs sm:text-sm">You are currently a free user</p>
            </div>
        </div>
    </div>

    {{-- Mobile Navigation Links --}}
    <div class="border-b border-custom6 mx-5">
        {{-- Profile --}}
        <a href="#" class="flex items-center w0 h-10 text-base my-5">
            <div class="h-6 w-6">
                <img class="h-full w-full" src="{{ asset('assets/icon/nav/profile.svg') }}"/>
            </div>
            <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">Profile</p>
        </a>

        {{-- Friends --}}
        <a href="#" class="flex items-center w0 h-10 text-base mb-5">
            <div class="h-6 w-6">
                <img class="h-full w-full" src="{{ asset('assets/icon/nav/friends-inactive.svg') }}"/>
            </div>
            <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">Friends</p>
        </a>

        {{-- Premium --}}
        <button class="open-sub-dia flex items-center w0 h-10 text-base mb-5">
            <div class="h-6 w-6">
                <img class="h-full w-full" src="{{ asset('assets/logo/logo.svg') }}"/>
            </div>
            <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">Get Premium</p>
        </button>

        {{-- Settings --}}
        <a href="#" class="flex items-center w0 h-10 text-base mb-5">
            <div class="h-6 w-6">
                <img class="h-full w-full" src="{{ asset('assets/icon/nav/settings-inactive.svg') }}"/>
            </div>
            <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">Settings</p>
        </a>

        {{-- Logout --}}
        <button class="flex items-center w0 h-10 text-base mb-5">
            <div class="h-6 w-6">
                <img class="h-full w-full" src="{{ asset('assets/icon/nav/log-out.svg') }}"/>
            </div>
            <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">Log out</p>
        </button>
    </div>
</nav>
