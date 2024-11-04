@extends('layouts.app')

@section('content')
    {{-- Reuse global sidebar --}}

    {{-- Communities Main Section --}}
    <section class="flex-1 overflow-x-hidden">
        {{-- Header --}}
        <header class="h-[68px] flex items-center px-4 sm:px-10">
            <button id="hb-btn" class="h-10 w-10 flex items-center justify-center mr-1 sm:h-14 sm:w-14 size4:hidden">
                <img class="w-full h-full" src="{{ asset('assets/logo/logo.svg') }}" />
            </button>
            <p class="font-bold text-white w-full text-center text-sm pr-4 sm:text-xl size4:pr-0 size4:text-start size4:w-max">
                Communities
            </p>
        </header>

        {{-- Your Communities Section --}}
        @include('components.communities.sections.your-communities')

        {{-- Explore Communities Section --}}
        @include('components.communities.sections.explore')

        {{-- Mobile Navigation --}}
        @include('components.global.mobile-nav')
    </section>

    {{-- Right Sidebar (Desktop) --}}

    {{-- Reuse Global Modals --}}
@endsection

@push('scripts')
<script src="{{ asset('assets/js/communities/index.js') }}"></script>
@endpush
