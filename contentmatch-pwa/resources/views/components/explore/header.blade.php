<header class="relative w-full h-[52px] px-mpd flex items-center border-b border-custom6 sm:h-[84px] lg:px-10">
    <button id="hb-btn" class="h-10 w-10 flex items-center justify-center mr-1 sm:h-14 sm:w-14 size4:hidden">
        <img class="w-full h-full" src="{{ asset('assets/logo/logo.svg') }}" />
    </button>
    <div class="w-full flex items-center sm:h-[44px]">
        <div class="w-full">
            <div id="conta" class="flex flex-1 h-9 items-center px-3 rounded-[32px] overflow-hidden bg-custom8 mx-5 sm:h-11 sm:px-5 sm:mx-0">
                <div class="flex items-center h-5 flex-1">
                    <input id="search-input" 
                           class="w-full h-full mt-1 text-xs bg-transparent text-custom2 px-0 border-none placeholder-custom4 focus:outline-none focus:ring-0 sm:h-12 sm:text-sm"
                           placeholder="Search creators, communities..."/>
                    <div class="flex items-center">
                        <button id="close-btn" class="flex-shrink-0 rounded-full border border-custom4 hidden items-center justify-center transform scale-0 opacity-0 transition-all duration-300 ease-in-out w-5 h-5 sm:h-6 sm:w-6">
                            <img class="h-3 w-3 sm:h-4 sm:w-4" src="{{ asset('assets/icon/close-white.svg') }}" alt="Close"/>
                        </button>
                        <div class="w-7 h-5 ml-2 border-l border-gray-400 flex justify-end sm:w-8">
                            <img class="h-full w-5" src="{{ asset('assets/icon/home/ep_search.svg') }}" alt="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> 