@extends('layouts.app')

@section('content')
<section class="flex flex-col flex-1">
    {{-- Header --}}
    @include('components.notifications.header')

    {{-- Tabs --}}
    @include('components.notifications.tabs')

    {{-- Notifications List --}}
    <div id="contentForYou" class="content transition-opacity duration-1000 flex flex-col flex-1 pb-32 overflow-y-auto">
        @forelse($notifications ?? [] as $notification)
            @include('components.notifications.notification-card', ['notification' => $notification])
        @empty
            <p class="text-center text-custom4 mt-4">No notifications</p>
        @endforelse
    </div>
</section>
@endsection
