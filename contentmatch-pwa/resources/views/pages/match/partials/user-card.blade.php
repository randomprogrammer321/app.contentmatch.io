<div class="card__swipe cursor-grab rounded-[32px] border bg-custom21 border-custom6 mx-auto p-3 sm:p-10">
    <div class="flex justify-between mb-1">
        <div class="flex items-center gap-x-1">
            <div class="rounded-full overflow-hidden h-8 w-8 sm:h-10 sm:w-10">
                <img class="w-full h-full object-cover" src="{{ $user->avatar ?? asset('assets/images/home/pp-placeholder.png') }}" alt="{{ $user->name }}"/>
            </div>
            <p class="font-medium text-secondary text-xs sm:text-base">{{ $user->name }}</p>
        </div>

        @include('components.global.menu-button', [
            'menu_items' => [
                ['text' => 'Report post', 'class' => 'repo-vid']
            ]
        ])
    </div>

    <p class="font-normal text-secondary leading-[16.8px] text-xs text-ellipsis overflow-hidden line-clamp-3 sm:line-clamp-2 sm:leading-[22.4px] sm:text-base">
        {{ $user->bio }}
    </p>

    {{-- Content Slider --}}
    @include('pages.match.partials.content-slider', ['contents' => $user->contents])

    {{-- Action Buttons --}}
    <div class="flex items-center h-9 gap-x-3 mt-4 justify-center px-[25px] sm:px-0 sm:justify-between">
        @foreach(['dislike', 'like', 'follow', 'super-engage', 'collaborate-req'] as $action)
            <button class="flex items-center justify-center flex-1 border border-custom6 rounded-[32px] h-full px-3 gap-x-2 {{ $action === 'super-engage' ? 'sup-eng-btn' : '' }} {{ $action === 'collaborate-req' ? 'send-fdbk-btn' : '' }}">
                <div class="h-5 w-5">
                    <img class="h-full w-full" src="{{ asset('assets/icon/' . $action . '.svg') }}" alt=""/>
                </div>
                <p class="hidden size1:block font-medium text-secondary text-xs leading-[15px] truncate">
                    {{ ucwords(str_replace('-', ' ', $action)) }}
                </p>
            </button>
        @endforeach
    </div>
</div> 