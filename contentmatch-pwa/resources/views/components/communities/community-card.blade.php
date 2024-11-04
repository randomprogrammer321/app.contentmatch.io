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
    <button class="h-[33px] rounded-[32px] px-4 bg-secondary text-custom9 font-bold text-xs pt-[1px] sm:pt-0 sm:h-9 sm:text-sm">
        Follow
    </button>
</div> 