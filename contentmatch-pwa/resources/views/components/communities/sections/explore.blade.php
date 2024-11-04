<div class="mt-6 sm:mt-4">
    <div class="flex items-center justify-between px-4 sm:px-10">
        <p class="font-bold text-base text-white leading-[19.6px] sm:leading-[33.6px] sm:text-2xl">
            Explore communities
        </p>
        <button class="flex items-center">
            <p class="text-custom4 font-medium text-xs sm:text-base">See all</p>
            <div class="w-[9px] h-[18px] ml-2 sm:w-[10px] sm:h-5">
                <img class="h-full w-full" src="{{ asset('assets/icon/back-outlined.svg') }}" alt=""/>
            </div>
        </button>
    </div>

    {{-- Categories --}}
    <div class="sm:h-[60px] my-2 sm:my-4">
        <div class="bg-custom9 overflow-y-hidden overflow-x-auto h-[50px] sm:h-[54px]">
            <div class="px-4 h-[50px] flex items-center gap-x-4 text-xs text-custom2 sm:pt-1 sm:px-10 sm:text-base">
                @foreach($categories as $category)
                    <p class="{{ $loop->first ? 'font-bold' : '' }} whitespace-nowrap">{{ $category }}</p>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Community List --}}
    <div class="px-4 sm:px-10">
        @foreach($exploreCommunities as $community)
            @include('components.communities.community-card', ['community' => $community])
        @endforeach
    </div>
</div> 