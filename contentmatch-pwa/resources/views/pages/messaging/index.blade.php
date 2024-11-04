@extends('layouts.app')

@section('content')
<main id="content" class="h-screen flex overflow-auto flex-row">
    {{-- Main Sidebar --}}

    {{-- Messages List Section --}}
    @include('pages.messaging.partials.message-list')

    {{-- Empty State Section --}}
    <section class="flex-1 hidden items-center justify-center size1:flex">
        @include('components.messaging.empty-state-desktop')
    </section>
</main>
@endsection
