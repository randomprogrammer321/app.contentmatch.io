@extends('layouts.app')

@section('content')
<section class="relative flex-1 overflow-hidden w-full">
    {{-- Header --}}
    <header class="absolute left-0 right-0 z-20 flex items-center justify-between bg-primary py-3 border-b border-custom6 sm:border-none pl-4 pr-4 sm:pl-10 md:pr-10 sm:pr-[100px] sm:py-4">
        <div class="flex items-center gap-x-3">
            <a href="{{ route('match.matches') }}" 
               class="font-normal text-custom2 hover:text-secondary h-[17px] text-xs sm:text-sm md:text-base sm:h-[22px]">
                Matches
            </a>
            <a href="{{ route('match.past-engagements') }}" 
               class="truncate font-normal text-custom2 hover:text-secondary h-[17px] text-xs sm:text-sm md:text-base sm:h-[22px]">
                Past Engagements
            </a>
            <a href="{{ route('match.requests') }}" 
               class="mx-3 border-b border-custom2 font-normal text-secondary hover:text-secondary h-[17px] text-xs sm:text-sm md:text-base sm:h-[22px]">
                Requests
            </a>
        </div>
    </header>

    <div class="h-full relative overflow-y-auto mb-24 px-4 pt-20 sm:px-10">
        <div id="rqstSection" class="mb-14 max-w-[684px] mx-auto">
            @forelse($requests as $request)
                <div class="border border-custom6 bg-custom21 w-full rounded-xl p-3 mb-4 sm:bg-primary sm:mb-7 sm:p-5">
                    <p class="font-bold {{ $request->status_color }} text-xs mb-1 sm:text-sm">
                        {{ $request->status_text }}
                    </p>

                    <div class="flex justify-between mb-1 s:mb-2">
                        <div class="flex gap-x-1">
                            <div class="rounded-full overflow-hidden h-8 w-8 sm:w-11 sm:h-11">
                                <img class="w-full h-full object-cover" 
                                     src="{{ $request->avatar }}" 
                                     alt="{{ $request->name }}"/>
                            </div>
                            <div>
                                <div class="flex items-center gap-x-1">
                                    <p class="font-bold text-white text-xs sm:text-base">
                                        {{ $request->name }}
                                    </p>
                                    @if($request->is_verified)
                                        <div class="h-5 w-5">
                                            <img class="h-full w-full" src="{{ asset('assets/icon/verified.svg') }}" alt=""/>
                                        </div>
                                    @endif
                                </div>
                                <p class="font-medium text-custom4 text-xs sm:text-sm">
                                    {{ '@' . $request->username }}
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-x-3">
                            @if($request->status === 'pending')
                                <button class="flex items-center truncate justify-center leading-[10px] px-3 rounded-full border border-error2 h-[33px] text-error2 font-medium text-xs sm:text-base sm:h-[38px]">
                                    Decline
                                </button>
                                <button class="hidden items-center truncate justify-center leading-[10px] px-3 rounded-full bg-custom3 h-[33px] text-secondary font-medium text-xs sm:flex sm:text-base sm:h-[38px]">
                                    Super engagement request
                                </button>
                            @endif
                        </div>
                    </div>
                    <p class="text-secondary font-normal mb-1 text-xs leading-[16.8px] sm:leading-[22.4px] sm:text-base">
                        {{ $request->bio }}
                    </p>
                </div>
            @empty
                <div class="text-center text-custom4 mt-8">
                    <p>No pending requests</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection 