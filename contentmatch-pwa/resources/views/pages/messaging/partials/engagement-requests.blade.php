<div class="flex-1 pt-3 overflow-y-auto overflow-x-hidden space-y-[13px] w-full">
    <div class="px-4 sm:px-5">
        <h2 class="text-secondary font-medium text-base sm:text-xl mb-4">Engagement Requests</h2>
        
        @forelse($engagements ?? [] as $engagement)
            @include('components.messaging.request-card', ['type' => 'engagement'])
        @empty
            <p class="text-custom4 text-center">No engagement requests</p>
        @endforelse
    </div>
</div>

