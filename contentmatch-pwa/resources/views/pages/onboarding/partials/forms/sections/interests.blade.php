<div class="pb-3 sm:pb-5">
    <p class="font-medium text-secondary leading-[16.8px] mt-3 text-xs sm:leading-[28px] sm:text-xl sm:mt-5">
        Choose your interests
    </p>
    <div class="flex flex-wrap mt-3 gap-y-3 gap-x-2 sm:gap-x-[14px] sm:mt-5 sm:gap-y-6 size1:grid size1:grid-cols-3">
        @foreach([
            ['Hobbies', 'openmoji_man-playing-handball'],
            ['Games', 'fluent_games-32-filled'],
            ['Passion', 'office-worker'],
            ['Religion', 'twemoji_church'],
            ['Dancing', 'noto_man-dancing'],
            ['Writing', 'flat_pen'],
            ['Nature', 'noto_palm-tree'],
            ['Fashion', 'noto_dress'],
            ['Travel', 'twemoji_airplane'],
            ['Arts and Culture', 'openmoji_artist'],
            ['Technology', 'twemoji_airplane'],
            ['Health and wellbeing', 'fluent-emoji_health-worker']
        ] as [$interest, $icon])
            <button type="button" data-interest="{{ $interest }}" class="interest-btn flex-grow h-[33px] px-3 w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]">
                <div class="flex items-center justify-center">
                    <div class="h-5 w-5 sm:h-6 sm:w-6">
                        <img class="h-full w-full" src="{{ asset("assets/icon/emoji/{$icon}.svg") }}" alt="" />
                    </div>
                    <p class="leading-[22.4px] ml-1 mt-[2px]">{{ $interest }}</p>
                </div>
            </button>
        @endforeach
    </div>
</div>
