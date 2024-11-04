<div class="border border-custom6 bg-custom21 w-full rounded-xl p-3 mb-4 sm:bg-primary sm:mb-7 sm:p-5">
    <p class="font-bold {{ $request->status_color }} text-xs mb-1 sm:text-sm">
        {{ $request->status_text }}
    </p>

    <div class="flex justify-between mb-1 s:mb-2">
        <div class="flex gap-x-1">
            <div class="rounded-full overflow-hidden h-8 w-8 sm:w-11 sm:h-11">
                <img class="w-full h-full object-cover" 
                     src="{{ $request->creator->avatar ?? asset('assets/images/home/pp-placeholder.png') }}" 
                     alt="{{ $request->creator->name }}"/>
            </div>
            <div>
                <div class="flex items-center gap-x-1">
                    <p class="font-bold text-white text-xs sm:text-base">
                        {{ $request->creator->name }}
                    </p>
                    @if($request->creator->is_verified)
                        <div class="h-5 w-5">
                            <img class="h-full w-full" src="{{ asset('assets/icon/verified.svg') }}" alt=""/>
                        </div>
                    @endif
                </div>
                <p class="font-medium text-custom4 text-xs sm:text-sm">
                    {{ '@' . $request->creator->username }}
                </p>
            </div>
        </div>
        
        @if($request->isPending())
            <div class="flex gap-x-3">
                <button class="flex items-center truncate justify-center leading-[10px] px-3 rounded-full border border-error2 h-[33px] text-error2 font-medium text-xs sm:text-base sm:h-[38px]">
                    Decline
                </button>
                <button class="hidden items-center truncate justify-center leading-[10px] px-3 rounded-full bg-custom3 h-[33px] text-secondary font-medium text-xs sm:flex sm:text-base sm:h-[38px]">
                    Super engagement request
                </button>
            </div>
        @endif
    </div>

    <p class="text-secondary font-normal mb-1 text-xs leading-[16.8px] sm:leading-[22.4px] sm:text-base">
        {{ $request->creator->bio }}
    </p>

    @if($request->isPending())
        <button class="flex items-center mt-1 w-full truncate justify-center leading-[10px] px-3 rounded-full bg-custom3 h-[33px] text-secondary font-medium text-xs sm:hidden sm:h-[38px]">
            Super engagement request
        </button>
    @endif
</div> 