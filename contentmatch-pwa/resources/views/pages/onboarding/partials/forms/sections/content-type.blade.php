<div class="border-b border-custom6 pb-3 sm:pb-5">
    <p class="font-medium text-secondary leading-[16.8px] text-xs sm:leading-[28px] sm:text-xl">
        What type of content do you create?
    </p>
    <div class="grid grid-cols-3 mt-3 gap-y-3 gap-x-2 sm:gap-x-[14px] sm:gap-y-6 sm:mt-5">
        @foreach(\App\Models\Category::where('is_active', true)->get() as $category)
            <button type="button" 
                data-content-type="{{ $category->name }}" 
                class="content-type-btn w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base">
                {{ $category->name }}
            </button>
        @endforeach
    </div>
</div>
