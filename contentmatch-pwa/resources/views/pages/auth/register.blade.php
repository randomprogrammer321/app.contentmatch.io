@extends('layouts.guest')

@section('content')
    <!-- Section 1 Start -->
    <section class="hidden size1:flex flex-col flex-1 items-center bg-img px-10">
        @include('pages.auth.partials.sidebar')
    </section>
    <!-- Section One End -->

    <!-- Join Contentmatch -->
    <section class="flex-1 overflow-y-auto px-mpd size1:pr-10">
        <div class="max-w-[650px] size1:max-w-[500px] flex flex-col flex-1 h-full m-auto transition-transform duration-300">
            @include('pages.auth.partials.header')
            <div class="flex-1 flex flex-col justify-start mt-8 sm:mt-24 size1:justify-center size1:-mt-[10px]">
                <h3 class="text-secondary font-medium text-[16px] leading-[22.4px] mb-[28px] sm:mb-[30px] sm:leading-[39.2px] sm:text-[28px]">
                    Join Contentmatch today
                </h3>
                @include('pages.auth.partials.social-buttons')
                @include('pages.auth.partials.email-form')
                @include('pages.auth.partials.terms')
                @include('pages.auth.partials.login-link')
            </div>
        </div>
    </section>
    <!-- Join Contentmatch End -->
@endsection

@push('scripts')
    <script type="module" src="{{ asset('assets/js/signup.js') }}"></script>
@endpush
