{{-- Recommended Users Form --}}
<div id="step-six" class="flex justify-center items-start animate-fade-in flex-1 sm:py-10 sm:items-center">
    <div class="max-w-[580px] w-full p-0 sm:border-[0.5px] sm:backdrop-blur-40 rounded-[24px] sm:p-[40px] sm:bg-custom5 sm:border-custom1">
        <div class="flex items-center justify-between">
            <button id="step-six-bk-btn" type="button" class="flex items-center transition-transform duration-200 hover:scale-105">
                <div class="h-[20px] w-[20px] sm:h-[24px] sm:w-[24px]">
                    <img class="h-full w-full" src="{{ asset('assets/icon/ep_back.svg') }}" alt="Back" />
                </div>
                <p class="font-normal ml-[10px] text-secondary text-xs sm:text-base">
                    Step 6 of 7
                </p>
            </button>

            <a href="#" class="text-xs text-secondary font-normal underline sm:text-base">Skip</a>
        </div>

        <h1 class="text-base text-secondary font-medium mt-6 leading-[22.4px] sm:leading-[39.2px] sm:mt-[40px] sm:text-[28px]">
            Recommended users
        </h1>
        <p class="text-xs text-custom4 leading-[22.4px] mt-1 mb-6 font-medium sm:mb-10 sm:text-base">
            Here are some users you might want to follow
        </p>

        {{-- Hardcoded User List --}}
        <div class="flex items-center justify-between border-b-[0.3px] border-b-custom4 h-[75px] sm:h-20">
            <div class="flex items-center">
                <div class="rounded-full h-10 w-10 sm:h-12 sm:w-12 overflow-hidden">
                    <img src="https://i.pravatar.cc/150?img=1" alt="John Creator" class="h-full w-full object-cover">
                </div>
                <div class="ml-2">
                    <p class="font-medium text-secondary leading-[16.8px] text-xs sm:leading-[22.4px] sm:text-base">
                        John Creator
                    </p>
                    <p class="mt-[2px] text-xs font-normal text-custom2 leading-[16.8px] sm:leading-[19.6px] sm:mt-1 sm:text-sm">
                        125K Followers
                    </p>
                </div>
            </div>
            <button type="button" data-user-id="1" class="follow-user-btn h-8 text-secondary text-xs font-medium border border-secondary px-4 rounded-[20px] leading-[19.67px] sm:text-base sm:h-10">
                Follow
            </button>
        </div>

        <div class="flex items-center justify-between border-b-[0.3px] border-b-custom4 h-[75px] sm:h-20">
            <div class="flex items-center">
                <div class="rounded-full h-10 w-10 sm:h-12 sm:w-12 overflow-hidden">
                    <img src="https://i.pravatar.cc/150?img=2" alt="Sarah Digital" class="h-full w-full object-cover">
                </div>
                <div class="ml-2">
                    <p class="font-medium text-secondary leading-[16.8px] text-xs sm:leading-[22.4px] sm:text-base">
                        Sarah Digital
                    </p>
                    <p class="mt-[2px] text-xs font-normal text-custom2 leading-[16.8px] sm:leading-[19.6px] sm:mt-1 sm:text-sm">
                        89.2K Followers
                    </p>
                </div>
            </div>
            <button type="button" data-user-id="2" class="follow-user-btn h-8 text-secondary text-xs font-medium border border-secondary px-4 rounded-[20px] leading-[19.67px] sm:text-base sm:h-10">
                Follow
            </button>
        </div>

        <div class="flex items-center justify-between border-b-[0.3px] border-b-custom4 h-[75px] sm:h-20">
            <div class="flex items-center">
                <div class="rounded-full h-10 w-10 sm:h-12 sm:w-12 overflow-hidden">
                    <img src="https://i.pravatar.cc/150?img=3" alt="Mike Content" class="h-full w-full object-cover">
                </div>
                <div class="ml-2">
                    <p class="font-medium text-secondary leading-[16.8px] text-xs sm:leading-[22.4px] sm:text-base">
                        Mike Content
                    </p>
                    <p class="mt-[2px] text-xs font-normal text-custom2 leading-[16.8px] sm:leading-[19.6px] sm:mt-1 sm:text-sm">
                        234K Followers
                    </p>
                </div>
            </div>
            <button type="button" data-user-id="3" class="follow-user-btn h-8 text-secondary text-xs font-medium border border-secondary px-4 rounded-[20px] leading-[19.67px] sm:text-base sm:h-10">
                Follow
            </button>
        </div>

        <button type="submit" class="outline-none shadow-combined h-[41px] mt-5 rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm sm:h-[44px] sm:mt-10 transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg">
            Continue
        </button>
    </div>
</div>
