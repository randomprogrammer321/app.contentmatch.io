<div class="flex-1 pt-3 overflow-y-auto overflow-x-hidden space-y-[13px] w-full">
    <div class="px-4 sm:px-5">
        <h2 class="text-secondary font-medium text-base sm:text-xl mb-4">Message Requests</h2>
        
        @forelse($requests ?? [] as $request)
            @include('components.messaging.request-card', ['type' => 'message'])
        @empty
            <p class="text-custom4 text-center">No message requests</p>
        @endforelse
    </div>
</div>

