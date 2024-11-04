@if($message['is_sender'])
    {{-- Sender Message --}}
    <div class="flex w-full justify-end mb-4">
        <div class="flex flex-col justify-end items-end gap-y-1 mr-2 sm:mr-3">
            <div class="flex items-center justify-end">
                <button class="h-7 w-4">
                    <img src="{{ asset('assets/icon/menu-v.svg') }}" alt=""/>
                </button>
                <div class="font-normal text-xs text-custom18 p-[10px] rounded-tl-lg rounded-br-lg rounded-bl-lg max-w-[90%] bg-custom3 sm:max-w-[70%] sm:text-base sm:p-5">
                    {{ $message['content'] }}
                </div>
            </div>
            <p class="text-custom19 font-normal text-sm">{{ \Carbon\Carbon::parse($message['created_at'])->format('h:i A') }}</p>
        </div>
        <div class="flex-shrink-0 h-6 w-6 rounded overflow-hidden sm:h-10 sm:w-10">
            <img class="w-full h-full" src="{{ asset('assets/images/home/placeholder-5.png') }}" alt=""/>
        </div>
    </div>
@else
    {{-- Recipient Message --}}
    <div class="flex w-full justify-start mb-4">
        <div class="flex-shrink-0 h-6 w-6 rounded overflow-hidden sm:h-10 sm:w-10">
            <img class="w-full h-full" src="{{ asset('assets/images/home/placeholder-5.png') }}" alt=""/>
        </div>
        <div class="flex flex-col justify-start items-start gap-y-1 ml-[11px] sm:ml-3">
            <div class="flex items-center justify-start">
                <div class="font-normal text-xs text-custom18 p-[10px] rounded-tr-lg rounded-br-lg rounded-bl-lg mr-3 max-w-[90%] bg-custom9 sm:max-w-[70%] sm:text-base sm:p-5">
                    {{ $message['content'] }}
                </div>
                <button class="h-7 w-4">
                    <img src="{{ asset('assets/icon/menu-v.svg') }}" alt=""/>
                </button>
            </div>
            <p class="text-custom19 font-normal text-sm">{{ \Carbon\Carbon::parse($message['created_at'])->format('h:i A') }}</p>
        </div>
    </div>
@endif
