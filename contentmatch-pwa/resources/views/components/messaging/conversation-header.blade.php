<div class="w-full bg-primary border-b border-custom6 flex items-center justify-between absolute top-0 right-0 left-0 px-4 sm:px-10 h-[55px] sm:h-20">
    <div class="flex items-center">
        <button class="h-[18px] w-3 flex items-center justify-center mb-[1.5px] mr-2 sm:hidden">
            <img src="{{ asset('assets/icon/back-outlined-left.svg') }}" alt=""/>
        </button>
        <div class="hidden sm:block h-10 w-10 rounded-full mr-3">
            <img class="h-full w-full object-cover" src="{{ asset('assets/images/home/placeholder-4.png') }}" alt=""/>
        </div>
        <p class="font-bold text-base text-secondary">{{ $conversation->recipient->name ?? 'User Name' }}</p>
    </div>

    {{-- Options Menu --}}
    <div class="relative group">
        <button class="menuButton h-5 w-5 flex items-center justify-center mt-2 relative">
            <img class="h-full w-full" src="{{ asset('assets/icon/home/v-menu.svg') }}" alt="Menu"/>
        </button>
        <div class="tooltip absolute right-0 top-7 z-10 mt-2 opacity-0 invisible font-normal text-base transform scale-95 transition-all duration-300 ease-out bg-custom9 text-custom2 px-3 py-2 rounded-xl border border-custom6 shadow-combined">
            <button class="cursor-pointer w-full flex items-center truncate border-b border-custom6 text-xs h-[33px] sm:text-base sm:h-[46px]">
                View profile
            </button>
            <button class="cursor-pointer w-full flex items-center truncate border-b border-custom6 text-xs h-[33px] sm:text-base sm:h-[46px]">
                Schedule a meet-up
            </button>
            <button class="cursor-pointer w-full flex items-center truncate border-b border-custom6 text-xs h-[33px] sm:text-base sm:h-[46px]">
                Clear chat
            </button>
            <button class="w-full text-error cursor-pointer flex items-center truncate text-xs h-[33px] sm:text-base sm:h-[46px]">
                Block user
            </button>
        </div>
    </div>
</div>