{{-- Onboarding Complete Form --}}
<div id="step-seven" class="flex justify-center items-start animate-fade-in flex-1 sm:py-10 sm:items-center">
    <div class="max-w-[580px] w-full p-0 sm:border-[0.5px] sm:backdrop-blur-40 rounded-[24px] sm:p-[40px] sm:bg-custom5 sm:border-custom1">
        <button id="step-seven-bk-btn" type="button" class="flex items-center transition-transform duration-200 hover:scale-105">
            <div class="h-[20px] w-[20px] sm:h-[24px] sm:w-[24px]">
                <img class="h-full w-full" src="{{ asset('assets/icon/ep_back.svg') }}" alt="Back" />
            </div>
            <p class="font-normal ml-[10px] text-secondary text-xs sm:text-base">
                Step 7 of 7
            </p>
        </button>

        <div class="text-center mt-6 sm:mt-[40px]">
            <div class="h-[100px] w-[100px] mx-auto sm:h-[120px] sm:w-[120px]">
                <img src="{{ asset('assets/images/onboarding-complete.svg') }}" alt="Complete" class="h-full w-full">
            </div>
            
            <h1 class="text-base text-secondary font-medium mt-6 leading-[22.4px] sm:leading-[39.2px] sm:mt-[40px] sm:text-[28px]">
                You're all set!
            </h1>
            
            <p class="text-xs text-custom4 leading-[22.4px] mt-2 font-medium sm:text-base sm:mt-4">
                Welcome to ContentMatch. Your profile is now complete and you're ready to start connecting with other creators.
            </p>
        </div>

        <a href="{{ route('dashboard') }}" class="outline-none shadow-combined h-[41px] mt-8 rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm sm:h-[44px] sm:mt-10 transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg flex items-center justify-center">
            Go to Dashboard
        </a>
    </div>
</div>
