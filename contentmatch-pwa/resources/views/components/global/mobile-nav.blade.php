{{-- Bottom Navigation Bar --}}
<div class="h-[72px] w-full fixed right-0 bottom-0 left-0 z-30 bg-black border-t border-custom6 flex items-center justify-between px-[26px] size5:hidden">
    {{-- Home --}}
    <a href="{{ route('feed.home') }}" class="h-6 w-6">
        <img class="h-full w-full" 
             src="{{ asset('assets/icon/nav/home-mobile-active.svg') }}" 
             alt="Home"/>
    </a>

    {{-- Explore --}}
    <a href="{{ route('explore.index') }}" class="h-6 w-6">
        <img class="h-full w-full" 
             src="{{ asset('assets/icon/nav/explore-inactive.svg') }}" 
             alt="Explore"/>
    </a>

    {{-- Creator Match --}}
    <a href="{{ route('match.index') }}" class="h-6 w-6">
        <img class="h-full w-full" 
             src="{{ asset('assets/icon/nav/creator-match-inactive.svg') }}" 
             alt="Creator Match"/>
    </a>

    {{-- Notifications --}}
    <a href="{{ route('notifications.index') }}" class="h-6 w-6">
        <img class="h-full w-full" 
             src="{{ asset('assets/icon/nav/notification-inactive.svg') }}" 
             alt="Notifications"/>
    </a>

    {{-- Communities --}}
    <a href="{{ route('communities.index') }}" class="h-6 w-6">
        <img class="h-full w-full" 
             src="{{ asset('assets/icon/nav/community-inactive.svg') }}" 
             alt="Communities"/>
    </a>
</div>

{{-- Mobile Menu Backdrop --}}
<div id="back-drop" class="hidden inset-y-0 z-20 h-screen w-screen backdrop-blur-md bg-custom10 top-0 left-0"></div>

{{-- Mobile Menu --}}
