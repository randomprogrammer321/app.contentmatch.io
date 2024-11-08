<div id="back-drop-6" class="inset-y-0 fixed hidden z-40 h-screen w-screen bg-custom12 top-0 left-0"></div>
<div id="if-mobile-drawup" class="hidden feed-bk-dialog dialog z-50 m-auto w-full p-0 border-[0.5px] backdrop-blur-40 pt-2 px-4 rounded-tl-3xl rounded-tr-3xl sm:rounded-[24px] h-[470px] lg:h-screen xl:h-auto overflow-y-auto sm:p-8 sm:bg-custom5 sm:border-custom1 sm:max-w-[464px]">
    {{-- Mobile Handle --}}
    <div class="block mx-auto w-[120px] h-1 rounded-xl bg-custom4 mb-3 sm:hidden"></div>

    {{-- Header Icon --}}
    <div class="h-8 w-8 mx-auto mb-2 md:h-10 md:w-10">
        <img class="h-full w-full" src="{{ asset('assets/icon/home/feedback.svg') }}" alt=""/>
    </div>

    {{-- Title --}}
    <p class="font-medium text-secondary text-sm text-center mb-2 md:text-xl">Leave a feedback</p>
    <p class="font-normal leading-[16.8px] text-custom2 text-center max-w-[311px] mx-auto text-xs sm:leading-[22.4px] sm:text-base">
        Please take a moment to leave your feedback on this video
    </p>

    {{-- Rating Stars --}}
    <div class="rating mx-auto mt-2 flex justify-center">
        @for ($i = 1; $i <= 5; $i++)
            <div class="rate cursor-pointer h-10 w-10 sm:h-8 sm:w-8" onclick="fillStars({{ $i }})">
                <img src="{{ asset('assets/icon/star-empty.svg') }}" class="star-img"/>
            </div>
        @endfor
    </div>

    {{-- Feedback Form --}}
    <div class="space-y-6">
        {{-- Likes --}}
        <div class="relative">
            <input required id="cont-like" class="w-full h-[45px] mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b-2 border-custom1 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[30px]"/>
            <label for="cont-like" class="absolute bottom-[13px] left-0 text-custom4 text-xs pointer-events-none transition-all duration-150 sm:text-sm">
                Something you like about the content
            </label>
        </div>

        {{-- Dislikes --}}
        <div class="relative">
            <textarea required id="cont-dnt-like" class="w-full fbbk-textarea h-[45px] mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b-2 border-custom1 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[25px] resize-none overflow-hidden" rows="1"></textarea>
            <label for="cont-dnt-like" class="absolute bottom-[19px] left-0 text-custom4 text-xs pointer-events-none transition-all duration-150 sm:text-sm">
                Something you do not like about the content
            </label>
        </div>
    </div>

    {{-- Image Upload --}}
    <div class="h-5 my-4">
        <button onclick="attachImage('fdbk-image-input', 'edbk-image-cont')" class="flex items-center">
            <div class="flex items-center justify-center h-6 w-6">
                <img class="h-3 w-3" src="{{ asset('assets/icon/home/add-w.svg') }}"/>
            </div>
            <p class="ml-2 text-xs text-secondary font-normal sm:text-sm">Attach Image</p>
        </button>
        <input type="file" id="fdbk-image-input" accept="image/*" class="hidden"/>
    </div>

    {{-- Image Preview Container --}}
    <div id="edbk-image-cont" class="flex flex-wrap"></div>

    {{-- Action Buttons --}}
    <div class="flex gap-4 h-11 mt-4 mb-10 sm:mb-0">
        <button id="close-fdbk" class="outline-none shadow-combined rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm h-full transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg">
            Cancel
        </button>
        <button class="rounded-[40px] text-custom2 border border-custom6 w-full text-xs sm:text-sm h-full transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg">
            Send
        </button>
    </div>
</div>