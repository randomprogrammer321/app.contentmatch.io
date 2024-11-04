@extends('layouts.app')

@section('content')
<main id="content" class="h-screen flex overflow-auto flex-row">
    {{-- Main Sidebar --}}

    {{-- Messages List --}}
    @include('pages.messaging.partials.message-list')

    {{-- Conversation Section --}}
    <section class="flex-1 relative overflow-hidden flex flex-col items-center justify-center">
        {{-- Conversation Header --}}
        @include('components.messaging.conversation-header')

        {{-- Messages Container --}}
        <div id="chat-container" class="flex-1 overflow-y-auto w-full flex flex-col items-end py-32 px-4 sm:px-10">
            <p class="text-center text-custom4 text-[10px] mx-auto mb-4 sm:mb-8 sm:text-sm">
                Today, {{ now()->format('F d') }}
            </p>

            @foreach($messages ?? [] as $message)
                @include('components.messaging.message-bubble')
            @endforeach
        </div>

        {{-- Message Input --}}
        @include('components.messaging.message-input')
    </section>
</main>
@endsection
