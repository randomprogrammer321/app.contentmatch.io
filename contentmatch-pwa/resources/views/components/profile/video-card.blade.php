<div class="w-full mb-5 border-b border-custom6">
    {{-- Card Header --}}
    <div class="flex justify-between w-full mb-2 sm:mb-1">
        <div class="flex items-center">
            <div class="h-8 w-8 rounded-full md:h-10 md:w-10">
                <img class="w-full h-full" src="{{ asset('assets/images/home/pp-placeholder.png') }}"/>
            </div>
            <p class="text-xs font-medium text-secondary pl-1 pr-3 sm:text-base">
                {{ $video['user_name'] ?? 'Thomas Andrews' }}
            </p>
            <button class="text-xs font-bold text-secondary sm:text-sm">
                Follow
            </button>
        </div>
        
        {{-- Menu --}}
        @include('components.global.menu-button')
    </div>

    {{-- Video Content --}}
    <p class="text-xs leading-[16.8px] text-secondary font-normal sm:leading-[22.4px] sm:text-base">
        {{ $video['description'] ?? 'Video description here...' }}
    </p>

    {{-- Video Preview --}}
    <div class="relative w-full mt-3 h-[311px] sm:h-[579px] sm:mt-4">
        <div class="absolute top-2 left-2 flex bg-custom10 items-center h-[22px] px-2 backdrop-blur-8 rounded-[20px] sm:top-4 sm:left-4 sm:px-3 sm:h-9">
            <div class="w-5 h-[14px] sm:w-7 sm:h-5">
                <img class="w-full h-full" src="{{ asset('assets/icon/socials/youtube.svg') }}"/>
            </div>
            <p class="text-[10px] text-secondary font-medium pl-1 sm:text-sm">
                Uploaded from {{ $video['platform'] ?? 'YouTube' }}
            </p>
        </div>
        
        <div class="h-full w-full overflow-hidden rounded-lg">
            <img class="object-cover h-full w-full" 
                 src="{{ asset($video['thumbnail'] ?? 'assets/images/home/video-placeholder.png') }}"/>
        </div>
    </div>

    {{-- Engagement Stats --}}
    @include('components.profile.video-stats')
</div>
