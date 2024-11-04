<div class="border-b border-custom6 pb-3 mt-5 sm:pb-5">
    <p class="font-medium text-secondary leading-[16.8px] text-xs sm:leading-[28px] sm:text-xl">
        What is your audience size?
    </p>
    <div class="grid grid-cols-1 mt-3 gap-y-3 gap-x-2 sm:gap-x-[14px] sm:gap-y-6 sm:grid-cols-2 size1:grid-cols-3 sm:mt-5">
        @foreach([
            'Small: 0 - 4999',
            'Medium: 5000 - 19,999',
            'Large: > 20,000'
        ] as $audienceSize)
            <button type="button" data-audience-size="{{ $audienceSize }}" class="audience-size-btn w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base">
                {{ $audienceSize }}
            </button>
        @endforeach
    </div>
</div>
