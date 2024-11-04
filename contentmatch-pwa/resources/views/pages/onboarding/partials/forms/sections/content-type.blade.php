<div class="border-b border-custom6 pb-3 sm:pb-5">
    <p class="font-medium text-secondary leading-[16.8px] text-xs sm:leading-[28px] sm:text-xl">
        What type of content do you create?
    </p>
    <div class="grid grid-cols-3 mt-3 gap-y-3 gap-x-2 sm:gap-x-[14px] sm:gap-y-6 sm:mt-5">
        @foreach([
            'Gaming',
            'Vlogging',
            'Beauty & Fashion',
            'Technology',
            'Educational',
            'Fitness & Health',
            'DIY & Crafts',
            'Food & Cooking',
            'Music'
        ] as $contentType)
            <button type="button" data-content-type="{{ $contentType }}" class="content-type-btn w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base">
                {{ $contentType }}
            </button>
        @endforeach
    </div>
</div>
