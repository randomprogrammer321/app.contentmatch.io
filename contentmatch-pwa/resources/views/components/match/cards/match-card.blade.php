<div class="card__swipe cursor-grab rounded-[32px] border bg-custom21 border-custom6 mx-auto p-3 sm:p-10">
    {{-- Creator Info --}}
    <div class="flex justify-between mb-1">
        <div class="flex items-center gap-x-1">
            <div class="rounded-full overflow-hidden h-8 w-8 sm:h-10 sm:w-10">
                <img class="w-full h-full object-cover" 
                     src="{{ $match->avatar ?? asset('assets/images/home/pp-placeholder.png') }}" 
                     alt="{{ $match->name }}"/>
            </div>
            <p class="font-medium text-secondary text-xs sm:text-base">
                {{ $match->name }}
            </p>
        </div>

        @include('components.global.menu-button', [
            'menu_items' => [
                ['text' => 'Report post', 'action' => 'reportPost(' . $match->id . ')']
            ]
        ])
    </div>

    {{-- Description --}}
    <p class="font-normal text-secondary leading-[16.8px] text-xs text-ellipsis overflow-hidden line-clamp-3 sm:line-clamp-2 sm:leading-[22.4px] sm:text-base">
        {{ $match->description }}
    </p>

    {{-- Content Slider --}}
    @include('components.match.cards.content-slider', ['contents' => $match->contents])

    {{-- Action Buttons --}}
    @include('components.match.cards.action-buttons')
</div> 