@extends('layouts.app')

@section('content')
<section class="relative flex flex-col pb-20 flex-1 overflow-y-auto w-full px-4 content-match-bg-1 sm:px-10">
    {{-- Mobile Header --}}
    <header class="fixed top-0 right-4 left-4 bg-primary w-full h-14 z-20 pr-[75px] flex items-center sm:hidden">
        <button id="hb-btn" class="h-10 w-10 flex items-center justify-center mr-1">
            <img class="w-full h-full" src="{{ asset('assets/logo/logo.svg') }}" />
        </button>
        <p class="w-full text-center text-white font-medium text-sm">Creator Match</p>
    </header>

    {{-- Getting Started Content --}}
    <div class="mx-auto max-w-[365px] flex flex-col items-center mt-24">
        <div class="flex items-center mb-2 sm:mb-3">
            <div class="rounded-full overflow-hidden border-2 border-secondary -mr-[19px] sm:-mr-10 h-10 w-10 sm:h-[76px] sm:w-[76px]">
                <img class="h-full w-full object-cover" src="{{ asset('assets/images/home/place-holder-7.png') }}" alt="" />
            </div>
            <div class="rounded-full overflow-hidden border-2 border-secondary z-10 h-16 w-16 sm:h-[100px] sm:w-[100px]">
                <img class="h-full w-full object-cover" src="{{ asset('assets/images/home/pp-placeholder.png') }}" alt="" />
            </div>
            <div class="rounded-full overflow-hidden border-2 border-secondary -ml-[19px] sm:-ml-10 h-10 w-10 sm:h-[76px] sm:w-[76px]">
                <img class="h-full w-full object-cover" src="{{ asset('assets/images/home/placeholder-8.png') }}" alt="" />
            </div>
        </div>

        <h1 class="font-medium text-white text-center text-base mb-2 sm:mb-3 sm:text-2xl">
            Match with Contentmatch users
        </h1>
        <h2 class="font-normal text-center text-custom4 leading-[22.4px] text-sm mb-2 sm:text-base sm:mb-3">
            Once you're matched with other users, you can start exploring shared interests and begin collaborating.
        </h2>
        <a href="#" 
           class="px-5 rounded-[32px] bg-custom3 flex items-center justify-center text-secondary font-medium w-max text-sm sm:text-base h-[33px] sm:h-[38px]">
            Get Started
        </a>
    </div>

    {{-- Feature Cards --}}
    <div class="grid grid-cols-1 mt-8 gap-4 sm:gap-5 sm:mt-24 sm:grid-cols-2 size6:grid-cols-3">
        @foreach([
            ['title' => 'Meet people', 'desc' => 'Connect with individuals who share your content goals and interests on ContentMatch.', 'image' => 'meet-people'],
            ['title' => 'Exchange Ideas', 'desc' => 'Allows users to collaborate, brainstorm, and refine their content strategies with others in the community.', 'image' => 'exchange-ideas'],
            ['title' => 'Discover opportunities', 'desc' => 'You can expand your reach, find partnerships, and explore creative ventures tailored to your content vision.', 'image' => 'discover-opportunities']
        ] as $card)
            <div class="border border-custom6 rounded-xl p-3 sm:py-5 sm:px-4 bg-primary">
                <p class="text-white font-bold text-xs mb-1 sm:text-2xl sm:mb-2">{{ $card['title'] }}</p>
                <p class="font-normal text-custom4 text-xs leading-[16.8px] sm:leading-[22.4px] sm:text-base">
                    {{ $card['desc'] }}
                </p>
                <div class="w-full h-[200px] mt-3 rounded-lg overflow-hidden sm:mt-[16px] sm:h-[220px]">
                    <img class="w-full h-full object-cover" 
                         src="{{ asset('assets/images/content-match/' . $card['image'] . '.svg') }}" 
                         alt="{{ $card['title'] }}" />
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
