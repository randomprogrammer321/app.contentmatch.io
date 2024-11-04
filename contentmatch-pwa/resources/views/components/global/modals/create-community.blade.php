<div id="create-com-back-drop" class="inset-y-0 hidden z-40 h-screen w-screen bg-transparent sm:bg-custom12 fixed top-0 left-0"></div>
<div id="create-com-dia" class="dialog z-50 hidden transition-all duration-1000 ease-in-out sm:m-auto bg-primary px-mpd w-full h-full sm:shadow-custom1 sm:h-max sm:max-w-[764px] rounded-[24px] pt-7 sm:backdrop-blur-40 sm:bg-custom15 sm:border-custom1 sm:border-[0.5px] sm:p-8">
    <div class="animatedDialog">
        {{-- Header --}}
        <div class="flex items-center justify-between mb-6 sm:mb-4">
            <p class="text-xl text-secondary font-medium sm:text-2xl">Create a community</p>
            <button id="close-create-com-dia" class="h-6 w-6 flex items-center justify-center">
                <img class="h-[14px] w-[14px]" src="{{ asset('assets/icon/close.svg') }}" alt=""/>
            </button>
        </div>

        {{-- Progress Indicator --}}
        <div>
            <p class="text-secondary font-normal text-xs mb-2 sm:mb-1 sm:text-sm" id="progress-text">Step 1 of 5</p>
            <progress style="transition: width 5s ease" id="progress-bar" class="w-full h-[3px] rounded-[40px] bg-custom6" max="100" value="20"></progress>
        </div>

        {{-- Step 1: Basic Info --}}
        <div id="step-1" class="animate-fade-in">
            <div class="relative">
                <input required id="comm-name" class="w-full h-[45px] mt-0 text-xs bg-transparent text-custom2 px-0 border-0 border-b border-custom2 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[25px]"/>
                <label for="comm-name" class="absolute bottom-[13px] left-0 font-normal text-custom2 text-xs pointer-events-none transition-all duration-150 sm:text-sm">
                    Community name
                </label>
            </div>
            <div class="relative">
                <input required id="desc" class="w-full h-[45px] mt-4 text-xs bg-transparent text-custom2 px-0 border-0 border-b border-custom2 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[25px]"/>
                <label for="desc" class="absolute bottom-[13px] left-0 font-normal text-custom2 text-xs pointer-events-none transition-all duration-150 sm:text-sm">
                    Description
                </label>
            </div>

            {{-- Viewing Options --}}
            <div class="border-t border-custom6 mt-4 pt-4 sm:mt-10 sm:pt-10">
                <p class="text-secondary font-medium text-base sm:text-xl">Set viewing options</p>
                
                {{-- Public Option --}}
                <label class="flex justify-between cursor-pointer mt-3 mb-3 sm:mt-4">
                    <input type="radio" checked name="option" class="hidden peer"/>
                    <div>
                        <p class="text-secondary font-medium mb-[2px] text-base">Public</p>
                        <p class="text-xs font-normal text-custom4 truncate">Anyone can view and contribute</p>
                    </div>
                    <div class="h-7 w-7 mt-[1.5px] rounded-full bg-[url('{{ asset('assets/icon/radio-inactive.svg') }}')] bg-top bg-no-repeat peer-checked:bg-[url('{{ asset('assets/icon/radio-active.svg') }}')] peer-checked:border-transparent"></div>
                </label>

                {{-- Restricted Option --}}
                <label class="flex justify-between cursor-pointer mt-3 mb-3 sm:mt-4">
                    <input type="radio" name="option" class="hidden peer"/>
                    <div>
                        <p class="text-secondary font-medium mb-[2px] text-base">Restricted</p>
                        <p class="text-xs font-normal text-custom4 truncate">Anyone can view, but only approved users can contribute</p>
                    </div>
                    <div class="h-7 w-7 mt-[1.5px] rounded-full bg-[url('{{ asset('assets/icon/radio-inactive.svg') }}')] bg-top bg-no-repeat peer-checked:bg-[url('{{ asset('assets/icon/radio-active.svg') }}')] peer-checked:border-transparent"></div>
                </label>
            </div>
        </div>

        {{-- Navigation Buttons --}}
        <div class="flex gap-x-4 mt-6 h-[41px] sm:h-11 sm:mt-10">
            <button id="cc-bk-btn" class="h-full w-full text-secondary border border-custom6 rounded-[40px] font-medium text-xs sm:text-sm hidden">
                Back
            </button>
            <button id="cc-nxt-btn" class="h-full w-full text-secondary bg-custom3 rounded-[40px] font-medium text-xs sm:text-sm">
                Next
            </button>
        </div>
    </div>
</div>
