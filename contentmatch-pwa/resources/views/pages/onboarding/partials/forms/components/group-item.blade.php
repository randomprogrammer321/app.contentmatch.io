<div class="flex items-center justify-between border-b-[0.3px] border-b-custom4 h-[75px] sm:h-20">
    <div class="flex items-center">
        <div class="rounded-full flex items-center font-bold text-secondary justify-center bg-custom6 mr-2 h-10 w-10 text-base sm:text-[28px] sm:h-12 sm:w-12">
            {{ $initial ?? substr($name, 0, 1) }}
        </div>
        <div>
            <p class="font-medium text-secondary leading-[16.8px] text-xs sm:leading-[22.4px] sm:text-base">
                {{ $name }}
            </p>
            <p class="mt-[2px] text-xs font-normal text-custom2 leading-[16.8px] sm:leading-[19.6px] sm:mt-1 sm:text-sm">
                {{ $members }} Members
            </p>
        </div>
    </div>
    <button type="button" data-group-id="{{ $id }}" class="follow-btn h-8 text-secondary text-xs font-medium border border-secondary px-4 rounded-[20px] leading-[19.67px] sm:text-base sm:h-10">
        Follow
    </button>
</div>
