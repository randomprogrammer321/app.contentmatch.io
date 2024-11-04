<header class="absolute left-0 right-0 z-20 flex items-center justify-between bg-primary py-3 border-b border-custom6 sm:border-none pl-4 pr-4 sm:pl-10 md:pr-10 sm:pr-[100px] sm:py-4">
    <div class="flex items-center gap-x-3">
        <a href="{{ route('match.matches') }}" 
           class="font-normal {{ $activeTab === 'matches' ? 'border-b border-custom2 text-secondary' : 'text-custom2' }} hover:text-secondary h-[17px] text-xs sm:text-sm md:text-base sm:h-[22px]">
            Matches
        </a>
        <a href="{{ route('match.past-engagements') }}" 
           class="truncate font-normal {{ $activeTab === 'past-engagements' ? 'border-b border-custom2 text-secondary' : 'text-custom2' }} hover:text-secondary h-[17px] text-xs sm:text-sm md:text-base sm:h-[22px]">
            Past Engagements
        </a>
        <a href="{{ route('match.requests') }}" 
           class="mx-3 font-normal {{ $activeTab === 'requests' ? 'border-b border-custom2 text-secondary' : 'text-custom2' }} hover:text-secondary h-[17px] text-xs sm:text-sm md:text-base sm:h-[22px]">
            Requests
        </a>
    </div>

    @include('components.match.likes-preview')
</header> 