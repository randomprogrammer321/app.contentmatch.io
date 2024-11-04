<section class="hidden size5:block w-[360px] overflow-y-auto border-l border-custom6">
    {{-- Profile Card --}}
    <div class="w-full border-b border-custom6 h-[76px] flex items-center pl-5 sm:h-[84px] sm:pl-3 size3:pl-10">
        <div class="flex">
            <div class="h-10 w-10 rounded-full">
                <img class="h-full w-full object-cover" src="{{ asset('assets/images/home/pp-placeholder.png') }}"/>
            </div>
            <div class="ml-2">
                <p class="text-sm leading-[19.6px] mb-1 text-white">{{ auth()->user()->name ?? 'User Name' }}</p>
                <p class="text-custom4 text-xs sm:text-sm">You are currently a free user</p>
            </div>
        </div>
    </div>

    {{-- Content --}}
    <div class="ml-5 max-w-[250px] pt-3 size3:ml-10">
        {{-- Premium Card --}}
        <div class="p-3 rounded-xl border border-custom6 mb-3 size5:mb-0 size5:p-0 size5:border-none">
            <p class="font-bold text-base leading-[22.4px] text-white sm:leading-[28px] sm:text-xl">Get Premium</p>
            <p class="text-custom4 font-normal text-xs mt-2 leading-[16.8px] sm:leading-[19.6px] sm:text-sm">
                Gain access to premium features, more visibiliy & engagements and priority support
            </p>
            <button class="open-sub-dia flex text-xs mt-2 items-center text-custom9 px-3 h-[33px] rounded-[32px] bg-custom11">
                Subscribe
            </button>
        </div>

        {{-- Ads Space --}}
        <div class="h-[100px] mt-5 w-full bg-custom6 rounded uppercase flex items-center justify-center text-white">
            ADS
        </div>

        {{-- People to Follow --}}
        @include('components.global.right-sidebar.people-to-follow')

        {{-- Communities to Join --}}
        @include('components.global.right-sidebar.communities')
    </div>
</section>
