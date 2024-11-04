<div id="back-drop-2" class="inset-y-0 fixed hidden z-40 h-screen w-screen bg-custom12 top-0 left-0"></div>
<div id="mobile-drawup" class="hidden dialog z-50 m-auto w-full p-0 border-[0.5px] backdrop-blur-40 pt-2 px-4 rounded-tl-3xl rounded-tr-3xl sm:rounded-[24px] h-auto lg:h-screen xl:h-auto overflow-y-auto sm:p-8 sm:bg-custom5 sm:max-w-[580px] sm:border-custom1">
    {{-- Mobile Handle --}}
    <div class="block mx-auto w-[120px] h-1 rounded-xl bg-custom4 mb-3 sm:hidden"></div>

    {{-- Header --}}
    <p class="text-center font-medium text-secondary text-base sm:text-xl">Engagement</p>

    {{-- Content Preview --}}
    <div class="mb-4 mt-4 relative w-full h-[128px] rounded-lg border-[0.2px] border-custom13 overflow-hidden sm:h-[180px]">
        <div class="absolute top-3 left-3 flex items-center justify-center h-[22px] w-9 bg-custom10 rounded-[20px] backdrop-blur-8 overflow-hidden sm:w-[58px] sm:h-10">
            <img class="w-5 h-[14px] sm:w-[34px] sm:h-6" src="{{ asset('assets/icon/socials/youtube.svg') }}"/>
        </div>
        <button class="absolute right-3 bottom-3 mt-4 flex items-center justify-center h-[30px] w-[30px] bg-custom10 rounded-[20px] backdrop-blur-8 overflow-hidden sm:h-10 sm:w-10">
            <img class="h-[18px] w-[18px] sm:w-6 sm:h-6" src="{{ asset('assets/icon/like.svg') }}" alt=""/>
        </button>
        <img class="h-full w-full object-cover" src="{{ asset('assets/images/home/engagement.png') }}" alt=""/>
    </div>

    {{-- Engagement Options --}}
    <div class="space-y-4">
        {{-- Did you engage? --}}
        <div class="h-11 w-full flex items-center justify-between sm:h-14">
            <p class="text-secondary font-normal text-xs sm:text-sm">Did you engage?</p>
            <div class="flex items-center justify-center">
                <label for="did-you-engage" class="flex items-center cursor-pointer">
                    <span id="did-you-engage-label" class="mr-3 text-secondary font-medium">No</span>
                    <div class="relative">
                        <input id="did-you-engage" type="checkbox" class="sr-only peer"/>
                        <div class="block bg-gray-600 border border-custom4 peer-checked:bg-custom14 peer-checked:border-none w-[38px] h-6 rounded-full transition"></div>
                        <div class="dot absolute left-1 top-1 w-[16px] h-[16px] rounded-full bg-white border border-custom4 peer-checked:translate-x-[15px] peer-checked:none transition-transform"></div>
                    </div>
                </label>
            </div>
        </div>

        {{-- Did you subscribe? --}}
        <div class="h-11 w-full flex items-center justify-between sm:h-14">
            <p class="text-secondary font-normal text-xs sm:text-sm">Did you subscribe?</p>
            <div class="flex items-center justify-center">
                <label for="did-you-subscribe" class="flex items-center cursor-pointer">
                    <span id="did-you-subscribe-label" class="mr-3 text-secondary font-medium">Yes</span>
                    <div class="relative">
                        <input id="did-you-subscribe" checked type="checkbox" class="sr-only peer"/>
                        <div class="block bg-gray-600 border border-custom4 peer-checked:bg-custom14 peer-checked:border-none w-[38px] h-6 rounded-full transition"></div>
                        <div class="dot absolute left-1 top-1 w-[16px] h-[16px] rounded-full bg-white border border-custom4 peer-checked:translate-x-[15px] peer-checked:none transition-transform"></div>
                    </div>
                </label>
            </div>
        </div>

        {{-- Additional engagement options... --}}
    </div>

    {{-- Proof of Engagement --}}
    <div class="h-11 w-full flex items-center justify-between border-t border-custom6">
        <div class="flex">
            <p class="text-secondary font-normal text-xs sm:text-sm">Show proof of engagement</p>
            <div class="h-4 w-4 ml-1 sm:h-[18px] sm:w-[18px] sm:ml-[2px]">
                <img class="h-full w-full" src="{{ asset('assets/icon/tool-tip.svg') }}" alt=""/>
            </div>
        </div>
        <button onclick="attachImage('eng-image-input', 'engage-prof-img-cont')" class="flex items-center">
            <div class="flex items-center justify-center h-6 w-6">
                <img class="h-3 w-3" src="{{ asset('assets/icon/home/add-w.svg') }}"/>
            </div>
            <p class="ml-2 text-xs text-secondary font-normal sm:text-sm">Attach Image</p>
        </button>
        <input type="file" id="eng-image-input" accept="image/*" class="hidden"/>
    </div>

    {{-- Image Preview Container --}}
    <div id="engage-prof-img-cont" class="flex flex-wrap"></div>

    {{-- Action Buttons --}}
    <div class="space-y-4 mt-4">
        <button class="outline-none shadow-combined h-[41px] rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm sm:h-[44px] transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg">
            Continue
        </button>
        <button id="cancel-engage" class="outline-none h-[41px] mb-8 rounded-[40px] text-custom2 w-full text-xs sm:text-sm sm:h-[44px] transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg sm:mb-0">
            Cancel
        </button>
    </div>
</div>
