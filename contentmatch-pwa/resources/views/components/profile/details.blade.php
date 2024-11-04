<div class="w-full">
    {{-- Cover Image --}}
    <div class="h-[104px] w-full border-b border-custom6 sm:h-[199.68px]">
        <img class="h-full w-full object-cover" 
             src="{{ asset('assets/images/home/com-place-holder.png') }}" 
             alt=""/>
    </div>

    {{-- Profile Info --}}
    <div class="relative flex justify-between w-full px-4 sm:px-8">
        <div class="flex gap-x-3 flex-col items-start -mt-[21px] sm:items-end sm:flex-row">
            {{-- Profile Picture --}}
            <div class="border border-secondary rounded-full flex-shrink-0 overflow-hidden mb-4 h-16 w-16 sm:h-[100px] sm:w-[100px] sm:mb-0">
                <img class="h-full w-full object-cover" 
                     src="{{ asset('assets/images/home/place-holder.svg') }}" 
                     alt=""/>
            </div>

            {{-- User Info --}}
            <div class="flex w-full -mb-[4px] justify-between">
                <div>
                    <div class="flex items-center gap-x-1">
                        <p class="text-white font-bold mt-[1px] text-sm sm:text-xl">
                            {{ $user->name ?? 'Alena Dokidis' }}
                        </p>
                        <div class="h-[18px] w-[18px] sm:h-5 sm:w-5">
                            <img class="w-full h-full" src="{{ asset('assets/icon/verified.svg') }}" alt=""/>
                        </div>
                    </div>

                    <p class="text-custom4 font-medium text-xs mt-[1px] sm:mt-0 sm:text-sm">
                        {{ '@' . ($user->username ?? 'macdonald222') }}
                    </p>

                    {{-- Stats --}}
                    <div class="flex gap-x-3 mt-[2px] sm:mt-[1px]">
                        <div class="flex gap-x-1">
                            <p class="font-medium text-xs text-white sm:text-base">2.2M</p>
                            <p class="font-normal text-xs pt-[1px] text-custom1 sm:text-sm">Followers</p>
                        </div>
                        <div class="flex gap-x-1">
                            <p class="font-medium text-white text-xs sm:text-base">12k</p>
                            <p class="font-normal text-xs pt-[1px] text-custom1 sm:text-sm">Following</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Action Buttons --}}
        <div class="absolute right-4 top-[2px] flex justify-end mt-2 gap-x-3 sm:static">
            <button class="rounded-[32px] flex-shrnk-0 px-3 border border-custom6 text-secondary mt-[1px] h-[33px] sm:h-[38px] text-base">
                Edit Profile
            </button>
        </div>
    </div>

    {{-- Bio & Social Links --}}
    <div class="px-4 mt-3 sm:px-8">
        <p class="text-xs font-normal text-custom2 border border-custom6 p-2 rounded-lg sm:text-sm">
            {{ $user->bio ?? "Designer, Creative thinker. Passionate about crafting meaningful experience. Explorer of ideas, art and life little details" }}
        </p>

        {{-- Social Links --}}
        @include('components.profile.social-links')
    </div>
</div>
