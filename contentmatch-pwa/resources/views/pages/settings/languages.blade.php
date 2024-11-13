@extends('layouts.settings')

@section('settings-content')
<section class="flex-1 flex-col overflow-y-auto pt-0 sm:pt-5">
    <div class="pl-4 pr-4 sm:pl-10 sm:pr-10 size1:pr-24">
        <!-- LANGUAGES HEADER -->
    <div class="h-[46px] flex items-center border-b border-custom6 mb-5 -mx-4 px-4 sm:px-0 sm:mx-0 sm:mb-9 sm:border-none sm:h-max">
    <button id="hb-btn"  class="h-[18px] w-[9px] mr-2 mb-[1px] block sm:hidden">
        <img class="w-full h-full" src="{{ asset('assets/icon/back-outlined-left.svg') }}" alt=""/>
    </button>
        <p class="text-white font-medium text-base sm:text-xl">Languages</p>
    </div>

    <!-- SELECT LANGUAGE -->
    <div class="mb-4">
        <p class="text-custom4 font-bold text-xs sm:text-base">Select an option</p>
        <div class="flex flex-col mt-3 px-5 border border-custom6 rounded-xl py-5">
            <!-- English -->
            <label class="flex justify-between cursor-pointer items-center border-b border-custom6 pb-4">
                <div class="flex items-center gap-3">
              
                    <p class="text-secondary font-medium text-xs sm:text-base">English</p>
                </div>
                <div class="flex">
                    <input type="radio" name="language" value="en" class=" peer" checked>
                    <div class="h-8 w-8 mt-3 rounded-full bg-[url('{{ asset('assets/icon/radio-inactive.svg') }}')] bg-top bg-no-repeat peer-checked:bg-[url('{{ asset('assets/icon/radio-active.svg') }}')] peer-checked:border-transparent"></div>
                </div>
            </label>

            <!-- French -->
            <label class="flex justify-between cursor-pointer items-center border-b border-custom6 py-4">
                <div class="flex items-center gap-3">
               
                    <p class="text-secondary font-medium text-xs sm:text-base">French</p>
                </div>
                <div class="flex">
                    <input type="radio" name="language" value="fr" class=" peer">
                    <div class="h-8 w-8 mt-3 rounded-full bg-[url('{{ asset('assets/icon/radio-inactive.svg') }}')] bg-top bg-no-repeat peer-checked:bg-[url('{{ asset('assets/icon/radio-active.svg') }}')] peer-checked:border-transparent"></div>
                </div>
            </label>

            <!-- Spanish -->
            <label class="flex justify-between cursor-pointer items-center pt-4">
                <div class="flex items-center gap-3">
                 
                    <p class="text-secondary font-medium text-xs sm:text-base">Spanish</p>
                </div>
                <div class="flex">
                    <input type="radio" name="language" value="es" class=" peer">
                    <div class="h-8 w-8 mt-3 rounded-full bg-[url('{{ asset('assets/icon/radio-inactive.svg') }}')] bg-top bg-no-repeat peer-checked:bg-[url('{{ asset('assets/icon/radio-active.svg') }}')] peer-checked:border-transparent"></div>
                </div>
            </label>
        </div>

        <!-- Save Button -->
        <form action="" method="POST">
            @csrf
            <div class="flex justify-end mt-6">
                <button type="submit" class="h-[38px] bg-custom3 px-10 flex items-center justify-center text-white rounded-[32px] w-full sm:w-max">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>
</section>
@endsection
