<a href="{{ route('messages.show', $message->id) }}" class="flex items-center h-[57px] justify-between w-full px-4 sm:px-5 sm:h-[78px]">
    <div class="h-full flex items-center mr-[15px] w-full">
        <div class="h-2 w-2 flex-shrink-0 rounded-full bg-custom3 mr-2 sm:mr-4"></div>
        <div class="h-10 w-10 flex-shrink-0 rounded-full mr-2">
            <img src="{{ asset('assets/images/home/placeholder-4.png') }}" alt="" />
        </div>
        <div class="text-sm text-secondary font-medium w-52 whitespace-nowrap overflow-hidden text-ellipsis sm:text-base">
            <p class="whitespace-nowrap overflow-hidden text-ellipsis">{{ $message->sender_name }}</p>
            <p class="whitespace-nowrap overflow-hidden text-ellipsis">{{ $message->last_message }}</p>
        </div>
    </div>
    <div class="text-xs font-normal text-custom4">
        <p class="mb-[3px]">{{ $message->date }}</p>
        <p>{{ $message->time }}</p>
    </div>
</a>
