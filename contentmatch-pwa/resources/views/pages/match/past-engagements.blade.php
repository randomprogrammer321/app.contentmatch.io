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
               class="truncate border-b border-custom2 font-normal text-secondary hover:text-secondary h-[17px] text-xs sm:text-sm md:text-base sm:h-[22px]">
                Past Engagements
            </a>
            <a href="{{ route('match.requests') }}" 
               class="mx-3 font-normal text-custom2 hover:text-secondary h-[17px] text-xs sm:text-sm md:text-base sm:h-[22px]">
                Requests
            </a>
        </div>
    </header>

    <div class="h-full relative overflow-y-auto mb-24 px-4 pt-20 sm:px-10">
        <div id="pstEngaSection" class="mb-14 max-w-[684px] mx-auto">
            @forelse($engagements as $engagement)
                <div class="border border-custom6 bg-custom21 w-full rounded-xl p-3 mb-4 sm:mb-7 sm:p-5">
                    <div class="flex justify-between mb-1 s:mb-2">
                        <div class="flex gap-x-1">
                            <div class="rounded-full overflow-hidden h-8 w-8 sm:w-11 sm:h-11">
                                <img class="w-full h-full object-cover" 
                                     src="{{ $engagement->user->avatar ?? asset('assets/images/home/pp-placeholder.png') }}" 
                                     alt="{{ $engagement->user->name }}"/>
                            </div>
                            <div>
                                <div class="flex items-center gap-x-1">
                                    <p class="font-bold text-white text-xs sm:text-base">
                                        {{ $engagement->user->name }}
                                    </p>
                                    @if($engagement->user->is_verified)
                                        <div class="h-5 w-5">
                                            <img class="h-full w-full" src="{{ asset('assets/icon/verified.svg') }}" alt=""/>
                                        </div>
                                    @endif
                                </div>
                                <p class="font-medium text-custom4 text-xs sm:text-sm">
                                    {{ '@' . $engagement->user->username }}
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-x-3">
                            <button class="flex items-center justify-center rounded-full border border-custom6 h-9 w-9 sm:h-10 sm:w-10">
                                <img class="w-5 h-5 sm:h-6 sm:w-6" src="{{ asset('assets/icon/nav/messages-inactive.svg') }}"/>
                            </button>
                            <button class="flex items-center justify-center leading-[10px] px-3 rounded-full border border-custom6 h-[33px] text-secondary font-medium text-xs sm:text-base sm:h-[38px]">
                                Following
                            </button>
                        </div>
                    </div>
                    <p class="text-secondary font-normal mb-1 text-xs leading-[16.8px] sm:leading-[22.4px] sm:text-base">
                        {{ $engagement->user->bio }}
                    </p>
                    <p class="font-bold text-custom4 text-xs sm:text-sm">
                        You engaged with this creator on {{ $engagement->created_at->format('M d, Y') }}
                    </p>
                </div>
            @empty
                <div class="text-center text-custom4 mt-8">
                    <p>No past engagements yet</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
@endsection 