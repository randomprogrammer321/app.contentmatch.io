<div id="back-drop-5" class="inset-y-0 hidden z-40 h-screen w-screen bg-transparent sm:bg-custom12 fixed top-0 left-0"></div>
<div id="report-dia" class="dialog z-50 hidden sm:m-auto bg-primary sm:bg-tranparent px-mpd w-full h-full sm:h-max sm:max-w-[585px] sm:backdrop-blur-40 rounded-[24px] pt-7 sm:border-custom1 sm:border-[0.5px] sm:p-8">
    {{-- Header --}}
    <div class="flex items-center justify-between mb-4 sm:mb-6">
        <p class="text-base text-secondary font-medium sm:text-2xl">Report this video</p>
        <button id="close-repo-dia" class="h-6 w-6 flex items-center justify-center">
            <img class="h-[14px] w-[14px]" src="{{ asset('assets/icon/close.svg') }}" alt=""/>
        </button>
    </div>

    {{-- Instructions --}}
    <p class="text-white font-medium text-xs sm:text-base">Select a reason that applies</p>

    {{-- Report Options --}}
    <div class="flex flex-wrap mt-5 gap-x-3 gap-y-4 pb-4 mb-4 border-b border-custom6 sm:mt-6">
        @foreach([
            'Harassment',
            'Fraud or scam',
            'Self-harm',
            'Spam',
            'Violence',
            'Sexual content',
            'Fake account',
            'Graphic content',
            'Illegal activities',
            'Child Abuse'
        ] as $reason)
            <button class="flex items-center px-3 border border-custom1 rounded-[40px] h-[33px] font-normal text-xs text-custom2 sm:text-base sm:px-5 sm:h-[46px]">
                {{ $reason }}
            </button>
        @endforeach
    </div>

    {{-- Custom Reason Section --}}
    <div class="space-y-4">
        <p class="text-sm text-white font-medium sm:text-base">
            If your reason isn't listed, feel free to type it out.
        </p>

        {{-- Custom Reason Input --}}
        <input class="w-full mt-4 h-[45px] text-xs bg-transparent text-custom2 px-0 border-0 border-b-[1px] border-custom1 placeholder-custom2 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-sm focus:border-b-[2px] focus:border-custom3 sm:mt-6"
               placeholder="Reasons"/>

        {{-- Submit Button --}}
        <button class="outline-none shadow-combined h-[41px] mt-6 rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm sm:h-[44px] sm:mt-6 transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg">
            Report
        </button>
    </div>
</div>
