@extends('layouts.guest')

@section('body-class', 'sm:bg-img-otp')

@section('content')
<section class="flex-1 overflow-y-auto px-mpd size1:pr-10">
    <main id="content" class="flex flex-col overflow-y-auto h-screen pt-[35px] px-mpd sm:px-16 sm:pt-[27px]">
        <!-- Header -->
       @include('pages.auth.partials.header')

        <!-- OTP Form -->
        <form method="POST" action="{{ route('otp.verify') }}" class="flex justify-center items-start flex-1 sm:py-10 sm:items-center animate-fade-in">
            @csrf
            <div class="max-w-[580px] w-full p-0 sm:border-[0.5px] sm:backdrop-blur-40 rounded-[24px] sm:p-[40px] sm:bg-custom5 sm:border-custom1">
                <button type="button" onclick="window.history.back()" class="flex items-center transition-transform duration-200 hover:scale-105">
                    <div class="h-[20px] w-[20px] sm:h-[24px] sm:w-[24px]">
                        <img class="h-full w-full" src="{{ asset('assets/icon/ep_back.svg') }}" alt="Back" />
                    </div>
                    <p class="font-normal ml-[10px] text-secondary text-xs sm:text-base">Back</p>
                </button>

                <h1 class="text-base text-secondary font-medium mt-[24px] sm:mt-[40px] md:text-[28px]">
                    We sent an OTP
                </h1>
                <p class="text-secondary font-normal text-xs mt-[4px] sm:mt-[7px] sm:text-base">
                    Please enter the OTP that was sent to {{ $email ?? 'xyz@gmail.com' }}
                </p>

                <div class="mt-[24px] sm:mt-[40px]">
                    <input
                        type="text"
                        name="otp"
                        class="w-full h-[45px] text-center text-xs bg-transparent text-custom2 px-4 border-[1px] border-custom1 rounded-lg focus:outline-none focus:border-custom3 focus:ring-0 sm:h-[74px] sm:text-[24px]"
                        maxlength="6"
                        pattern="\d{6}"
                        inputmode="numeric"
                        placeholder="Enter 6-digit OTP"
                        required
                    >
                </div>

                @error('otp')
                    <span class="text-red-500 text-xs mt-2 block">{{ $message }}</span>
                @enderror

                <div class="flex my-[25px] text-xs sm:text-base sm:my-[40px]">
                    <p class="text-custom2 font-normal">Didn't get OTP?</p>
                    <form method="POST" action="{{ route('otp.resend') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-white ml-2 hover:underline transition duration-200">
                            Resend
                        </button>
                    </form>
                </div>

                <a href="{{ route('register') }}" class="underline text-xs text-custom2 sm:text-base">
                    Use another email
                </a>

                <button type="submit" class="outline-none shadow-combined h-[41px] mt-[24px] rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm sm:h-[44px] sm:mt-[40px] transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg">
                    Continue
                </button>
            </div>
        </form>
    </main>
</section>
@endsection
