@extends('layouts.guest')

@section('content')
    <!-- Section 1 Start -->
    <section class="hidden size1:flex flex-col flex-1 items-center bg-img px-10">
        @include('pages.auth.partials.sidebar')
    </section>
    <!-- Section One End -->

    <!-- Login to Contentmatch -->
    <section class="flex-1 overflow-y-auto px-mpd size1:pr-10">
        <div class="max-w-[650px] size1:max-w-[500px] flex flex-col flex-1 h-full m-auto transition-transform duration-300">
            @include('pages.auth.partials.header')
            <div class="flex-1 flex flex-col justify-start mt-8 sm:mt-24 size1:justify-center size1:-mt-[10px]">
                <h3 class="text-secondary font-medium text-[16px] leading-[22.4px] mb-[28px] sm:mb-[30px] sm:leading-[39.2px] sm:text-[28px]">
                    Welcome back to ContentMatch
                </h3>
                @include('pages.auth.partials.social-buttons')
                
                {{-- Login Form --}}
                <form method="POST" action="{{ route('login') }}" class="mt-6">
                    @csrf
                    <div class="relative mb-4">
                        <input required id="email" name="email" type="email" value="{{ old('email') }}"
                            class="w-full h-[45px] text-xs bg-transparent text-custom2 px-0 border-0 border-b border-custom2 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3"
                        />
                        <label for="email" class="absolute bottom-[13px] left-0 font-normal text-custom2 text-xs pointer-events-none transition-all duration-150 sm:text-sm">
                            Email address
                        </label>
                        @error('email')
                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror
                    </div>


                    <button type="submit" class="w-full bg-custom3 text-white rounded-[40px] h-11 mt-6 text-sm font-medium sm:text-base">
                        Sign In
                    </button>
                </form>

                @include('pages.auth.partials.terms')
                
                {{-- Register Link --}}
                <div class="text-center mt-6">
                    <p class="text-custom2 text-sm">
                        Don't have an account? 
                        <a href="{{ route('register') }}" class="text-custom3 hover:text-custom3-dark font-medium">
                            Sign up
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script type="module" src="{{ asset('assets/js/login.js') }}"></script>
@endpush
