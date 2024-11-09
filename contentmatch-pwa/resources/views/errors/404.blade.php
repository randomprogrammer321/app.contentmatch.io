@extends('layouts.app')

@section('title', '404 Page Not Found')

@section('content')

<div class="flex-1 flex items-center justify-center h-full w-full px-4 sm:px-10">
        <div class="max-w-[801px] flex flex-col items-center justify-center m-auto">
          <div class="w-[200px] h-[141.5px] mb-5 sm:w-[375px] sm:h-[284px] sm:mb-10">
            <img class="h-full w-full" src="assets/images/session-timout.svg" alt="">
          </div>
          <p class="font-bold text-secondary text-center mb-3 text-xl sm:mb-6 sm:text-[40px]">
          Page Not Found
          </p>
          <p class="font-normal text-custom36 text-center leading-[16.8px] text-xs sm:text-xl">
          We are trying to solve the problem
          </p>
          <button class="rounded-[32px] bg-secondary font-medium text-custom9 mt-3 h-[33px] px-6 sm:h-[38px] sm:text-base sm:mt-6">
            Try Again
          </button>
        </div>
      </div>

@endsection