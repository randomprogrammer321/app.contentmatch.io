<div class="w-full mb-5 border-b border-custom6">
    <div class="flex justify-between w-full mb-2 sm:mb-1">
        <div class="flex items-center">
            <div class="h-8 w-8 rounded-full md:h-10 md:w-10">
                <img class="w-full h-full" src="{{ asset($post['user']['avatar']) }}" />
            </div>
            <p class="text-xs font-medium text-secondary pl-1 pr-3 sm:text-base">
                {{ $post['user']['name'] }}
            </p>
            <button class="text-xs font-bold text-secondary sm:text-sm">
                Follow
            </button>
        </div>
        <div class="relative group">
            <button class="menuButton h-5 w-5 flex items-center justify-center mt-2 relative">
                <img class="h-full w-full" src="{{ asset('assets/icon/home/v-menu.svg') }}" alt="Menu" />
            </button>
            {{-- Menu Dropdown --}}
            <div class="tooltip absolute right-0 top-7 z-10 mt-2 opacity-0 invisible font-normal text-base transform scale-95 transition-all duration-300 ease-out bg-custom9 text-custom2 px-3 py-2 rounded-xl border border-custom6 shadow-combined">
                <button class="cursor-pointer w-full repo-vid flex items-center h-[46px] truncate border-b border-custom6">
                    View {{ $post['user']['name'] }}'s profile
                </button>
                <button class="repo-vid w-full cursor-pointer flex items-center h-[46px] truncate">
                    Report video
                </button>
            </div>
        </div>
    </div>
    
    <p class="text-xs leading-[16.8px] text-secondary font-normal sm:leading-[22.4px] sm:text-base">
        {{ $post['content'] }}
    </p>

    <div class="relative w-full mt-3 h-[311px] sm:h-[579px] sm:mt-4">
        <div class="absolute top-2 left-2 flex bg-custom10 items-center h-[22px] px-2 backdrop-blur-8 rounded-[20px] sm:top-4 sm:left-4 sm:px-3 sm:h-9">
            <div class="w-5 h-[14px] sm:w-7 sm:h-5">
                <img class="w-full h-full" src="{{ asset('assets/icon/socials/' . $post['platform'] . '.svg') }}" />
            </div>
            <p class="text-[10px] text-secondary font-medium pl-1 sm:text-sm">
                Uploaded from {{ ucfirst($post['platform']) }}
            </p>
        </div>
        <div class="h-full w-full overflow-hidden rounded-lg">
            <img class="object-cover h-full w-full" src="{{ asset($post['image']) }}" />
        </div>
    </div>

    {{-- Post Stats --}}
    <div class="flex items-center justify-between gap-1 mt-3 mb-3 sm:mt-[22px] sm:mb-[26px]">
        {{-- Likes and Feedback Count --}}
        <div class="flex items-center">
            <p class="font-bold text-secondary text-[10px] ml-2 mr-1 sm:text-base">
                {{ $post['likes'] }}
            </p>
            <p class="text-[10px] font-normal text-custom4 sm:text-base">likes</p>
            <div class="h-1 w-1 bg-custom1 rounded-full mx-1 sm:mx-2 sm:h-[6px] sm:w-[6px]"></div>
            <p class="font-bold text-secondary text-[10px] ml-[1px] mr-1 sm:ml-2 sm:text-base">
                {{ $post['feedbacks'] }}
            </p>
            <p class="text-[10px] font-normal text-custom4 sm:text-base">Feedbacks</p>
        </div>

        {{-- Action Buttons --}}
        <div class="flex items-center">
            <button class="h-[30px] w-[30px] rounded-full border border-custom4 flex items-center justify-center sm:h-10 sm:w-10">
                <img class="h-[18px] w-[18px] sm:h-6 sm:w-6" src="{{ asset('assets/icon/like.svg') }}" alt="" />
            </button>
            <button class="engage-btn h-[30px] w-[30px] mx-3 rounded-full border border-custom4 flex items-center justify-center sm:h-10 sm:w-10">
                <img class="h-[18px] w-[18px] sm:h-6 sm:w-6" src="{{ asset('assets/icon/interactive-space.svg') }}" alt="" />
            </button>
            <button class="send-fdbk-btn h-[33px] bg-secondary px-3 rounded-[32px] flex items-center text-xs truncate text-custom9 font-medium pt-[1px]">
                Send Feedback
            </button>
        </div>
    </div>
</div> 