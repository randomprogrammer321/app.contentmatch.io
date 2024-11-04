<div class="flex mb-6">
    <div class="h-8 w-8 rounded-full overflow-hidden flex-shrink-0 mr-3 sm:h-10 sm:w-10">
        <img src="{{ asset($group['avatar'] ?? 'assets/images/home/placeholder-1.png') }}" alt=""/>
    </div>
    <div>
        <div class="flex justify-between mb-1">
            <div class="flex items-center">
                <p class="font-medium text-xs text-secondary mr-2 sm:mr-3 sm:text-base">
                    {{ $group['name'] ?? 'Group Name' }}
                </p>
                <p class="text-[10px] font-normal text-custom1 sm:text-sm">
                    {{ '@' . ($group['username'] ?? 'groupname') }}
                </p>
            </div>
            <p class="text-custom1 text-[10px] font-normal sm:text-sm">
                {{ $group['date'] ?? '29 April' }}
            </p>
        </div>
        
        <p class="text-xs font-normal text-secondary leading-[19.2px] sm:leading-[25.6px] sm:text-base">
            {{ $group['description'] ?? 'Group description here...' }}
        </p>

        {{-- Group Info --}}
        <div class="bg-custom21 rounded-lg w-max mt-1 py-2 px-3 border border-custom6 flex sm:px-4 sm:py-3">
            <div class="h-8 w-8 rounded-full overflow-hidden mr-2 sm:h-10 sm:w-10">
                <img class="h-full w-full object-cover" 
                     src="{{ asset($group['icon'] ?? 'assets/images/home/artist.png') }}" 
                     alt=""/>
            </div>
            <div>
                <p class="font-bold text-secondary text-xs mb-[2px] sm:text-sm">
                    {{ $group['title'] ?? 'Group Title' }}
                </p>
                <p class="font-normal text-xs text-custom2 sm:text-sm">
                    {{ $group['subtitle'] ?? 'Group Subtitle' }}
                </p>
            </div>
        </div>
    </div>
</div>
