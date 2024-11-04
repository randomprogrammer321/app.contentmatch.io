<div id="sub-dia-back-drop" class="inset-y-0 hidden z-40 h-screen w-screen bg-transparent sm:bg-custom12 fixed top-0 left-0"></div>
<div id="sub-dia" class="dialog z-50 hidden sm:m-auto bg-primary sm:bg-tranparent px-mpd w-full h-full sm:h-max sm:max-w-[680px] sm:backdrop-blur-40 rounded-[24px] pt-7 sm:bg-custom15 sm:border-custom1 sm:border-[0.5px] sm:p-10">
    <div class="flex items-center justify-between space-x-3 mb-6 sm:mb-10 sm:space-x-8">
        <div>
            <p class="text-secondary font-medium mb-1 text-base sm:mb-3 sm:text-[28px]">Subscribe now for a free month</p>
            <p class="font-normal text-secondary text-xs leading-[16.8px] sm:leading-[22.4px] sm:text-base">
                Subscribe to Contentmatch premium to get an extra one month free to access all premium features
            </p>
        </div>
        <div class="flex-shrink-0 h-20 w-20">
            <img class="w-full h-full" src="{{ asset('assets/icon/wrapped-gift.svg') }}" alt=""/>
        </div>
    </div>

    {{-- User Info --}}
    <div class="flex items-center mb-6 sm:mb-10">
        <div class="rounded-full overflow-hidden h-16 w-16 mr-3 sm:mr-5 sm:w-[100px] sm:h-[100px]">
            <img class="w-full h-full object-cover" src="{{ asset('assets/images/home/pp-placeholder.png') }}" alt=""/>
        </div>
        <div>
            <div class="flex items-center mb-2 space-x-2">
                <p class="text-custom2 font-medium text-sm sm:text-xl">Macdonald Anyanwu</p>
                <div class="h-5 w-5">
                    <img class="w-full h-full" src="{{ asset('assets/icon/verified.svg') }}" alt=""/>
                </div>
                <div class="flex items-center justify-center rounded-[20px] border border-custom1 text-custom3 px-3 text-xs font-medium h-[29px]">
                    Premium User
                </div>
            </div>
            <p class="font-normal text-custom4 text-xs sm:text-base">@macdonald222</p>
        </div>
    </div>

    {{-- Features List --}}
    <div>
        <p class="text-secondary font-medium text-sm sm:text-xl">What you will enjoy</p>
        @foreach([
            'Unrestricted direct messaging',
            'Ad-free experience',
            'Increased group participation (join more than 2 groups)',
            'Ability to create multiple groups',
            'Access to boost packs for increased reach'
        ] as $feature)
            <div class="flex items-center gap-x-2 p-2">
                <div class="h-5 w-5">
                    <img class="h-full w-full" src="{{ asset('assets/icon/check.svg') }}" alt=""/>
                </div>
                <p class="font-medium text-custom2 text-xs sm:text-base">{{ $feature }}</p>
            </div>
        @endforeach
    </div>

    {{-- Action Buttons --}}
    <div class="mt-10">
        <button class="w-full text-secondary bg-custom3 rounded-[40px] font-medium text-xs mb-2 h-11 sm:text-sm">
            Try Now
        </button>
        <button id="close-sub-dia" class="w-full text-secondary border border-custom6 rounded-[40px] font-medium text-xs h-11 sm:text-sm">
            Not Now
        </button>
    </div>
</div>
