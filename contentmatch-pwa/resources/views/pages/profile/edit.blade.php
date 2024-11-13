@extends('layouts.app')

@section('content')
{{-- Profile Section --}}
<section class="relative flex-1 w-full h-full overflow-hidden flex flex-col">
    {{-- Header --}}
    @include('components.profile.header')

    <div class="flex-1 w-full h-full overflow-y-auto">
        {{-- Profile Details --}}
        @include('components.profile.details')

        {{-- Tabs Navigation --}}
        @include('components.profile.tabs')

        {{-- Content Sections --}}
        <div class="flex-1 w-full">
            {{-- Videos Tab Content --}}
            @include('components.profile.tabs.videos')

            {{-- Groups Tab Content --}}
            @include('components.profile.tabs.groups')
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/home/enagement-dialog.js') }}"></script>
<script src="{{ asset('js/home/community-details.js') }}"></script>
<script src="{{ asset('js/home/feedback-dialog.js') }}"></script>
<script src="{{ asset('js/home/attach-image.js') }}"></script>
<script src="{{ asset('js/home/menu-button.js') }}"></script>
<script src="{{ asset('js/home/post.js') }}"></script>
<script src="{{ asset('js/home/create-post.js') }}"></script>
<script src="{{ asset('js/home/report-video-dialog.js') }}"></script>
<script src="{{ asset('js/home/search.js') }}"></script>
@endpush

