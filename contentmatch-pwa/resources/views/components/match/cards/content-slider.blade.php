<div class="relative w-full overflow-hidden mt-3 sm:mt-4">
    {{-- Navigation Buttons --}}
    <div class="absolute top-[35%] transform translate-y-[35%] left-2 right-2 flex justify-between px-0 sm:px-4 z-10">
        <button class="prevBtn bg-custom10 border border-secondary backdrop-blur-8 rounded-full h-8 w-8 sm:h-11 sm:w-11">
            <img class="w-5 h-5 sm:w-6 sm:h-6 m-auto" 
                 src="{{ asset('assets/icon/back-outlined-left.svg') }}" 
                 alt="Previous"/>
        </button>
        <button class="nextBtn bg-custom10 border border-secondary backdrop-blur-8 rounded-full transform scale-x-[-1] h-8 w-8 sm:h-11 sm:w-11">
            <img class="w-5 h-5 sm:w-6 sm:h-6 m-auto" 
                 src="{{ asset('assets/icon/back-outlined-left.svg') }}" 
                 alt="Next"/>
        </button>
    </div>

    {{-- Progress Indicators --}}
    <div class="h-[3px] flex justify-center gap-x-1 sm:h-1">
        @foreach($contents as $index => $content)
            <span class="indicator h-full w-full bg-custom6 rounded-[32px] cursor-pointer" 
                  data-index="{{ $index }}"></span>
        @endforeach
    </div>

    {{-- Slider Container --}}
    <div id="slider" class="slider rounded-lg relative flex mt-3 transition-transform duration-500 ease-in-out sm:mt-4">
        @foreach($contents as $content)
            <div class="relative min-w-full h-max rounded-lg overflow-hidden">
                <div class="absolute top-2 left-2 flex bg-custom10 items-center h-[22px] px-2 backdrop-blur-8 rounded-[20px] sm:top-4 sm:left-4 sm:px-3 sm:h-9">
                    <div class="w-5 h-[14px] sm:w-7 sm:h-5">
                        <img class="w-full h-full" 
                             src="{{ asset('assets/icon/socials/' . $content->platform . '.svg') }}"/>
                    </div>
                    <p class="text-[10px] text-secondary font-medium pl-1 sm:text-sm">
                        Uploaded from {{ ucfirst($content->platform) }}
                    </p>
                </div>
                <div class="h-[290px] bg-white w-full rounded-lg overflow-hidden sm:h-[579px]">
                    <img src="{{ $content->media_url ?? asset('assets/images/home/video-placeholder.png') }}" 
                         class="h-full w-full object-cover" 
                         alt="{{ $content->title }}"/>
                </div>
            </div>
        @endforeach
    </div>
</div> 