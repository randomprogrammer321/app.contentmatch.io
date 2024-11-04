<section class="hidden flex-col w-full pt-5 border-r border-custom6 size1:flex size1:w-[386px]">
    {{-- Messages Header --}}
    @include('components.messaging.header')

    {{-- Messages List --}}
    <div class="flex-1 pt-3 overflow-y-auto overflow-x-hidden space-y-[13px] w-full">
        @forelse($conversations ?? [] as $conversation)
            <div class="flex items-center h-[57px] justify-between w-full sm:h-[78px] px-4 sm:px-5 
                       {{ request()->route('id') == $conversation->id ? 'bg-custom9 border-r-[3px] border-custom3' : '' }}">
                <div class="h-full flex items-center mr-[15px] w-full">
                    <div class="h-2 w-2 flex-shrink-0 rounded-full bg-custom3 mr-2 sm:mr-4"></div>
                    <div class="h-10 w-10 flex-shrink-0 rounded-full mr-2">
                        <img src="{{ asset('assets/images/home/placeholder-4.png') }}" alt=""/>
                    </div>
                    <div class="text-sm text-secondary font-medium w-52 whitespace-nowrap overflow-hidden text-ellipsis sm:text-base">
                        <p class="whitespace-nowrap overflow-hidden text-ellipsis">
                            {{ $conversation->recipient_name }}
                        </p>
                        <p class="whitespace-nowrap overflow-hidden text-ellipsis">
                            {{ $conversation->last_message }}
                        </p>
                    </div>
                </div>
                <div class="text-xs font-normal text-custom4">
                    <p class="mb-[3px]">Today</p>
                    <p>09:20am</p>
                </div>
            </div>
        @empty
            @include('components.messaging.empty-state-mobile')
        @endforelse
    </div>
</section>
