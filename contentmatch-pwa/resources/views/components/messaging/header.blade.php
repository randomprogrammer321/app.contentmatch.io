<header class="px-4 sm:px-5">
    <div class="flex justify-between h-7 items-center">
        <button id="hb-btn" class="h-10 w-10 flex items-center justify-center mr-1 sm:h-14 sm:w-14 size4:hidden">
            <img class="w-full h-full" src="{{ asset('assets/logo/logo.svg') }}"/>
        </button>
        <p class="font-medium text-white w-full text-center sm:text-start text-sm mr-2 sm:mr-0 sm:text-xl sm:w-max">
            Messages
        </p>
        <button class="h-6 w-6 block sm:hidden">
            <img class="h-full w-full" src="{{ asset('assets/icon/search.svg') }}" alt=""/>
        </button>

        <button class="hidden h-6 w-6 sm:flex items-center justify-center bg-white flex-shrink-0 rounded-full">
            <img class="h-[11.67px] w-[11.67px]" src="{{ asset('assets/icon/home/add-c.svg') }}" alt=""/>
        </button>
    </div>

    <div class="hidden sm:flex flex-1 items-center px-3 rounded-[32px] overflow-hidden bg-custom8 mt-4 mx-5 sm:px-5 sm:mx-0">
        <div class="flex items-center h-11 flex-1">
            <input type="text" class="w-full h-full mt-[1px] text-xs bg-transparent text-custom2 px-0 border-0 border-none placeholder-custom4 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-sm focus:border-b-[2px] focus:border-none" placeholder="Search"/>
            <div class="w-8 ml-3 h-5 sm:ml-2 border-l border-custom flex justify-end">
                <img class="h-full w-5" src="{{ asset('assets/icon/home/ep_search.svg') }}" alt=""/>
            </div>
        </div>
    </div>

    <div class="mt-4 flex flex-col gap-y-4">
        <button class="flex justify-between items-center w-full">
            <div class="flex">
                <div class="h-6 w-6 mr-2">
                    <img class="w-full h-full" src="{{ asset('assets/icon/message-incoming.svg') }}" alt=""/>
                </div>
                <div>
                    <p class="text-sm font-medium text-white leading-[19.6px] mb-[2px] text-start">Message requests</p>
                    <p class="text-xs text-custom1 font-medium text-start">1 Message</p>
                </div>
            </div>
            <div class="h-5 w-5 flex items-center justify-center">
                <img src="{{ asset('assets/icon/right-arrow.svg') }}"/>
            </div>
        </button>

        <button class="flex justify-between items-center w-full">
            <div class="flex">
                <div class="h-6 w-6 mr-2">
                    <img class="w-full h-full" src="{{ asset('assets/icon/space-outline-sharp.svg') }}" alt=""/>
                </div>
                <div>
                    <p class="text-sm font-medium text-white leading-[19.6px] mb-[2px] text-start">Engagement requests</p>
                    <p class="text-xs text-custom1 font-medium text-start">4 Engagements</p>
                </div>
            </div>
            <div class="h-5 w-5 flex items-center justify-center">
                <img src="{{ asset('assets/icon/right-arrow.svg') }}"/>
            </div>
        </button>
    </div>
</header>
