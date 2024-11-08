<div id="videoSection" class="transition-opacity duration-1000">
    {{-- Total Posts Header --}}
    <div class="h-[33px] flex items-center justify-between border-b border-custom6 mb-4 px-4 sm:px-8 sm:h-[46px]">
        <p class="text-xs sm:text-base">
            <span class="font-medium text-custom4 mr-1">52</span>
            <span class="font-normal text-custom1">Total Posts</span>
        </p>
        <button class="flex items-center h-[26px] px-3 justify-center gap-x-[2px] rounded-[32px] border border-custom6 sm:h-[30px]">
            <div class="h-[18px] w-[18px] sm:h-5 sm:w-5">
                <img class="h-full w-full" src="{{ asset('assets/icon/filter.svg') }}" alt=""/>
            </div>
            <p class="font-normal text-custom2 text-xs sm:text-base">All</p>
        </button>
    </div>

    {{-- Videos Grid --}}
    <div class="px-4 sm:px-8">
        @forelse($videos ?? [] as $video)
            @include('components.profile.video-card')
        @empty
            <p class="text-center text-custom4 py-4">No videos found</p>
        @endforelse
    </div>
</div>