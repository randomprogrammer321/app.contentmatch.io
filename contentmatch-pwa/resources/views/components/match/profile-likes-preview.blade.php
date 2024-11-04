<div class="flex items-center gap-x-1 menuButton cursor-pointer relative group">
    <div class="flex items-center">
        @foreach($profileLikes->take(3) as $like)
            <div class="h-6 w-6 rounded-full border border-custom2 {{ !$loop->last ? '-mr-2' : '' }}">
                <img class="h-full w-full object-cover" 
                     src="{{ $like->user->avatar ?? asset('assets/images/home/pp-placeholder.png') }}" 
                     alt="{{ $like->user->name }}"/>
            </div>
        @endforeach
    </div>
    <p class="hidden sm:block font-medium truncate text-custom2 text-sm md:text-base">
        {{ $profileLikes->count() }} creators liked your profile
    </p>

    <div class="tooltip fixed sm:absolute right-0 top-0 z-10 mt-2 opacity-0 invisible transform scale-95 transition-all duration-300 ease-out w-full h-full overflow-hidden bg-primary sm:bg-custom21 sm:border sm:border-custom6 sm:rounded-xl sm:top-7 sm:h-max sm:w-[440px]">
        <div class="closeMenuButton flex items-center pl-4 h-[42px] gap-x-2 border-b border-custom6 sm:hidden">
            <button class="closeMenuButton z-50 mb-[1px]">
                <img class="h-[17px] w-[9px]" src="{{ asset('assets/icon/back-outlined-left.svg') }}" alt=""/>
            </button>
            <p class="text-white font-bold text-xs">Back</p>
        </div>
        
        <div class="bg-custom21 p-4 sm:p-5">
            <p class="font-medium text-sm text-custom2 block sm:hidden">
                {{ $profileLikes->count() }} creators liked your profile
            </p>
            
            @foreach($profileLikes as $like)
                <div class="flex border-b border-custom6 items-center justify-between gap-x-2 h-[60px] sm:h-[76px]">
                    <div class="flex items-center gap-x-1 sm:gap-x-2">
                        <div class="rounded-full h-8 w-8 sm:h-11 sm:w-11">
                            <img class="h-full w-full object-cover" 
                                 src="{{ $like->user->avatar ?? asset('assets/images/home/pp-placeholder.png') }}"/>
                        </div>
                        <p class="text-ellipsis overflow-hidden line-clamp-3 sm:line-clamp-1 text-white text-xs sm:text-base">
                            <span class="font-bold">{{ $like->user->name }}</span>
                            <span class="font-normal">liked your profile</span>
                        </p>
                    </div>
                    <div class="flex items-center justify-center rounded-full border border-custom6 h-9 w-9 sm:h-11 sm:w-11">
                        <img class="w-5 h-5 sm:h-6 sm:w-6" 
                             src="{{ asset('assets/icon/nav/messages-inactive.svg') }}"/>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> 