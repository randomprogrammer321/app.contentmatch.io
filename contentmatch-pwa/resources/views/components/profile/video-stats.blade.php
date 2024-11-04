<div class="flex items-center justify-between gap-1 mt-3 mb-3 sm:mt-[22px] sm:mb-[26px]">
    {{-- Left Side Stats --}}
    <div class="flex items-center">
        {{-- User Avatars --}}
        <div class="h-[28px] hidden sm:flex">
            <div class="h-full w-[28px] rounded-full border border-custom4 overflow-hidden">
                <img class="h-full w-full object-cover" 
                     src="{{ asset('assets/images/home/placeholder-1.png') }}" 
                     alt=""/>
            </div>
            <div class="h-full w-[28px] -ml-[10px] rounded-full border border-custom4 overflow-hidden">
                <img class="h-full w-full object-cover" 
                     src="{{ asset('assets/images/home/placeholder-2.png') }}" 
                     alt=""/>
            </div>
            <div class="h-full w-[28px] -ml-[10px] rounded-full border border-custom4 overflow-hidden">
                <img class="h-full w-full object-cover" 
                     src="{{ asset('assets/images/home/placeholder-3.png') }}" 
                     alt=""/>
            </div>
            <div class="h-full w-[28px] -ml-[10px] rounded-full border border-custom4 overflow-hidden">
                <img class="h-full w-full object-cover" 
                     src="{{ asset('assets/images/home/placeholder-4.png') }}" 
                     alt=""/>
            </div>
            <div class="h-full w-[28px] -ml-[10px] rounded-full border border-custom4 overflow-hidden">
                <img class="h-full w-full object-cover" 
                     src="{{ asset('assets/images/home/placeholder-5.png') }}" 
                     alt=""/>
            </div>
        </div>

        {{-- Likes Count --}}
        <p class="font-bold text-secondary text-[10px] ml-2 mr-1 sm:text-base">
            {{ $video['likes_count'] ?? '12.2k' }}
        </p>
        <p class="text-[10px] font-normal text-custom4 sm:text-base">likes</p>

        {{-- Separator --}}
        <div class="h-1 w-1 bg-custom1 rounded-full mx-1 sm:mx-2 sm:h-[6px] sm:w-[6px]"></div>

        {{-- Feedback Count --}}
        <p class="font-bold text-secondary text-[10px] ml-[1px] mr-1 sm:ml-2 sm:text-base">
            {{ $video['feedback_count'] ?? '12M' }}
        </p>
        <p class="text-[10px] font-normal text-custom4 sm:text-base">Feedbacks</p>
    </div>

    {{-- Right Side Actions --}}
    <div class="flex items-center">
        {{-- Like Button --}}
        <button class="h-[30px] w-[30px] rounded-full border border-custom4 flex items-center justify-center sm:h-10 sm:w-10">
            <img class="h-[18px] w-[18px] sm:h-6 sm:w-6" 
                 src="{{ asset('assets/icon/like.svg') }}" 
                 alt=""/>
        </button>

        {{-- Engage Button --}}
        <button class="engage-btn h-[30px] w-[30px] mx-3 rounded-full border border-custom4 flex items-center justify-center sm:h-10 sm:w-10">
            <img class="h-[18px] w-[18px] sm:h-6 sm:w-6" 
                 src="{{ asset('assets/icon/interactive-space.svg') }}" 
                 alt=""/>
        </button>

        {{-- Feedback Button --}}
        <button class="send-fdbk-btn h-[33px] bg-secondary px-3 rounded-[32px] flex items-center text-xs truncate text-custom9 font-medium pt-[1px]">
            Send Feedback
        </button>
    </div>
</div> 