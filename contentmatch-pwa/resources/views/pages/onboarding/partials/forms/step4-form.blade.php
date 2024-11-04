{{-- Content Creator Details Form --}}
<form id="about-two" class="flex justify-center items-start animate-fade-in flex-1 sm:py-10 sm:items-center">
    <div class="max-w-[720px] w-full p-0 sm:border-[0.5px] sm:backdrop-blur-40 rounded-[24px] sm:p-[40px] sm:bg-custom5 sm:border-custom1">
        <button id="about-two-bk-btn" type="button" class="flex items-center transition-transform duration-200 hover:scale-105">
            <div class="h-[20px] w-[20px] sm:h-[24px] sm:w-[24px]">
                <img class="h-full w-full" src="{{ asset('assets/icon/ep_back.svg') }}" alt="Back" />
            </div>
            <p class="font-normal ml-[10px] text-secondary text-xs sm:text-base">
                Step 4 of 7
            </p>
        </button>
        
        <h1 class="text-base text-secondary font-medium my-6 leading-[22.4px] sm:leading-[39.2px] sm:mt-[40px] sm:mb-10 md:text-[28px]">
            Tell us about your content
        </h1>

        {{-- Content Type Section --}}
        @include('pages.onboarding.partials.forms.sections.content-type')
        
        {{-- Audience Size Section --}}
        @include('pages.onboarding.partials.forms.sections.audience-size')

        <button type="submit" class="outline-none shadow-combined h-[41px] mt-4 rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm sm:h-[44px] sm:mt-10 transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg">
            Continue
        </button>
    </div>
</form>
