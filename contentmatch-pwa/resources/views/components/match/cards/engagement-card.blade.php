<div class="border border-custom6 bg-custom21 w-full rounded-xl p-3 mb-4 sm:mb-7 sm:p-5">
    <div class="flex justify-between mb-1 s:mb-2">
        <div class="flex gap-x-1">
            <div class="rounded-full overflow-hidden h-8 w-8 sm:w-11 sm:h-11">
                <img class="w-full h-full object-cover" 
                     src="{{ $engagement->creator->avatar ?? asset('assets/images/home/pp-placeholder.png') }}" 
                     alt="{{ $engagement->creator->name }}"/>
            </div>
            <div>
                <div class="flex items-center gap-x-1">
                    <p class="font-bold text-white text-xs sm:text-base">
                        {{ $engagement->creator->name }}
                    </p>
                    @if($engagement->creator->is_verified)
                        <div class="h-5 w-5">
                            <img class="h-full w-full" src="{{ asset('assets/icon/verified.svg') }}" alt=""/>
                        </div>
                    @endif
                </div>
                <p class="font-medium text-custom4 text-xs sm:text-sm">
                    {{ '@' . $engagement->creator->username }}
                </p>
            </div>
        </div>
        <div class="flex gap-x-3">
            <button class="flex items-center justify-center rounded-full border border-custom6 h-9 w-9 sm:h-10 sm:w-10">
                <img class="w-5 h-5 sm:h-6 sm:w-6" src="{{ asset('assets/icon/nav/messages-inactive.svg') }}"/>
            </button>
            <button class="flex items-center justify-center leading-[10px] px-3 rounded-full bg-secondary h-[33px] text-custom9 font-medium text-xs sm:text-base sm:h-[38px]">
                {{ $engagement->is_following ? 'Following' : 'Follow' }}
            </button>
        </div>
    </div>
    <p class="text-secondary font-normal mb-1 text-xs leading-[16.8px] sm:leading-[22.4px] sm:text-base">
        {{ $engagement->creator->bio }}
    </p>
    <p class="font-bold text-custom4 text-xs sm:text-sm">
        You engaged with this creator on {{ $engagement->created_at->format('M d, Y') }}
    </p>
</div> 