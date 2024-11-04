<div id="discSection" class="content hidden mb-14 opacity-0 transition-opacity duration-1000 h-full flex-1">
    {{-- Total Discussions Header --}}
    <div class="h-[33px] flex items-center border-b border-custom6 mb-4 px-4 sm:px-8 sm:h-[46px]">
        <p class="text-xs sm:text-base">
            <span class="font-medium text-custom4 mr-1">52</span>
            <span class="font-normal text-custom1">Total Discussions</span>
        </p>
    </div>

    {{-- Groups List --}}
    <div class="px-4 sm:px-8">
        @forelse($groups ?? [] as $group)
            @include('components.profile.group-card')
        @empty
            <p class="text-center text-custom4 py-4">No groups found</p>
        @endforelse
    </div>
</div>
