<div class="absolute bottom-0 z-10 left-0 right-0 border-t border-custom6 h-[72px] sm:h-[114px] bg-black flex items-center w-full">
    <form action="{{ route('messages.store') }}" method="POST" class="flex justify-between w-full items px-4 h-10 sm:h-11 sm:px-10">
        @csrf
        <div class="relative h-full w-full mr-4">
            <input name="message" 
                   class="rounded-[40px] pl-5 text-xs bg-custom9 text-custom2 px-0 border-none placeholder-custom2 focus:outline-none focus:ring-0 w-full h-full sm:text-base focus:border focus:border-custom3"
                   placeholder="Hello, I am new here."/>
            <img class="absolute h-5 w-5 bottom-3 right-5" src="{{ asset('assets/icon/emoji/smiley.svg') }}"/>
        </div>
        <button type="submit" class="flex flex-shrink-0 items-center justify-center bg-custom3 rounded-full h-full w-11">
            <img class="h-6 w-6" src="{{ asset('assets/icon/round-send.svg') }}" alt=""/>
        </button>
    </form>
</div>
