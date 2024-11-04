<div class="flex items-center h-9 gap-x-3 mt-4 justify-center px-[25px] sm:px-0 sm:justify-between">
    {{-- Dislike --}}
    <button class="flex items-center justify-center flex-1 border border-custom6 rounded-[32px] h-full px-3 gap-x-2">
        <div class="h-5 w-5">
            <img class="h-full w-full" src="{{ asset('assets/icon/dislike.svg') }}" alt=""/>
        </div>
        <p class="hidden size1:block font-medium text-secondary text-xs leading-[15px]">
            Dislike
        </p>
    </button>

    {{-- Like --}}
    <button class="flex items-center justify-center flex-1 border border-custom6 rounded-[32px] h-full px-3 gap-x-2">
        <div class="h-5 w-5">
            <img class="h-full w-full" src="{{ asset('assets/icon/like.svg') }}" alt=""/>
        </div>
        <p class="hidden size1:block font-medium text-secondary text-xs leading-[15px]">
            Like
        </p>
    </button>

    {{-- Follow --}}
    <button class="flex items-center justify-center flex-1 border border-custom6 rounded-[32px] h-full px-3 gap-x-2">
        <div class="h-5 w-5">
            <img class="h-full w-full" src="{{ asset('assets/icon/follow.svg') }}" alt=""/>
        </div>
        <p class="hidden size1:block font-medium text-secondary text-xs leading-[15px]">
            Follow
        </p>
    </button>

    {{-- Super Engage --}}
    <button class="sup-eng-btn flex items-center justify-center flex-1 border border-custom6 rounded-[32px] h-full px-3 gap-x-2">
        <div class="h-5 w-5">
            <img class="h-full w-full" src="{{ asset('assets/icon/super-engage.svg') }}" alt=""/>
        </div>
        <p class="hidden size1:block font-medium text-secondary text-xs leading-[15px] truncate">
            Super Engage
        </p>
    </button>

    {{-- Collaboration Request --}}
    <button class="send-fdbk-btn flex items-center justify-center flex-1 border border-custom6 rounded-[32px] h-full px-3 gap-x-2">
        <div class="h-5 w-5">
            <img class="h-full w-full" src="{{ asset('assets/icon/collaborate-req.svg') }}" alt=""/>
        </div>
        <p class="hidden size1:block font-medium text-secondary text-xs leading-[15px] truncate">
            Collaboration request
        </p>
    </button>
</div> 