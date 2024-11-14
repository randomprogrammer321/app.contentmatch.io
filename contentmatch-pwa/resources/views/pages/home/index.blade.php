@extends('layouts.app')

@section('content')

@php
    $activeTab = request()->get('tab', 'home');
@endphp
<main id="content" class="h-screen flex overflow-auto flex-row">
    {{-- Main Content Section --}}
    <section class="flex-1 flex flex-col">
        {{-- Header --}}
        <header class="relative w-full h-[52px] px-mpd flex items-center border-b border-custom6 sm:h-[84px] lg:px-10">
            <button id="hb-btn" class="h-10 w-10 flex items-center justify-center mr-1 sm:h-14 sm:w-14 size4:hidden">
                <img class="w-full h-full" src="{{ asset('assets/logo/logo.svg') }}" />
            </button>
            
            {{-- Search Bar --}}
            <div class="w-full flex items-center sm:h-[44px]">
                <div class="w-full">
                    <div id="conta" class="flex flex-1 h-9 items-center px-3 rounded-[32px] overflow-hidden bg-custom8 mx-5 sm:h-11 sm:px-5 sm:mx-0">
                        <div class="flex items-center h-5 flex-1">
                            <input id="search-input" 
                                   class="w-full h-full mt-1 text-xs bg-transparent text-custom2 px-0 border-none placeholder-custom4 focus:outline-none focus:ring-0 sm:h-12 sm:text-sm"
                                   placeholder="Search" />
                            {{-- Search Icons/Buttons --}}
                            <div class="flex items-center">
                                <button id="close-btn" class="flex-shrink-0 rounded-full border border-custom4 hidden items-center justify-center transform scale-0 opacity-0 transition-all duration-300 ease-in-out w-5 h-5 sm:h-6 sm:w-6">
                                    <img class="h-3 w-3 sm:h-4 sm:w-4" src="{{ asset('assets/icon/close-white.svg') }}" alt="Close" />
                                </button>
                                <div class="w-7 h-5 ml-2 border-l border-gray-400 flex justify-end sm:w-8">
                                    <img class="h-full w-5" src="{{ asset('assets/icon/home/ep_search.svg') }}" alt="Search" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Profile Picture (Mobile) --}}
                <div class="h-8 w-8 rounded-full flex-shrink-0 block sm:hidden sm:h-10 sm:w-10">
                    <img class="h-full w-full object-cover" src="{{ asset('assets/images/home/pp-placeholder.png') }}" />
                </div>

                {{-- Creator Match Icon --}}
                <div class="hidden sm:flex h-10 w-10 mx-5 items-center flex-shrink-0 justify-center rounded-full border border-custom1">
                    <img class="h-6 w-6" src="{{ asset('assets/icon/nav/creator-match-active.svg') }}" alt="" />
                </div>

                {{-- Create Post Button --}}
                <button class="hidden sm:flex h-[38px] flex-shrink-0 items-center px-4 bg-secondary rounded-[32px]" id="open-create-post-dialog">
                    <img src="{{ asset('assets/icon/home/add-c.svg') }}" alt="" />
                    <p class="pl-[9px] text-base text-custom9 pt-[2px] font-medium">Create Post</p>
                </button>
            </div>
        </header>

        {{-- Tab Navigation --}}
        <div class="w-full h-[48px] px-mpd flex items-end pb-2 mb-4 border-b border-custom6 sm:px-10">
            <a href="{{ route('feed.home') }}" 
               class="text-secondary {{ $activeTab === 'home' ? 'border-b-2 border-custom2' : '' }} px-2 text-xs h-[25px] sm:text-base">
                For you
            </a>
            @if($activeTab === 'following')
                <button id="followingBtn" class="text-custom2 font-normal px-2 mx-3 text-xs h-[25px] sm:text-base border-b-2 border-custom2 text-secondary">
                    Following
                </button>
            @else
                <a href="{{ route('feed.following') }}" class="text-custom2 font-normal px-2 mx-3 text-xs h-[25px] sm:text-base">
                    Following
                </a>
            @endif
            <a href="{{ route('feed.communities') }}"
               class="text-custom2 {{ $activeTab === 'communities' ? 'border-b-2 border-custom2' : '' }} font-normal px-2 text-xs h-[25px] sm:text-base">
                Communities
            </a>
        </div>
    
        {{-- Main Content Area --}}
        <div class="flex-1 overflow-y-auto px-[25px]">
            @if(!Auth::user()->is_premium)
                <div class="block size5:hidden">
                    <!-- GET PREMIUM CARD START  -->
            <div class="p-3 rounded-xl border border-custom6 mb-3 size5:mb-0 size5:p-0 size5:border-none">
              <p class="font-bold text-base leading-[22.4px] text-white sm:leading-[28px] sm:text-xl">
                Get Premium
              </p>
              <p class="text-custom4 font-normal text-xs mt-2 sm:leading-[16.8px] leading-[19.6px] sm:text-sm">
                Gain access to premium features, more visibiliy &amp; engagementsand
                priority support
              </p>
              <button class="open-sub-dia flex text-xs mt-2 items-center text-custom9 px-3 h-[33px] rounded-[32px] bg-custom11">
                Subscribe
              </button>
            </div>
                    <!-- GET PREMIUM CARD END -->
                </div>
            @endif
            {{-- Posts Section --}}
            @foreach($posts as $post)
                @include('components.feed.post-card', ['post' => $post])
            @endforeach
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script src="{{ asset('js/home/post.js') }}"></script>
<script src="{{ asset('js/home/search.js') }}"></script>
@endpush
