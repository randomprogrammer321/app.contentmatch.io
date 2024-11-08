<div class="h-[54px] pl-4 mb-1 sm:mb-4 sm:pl-10">
    <p class="text-sm text-white font-bold sm:text-2xl">Your communities</p>
    <p class="font-medium text-custom4 text-xs sm:text-sm">You have joined 4 communities</p>
</div>

<div class="px-4 sm:px-10">
    @foreach($yourCommunities as $community)
        <div class="flex items-center justify-between mb-3">
            <div class="flex items-center h-16 sm:h-[72px]">
                <div class="rounded-full flex items-center font-bold text-secondary justify-center bg-custom6 mr-2 h-12 w-12 text-xl sm:text-2xl">
                    {{ substr($community->name, 0, 1) }}
                </div>
                <div>
                    <p class="font-medium text-secondary leading-[16.8px] text-sm sm:leading-[22.4px] sm:text-base">
                        {{ $community->name }}
                    </p>
                    <p class="mt-[2px] text-xs font-normal text-custom2 leading-[16.8px] sm:leading-[19.6px] sm:mt-1 sm:text-sm">
                        {{ number_format($community->members_count) }} Members
                    </p>
                </div>
            </div>
            <button class="h-[33px] flex items-center justify-center rounded-[32px] px-3 text-secondary font-bold border border-custom6 text-xs pt-[1px] sm:pt-0 sm:px-4 sm:h-9 sm:text-base">
                Following
            </button>
        </div>
    @endforeach
</div> 