<div class="w-full mx-auto px-4 py-3 sm:py-5 sm:pr-10 sm:pl-10 {{ !$notification['read'] ? 'bg-custom33' : '' }}">
    <div class="w-full">
        <div class="flex">
            {{-- User Avatar --}}
            <div class="rounded-full flex-shrink-0 overflow-hidden mr-2 h-6 w-6 sm:h-12 sm:w-12 sm:mr-3">
                <img class="w-full h-full object-cover" 
                     src="{{ asset('assets/images/home/' . $notification['user_avatar']) }}" 
                     alt=""/>
            </div>

            <div>
                <div class="flex justify-between">
                    <div class="flex flex-col space-y-1">
                        <p class="text-white font-medium text-sm leading-[16.8px] sm:leading-[22.4px] sm:text-base">
                            {{ $notification['user_name'] }}
                            <span class="italic">{{ $notification['content'] }}</span>
                        </p>
                        <p class="font-medium text-custom4 text-sm">{{ $notification['time'] }}</p>
                    </div>

                    {{-- Menu Button --}}
                    <div class="relative group">
                        <button class="menuButton h-5 w-5 ml-5 sm:ml-[10px] sm:w-6 sm:h-6">
                            <img class="h-full w-full" src="{{ asset('assets/icon/menu-h.svg') }}" alt=""/>
                        </button>
                        <div class="tooltip absolute w-[184px] right-0 top-3 z-10 mt-2 opacity-0 invisible font-normal text-base transform scale-95 transition-all duration-300 ease-out bg-custom9 text-custom2 px-3 rounded-xl">
                            <button class="cursor-pointer w-full repo-vid flex items-center space-x-2 h-9 sm:h-[46px]">
                                <div class="h-5 w-5 sm:h-6 sm:w-6">
                                    <img class="h-full w-full" src="{{ asset('assets/icon/delete-outline.svg') }}" alt=""/>
                                </div>
                                <p class="font-medium text-custom2 mt-[1px] truncate leading-none text-xs sm:text-base">
                                    Delete notification
                                </p>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Post Preview (if exists) --}}
                @if(isset($notification['post']))
                <div class="rounded-xl border border-custom6 gap-x-3 flex items-center mt-2 p-[6px] sm:p-2 sm:mt-3 sm:mr-14">
                    <div class="flex-shrink-0 overflow-hidden rounded-lg w-16 h-14 sm:h-[90px] sm:w-[100px]">
                        <img class="w-full h-full object-cover" 
                             src="{{ asset('assets/images/home/' . $notification['post']['image']) }}" 
                             alt=""/>
                    </div>
                    <p class="font-normal text-custom2 text-xs leading-[16px] text-ellipsis overflow-hidden line-clamp-4 sm:leading-[22.4px] sm:text-base">
                        {{ $notification['post']['description'] }}
                    </p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
