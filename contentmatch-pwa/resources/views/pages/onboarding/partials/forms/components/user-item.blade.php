<div class="flex items-center justify-between border-b-[0.3px] border-b-custom4 h-[75px] sm:h-20">
    <div class="flex items-center">
        <div class="rounded-full h-10 w-10 sm:h-12 sm:w-12 overflow-hidden">
            <img src="{{ $avatar ?? asset('assets/images/default-avatar.png') }}" alt="{{ $name }}" class="h-full w-full object-cover">
        </div>
        <div class="ml-2">
            <p class="font-medium text-secondary leading-[16.8px] text-xs sm:leading-[22.4px] sm:text-base">
                {{ $name }}
            </p>
            <p class="mt-[2px] text-xs font-normal text-custom2 leading-[16.8px] sm:leading-[19.6px] sm:mt-1 sm:text-sm">
                {{ $followers }} Followers
            </p>
        </div>
    </div>
    <button type="button" data-user-id="{{ $id }}" class="follow-user-btn h-8 text-secondary text-xs font-medium border border-secondary px-4 rounded-[20px] leading-[19.67px] sm:text-base sm:h-10">
        Follow
    </button>
</div>
