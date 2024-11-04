<div class="relative group">
    <button class="menuButton h-5 w-5 flex items-center justify-center mt-2 relative">
        <img class="h-full w-full" 
             src="{{ asset('assets/icon/home/v-menu.svg') }}" 
             alt="Menu"/>
    </button>
    
    <div class="tooltip absolute w-[184px] right-0 top-7 z-10 mt-2 opacity-0 invisible font-normal text-base transform scale-95 transition-all duration-300 ease-out bg-custom9 text-custom2 px-3 rounded-xl border border-custom6 shadow-combined">
        @if(isset($menu_items))
            @foreach($menu_items as $item)
                <button class="cursor-pointer w-full flex items-center h-[46px] truncate {{ $item['class'] ?? '' }}"
                        onclick="{{ $item['action'] ?? '' }}">
                    @if(isset($item['icon']))
                        <div class="h-5 w-5 sm:h-6 sm:w-6 mr-2">
                            <img class="h-full w-full" 
                                 src="{{ asset($item['icon']) }}" 
                                 alt="{{ $item['text'] }}"/>
                        </div>
                    @endif
                    {{ $item['text'] }}
                </button>
            @endforeach
        @else
            {{-- Default Menu Items --}}
            <button class="cursor-pointer w-full flex items-center h-[46px] truncate">
                <div class="h-5 w-5 sm:h-6 sm:w-6 mr-2">
                    <img class="h-full w-full" 
                         src="{{ asset('assets/icon/delete-outline.svg') }}" 
                         alt="Delete"/>
                </div>
                Delete post
            </button>
            <button class="cursor-pointer w-full flex items-center h-[46px] truncate">
                Report
            </button>
        @endif
    </div>
</div> 