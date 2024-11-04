<button class="flex justify-between items-center w-full">
    <div class="flex">
        <div class="h-6 w-6 mr-2">
            <img class="w-full h-full" 
                 src="{{ asset('assets/icon/' . $icon . '.svg') }}" 
                 alt="{{ $title }}"/>
        </div>
        <div>
            <p class="text-sm font-medium text-white leading-[19.6px] mb-[2px] text-start">
                {{ $title }}
            </p>
            <p class="text-xs text-custom1 font-medium text-start">
                {{ $subtitle }}
            </p>
        </div>
    </div>

    <div class="h-5 w-5 flex items-center justify-center">
        <img src="{{ asset('assets/icon/right-arrow.svg') }}"/>
    </div>
</button>
