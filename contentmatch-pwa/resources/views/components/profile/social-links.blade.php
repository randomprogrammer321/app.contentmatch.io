<div class="flex gap-y-2 gap-x-3 mt-3 flex-col items-start sm:items-center sm:flex-row">
    <p class="font-medium text-xs text-custom4 flex-shrink-0 sm:text-sm">
        {{ $user->name ?? "Alena's" }} Social links
    </p>
    <div class="flex flex-wrap gap-3">
        <button class="h-[26px] flex items-center rounded-[40px] gap-x-2 px-2 border border-custom6 sm:px-3 sm:h-9">
            <div class="h-[18px] w-[18px] sm:h-5 sm:w-5">
                <img class="h-full w-full" src="{{ asset('assets/icon/socials/instagram.svg') }}" alt=""/>
            </div>
            <p class="text-secondary font-medium text-xs sm:text-sm">Instagram</p>
            <div class="h-4 w-4 sm:h-5 sm:w-5">
                <img class="h-full w-full" src="{{ asset('assets/icon/arrow-outward.svg') }}" alt=""/>
            </div>
        </button>

        <button class="h-[26px] flex items-center rounded-[40px] gap-x-2 px-2 border border-custom6 sm:px-3 sm:h-9">
            <div class="h-[18px] w-[25.8px] sm:h-5 sm:w-[28.33px]">
                <img class="h-full w-full" src="{{ asset('assets/icon/socials/youtube.svg') }}" alt=""/>
            </div>
            <p class="text-secondary font-medium text-xs sm:text-sm">YouTube</p>
            <div class="h-4 w-4 sm:h-5 sm:w-5">
                <img class="h-full w-full" src="{{ asset('assets/icon/arrow-outward.svg') }}" alt=""/>
            </div>
        </button>

        <button class="h-[26px] flex items-center rounded-[40px] gap-x-2 px-2 border border-custom6 sm:px-3 sm:h-9">
            <div class="h-[18px] w-4 sm:h-5 sm:w-[17.66px]">
                <img class="h-full w-full" src="{{ asset('assets/icon/socials/tiktok.svg') }}" alt=""/>
            </div>
            <p class="text-secondary font-medium text-xs sm:text-sm">TikTok</p>
            <div class="h-4 w-4 sm:h-5 sm:w-5">
                <img class="h-full w-full" src="{{ asset('assets/icon/arrow-outward.svg') }}" alt=""/>
            </div>
        </button>
    </div>
</div>
