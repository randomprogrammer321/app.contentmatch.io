@extends('layouts.guest')

@section('styles')
    <link href="{{ asset('assets/styles/output.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <section class="flex-1 overflow-y-auto px-mpd size1:pr-10 bg-primary font-geist sm:bg-img-otp">
      
        @include('pages.onboarding.partials.header')
        @include('pages.onboarding.partials.forms.step3-form')
        <p class="text-center text-custom2">
            @error('message')
                {{ $message }}
            @enderror
        </p>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/script.js') }}"></script>
@endsection
