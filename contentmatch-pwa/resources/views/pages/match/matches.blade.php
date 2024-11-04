@extends('layouts.app')

@section('content')
<section class="relative flex-1 overflow-hidden w-full">
    {{-- Header --}}
    <header class="absolute left-0 right-0 z-20 flex items-center justify-between bg-primary py-3 border-b border-custom6 sm:border-none pl-4 pr-4 sm:pl-10 md:pr-10 sm:pr-[100px] sm:py-4">
        <div class="flex items-center gap-x-3">
            <a href="{{ route('match.matches') }}" 
               class="border-b border-custom2 font-normal text-secondary hover:text-secondary h-[17px] text-xs sm:text-sm md:text-base sm:h-[22px]">
                Matches
            </a>
            <a href="{{ route('match.past-engagements') }}" 
               class="truncate font-normal text-custom2 hover:text-secondary h-[17px] text-xs sm:text-sm md:text-base sm:h-[22px]">
                Past Engagements
            </a>
            <a href="{{ route('match.requests') }}" 
               class="mx-3 font-normal text-custom2 hover:text-secondary h-[17px] text-xs sm:text-sm md:text-base sm:h-[22px]">
                Requests
            </a>
        </div>

        {{-- Profile Likes Preview --}}
        @include('pages.match.partials.profile-likes')
    </header>

    <div class="h-full relative overflow-y-auto mb-24 px-4 pt-20 sm:px-10">
        <div id="matchSection" class="card__swipe-cont transition-opacity duration-1000 h-full max-w-[720px] sm:h-screen">
            @foreach($matches as $match)
                @include('pages.match.partials.user-card', ['user' => $match])
            @endforeach

            <div class="h-9 w-full absolute bottom-40 sm:-bottom-40">
                <p class="mx-auto font-medium text-custom4 text-center text-xs sm:text-base">
                    Swipe card to see more creators
                </p>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script src="{{ asset('assets/js/match/swipe.js') }}"></script>
<script src="{{ asset('assets/js/match/slider.js') }}"></script>
@endpush
@endsection
