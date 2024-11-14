@extends('layouts.app')



@section('content')
<main id="content" class="h-screen flex overflow-auto flex-row">
    {{-- Main Content Section --}}
<section class="flex-1 flex flex-col">
    {{-- Header --}}
    @include('components.explore.header')

    {{-- Tabs --}}
    @include('components.explore.tabs')

    {{-- Categories --}}
    @include('components.explore.categories')

    {{-- Content Sections --}}
    <div class="overflow-y-auto w-full mt-3">
        {{-- For You Tab Content --}}
        <div id="contentForYou" class="content transition-opacity duration-1000 flex flex-col">
            @forelse($forYouContent ?? [] as $content)
                @include('components.explore.content-card', ['content' => $content])
            @empty
                <p class="text-center text-custom4 mt-4">No content found</p>
            @endforelse
        </div>

        {{-- Following Tab Content --}}
        <div id="contentFollowing" class="text-white content hidden opacity-0 transition-opacity duration-1000 flex-col flex-1 pb-32 overflow-y-auto px-[25px]">
            {{-- Following content uses same card component --}}
        </div>

        {{-- Communities Tab Content --}}
        <div id="contentCommunities" class="content hidden opacity-0 transition-opacity duration-1000 flex-col flex-1 pb-32 overflow-y-auto">
            {{-- Communities content uses same card component --}}
        </div>
    </div>
    </section>
</main>
@endsection

