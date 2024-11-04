<section class="hidden flex-col w-full pt-5 border-r border-custom6 size1:flex size1:w-[386px]">
    {{-- Messages Header --}}
    @include('components.messaging.header')

    {{-- Message Requests --}}
    <div class="mt-4 flex flex-col gap-y-4">
        <a href="{{ route('messages.requests') }}" class="flex justify-between items-center w-full">
            <div class="flex">
                <div class="h-6 w-6 mr-2">
                    <img class="w-full h-full" src="{{ asset('assets/icon/message-incoming.svg') }}" alt=""/>
                </div>
                <div>
                    <p class="text-sm font-medium text-white leading-[19.6px] mb-[2px] text-start">Message requests</p>
                    <p class="text-xs text-custom1 font-medium text-start">1 Message</p>
                </div>
            </div>
            <div class="h-5 w-5 flex items-center justify-center">
                <img src="{{ asset('assets/icon/right-arrow.svg') }}"/>
            </div>
        </a>
    </div>

    {{-- Messages List --}}
    <div class="flex-1 pt-3 overflow-y-auto overflow-x-hidden space-y-[13px] w-full">
        @forelse($conversations ?? [] as $conversation)
            <a href="{{ route('messages.show', $conversation['id']) }}" 
               class="flex items-center h-[57px] justify-between w-full px-4 sm:px-5 sm:h-[78px] 
                      {{ request()->route('id') == $conversation['id'] ? 'bg-custom9 border-r-[3px] border-custom3' : '' }}">
                <div class="h-full flex items-center mr-[15px] w-full">
                    <div class="h-2 w-2 flex-shrink-0 rounded-full bg-custom3 mr-2 sm:mr-4"></div>
                    <div class="h-10 w-10 flex-shrink-0 rounded-full mr-2">
                        <img src="{{ asset('assets/images/home/' . $conversation['avatar']) }}" alt=""/>
                    </div>
                    <div class="text-sm text-secondary font-medium w-52 whitespace-nowrap overflow-hidden text-ellipsis sm:text-base">
                        <p class="whitespace-nowrap overflow-hidden text-ellipsis">
                            {{ $conversation['recipient_name'] }}
                        </p>
                        <p class="whitespace-nowrap overflow-hidden text-ellipsis">
                            {{ $conversation['last_message'] }}
                        </p>
                    </div>
                </div>
                <div class="text-xs font-normal text-custom4">
                    <p class="mb-[3px]">Today</p>
                    <p>{{ $conversation['time'] }}</p>
                </div>
            </a>
        @empty
            @include('components.messaging.empty-state-mobile')
        @endforelse
    </div>
</section>
