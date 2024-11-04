<section class="hidden relative size5:block w-[360px] overflow-y-auto border-l border-custom6">
    <div class="overflow-y-auto h-full">
        {{-- Profile Card --}}
        @include('components.global.profile-card')

        <div class="ml-5 max-w-[250px] pt-3 mb-32 size3:ml-10">
            {{-- Community Info --}}
            <div>
                <p class="font-bold text-base leading-[22.4px] text-white sm:leading-[28px] sm:text-xl">
                    Channel Description
                </p>
                <p class="text-custom4 font-normal text-xs mt-2 leading-[16.8px] sm:leading-[19.6px] sm:text-sm">
                    {{ $community->description }}
                </p>
            </div>

            {{-- Community Rules --}}
            @include('components.communities.rules-list')

            {{-- Members List --}}
            @include('components.communities.members-list')
        </div>

        {{-- Report Button --}}
        <div class="w-full bg-primary absolute z-10 bottom-0 right-0 left-0 border-t border-custom6 h-[72px] flex items-center pl-10">
            <p class="text-white font-normal text-sm">Report this Community</p>
            <div class="h-6 w-6 rounded-full ml-6">
                <img class="h-full w-full object-cover" src="{{ asset('assets/icon/flag.svg') }}"/>
            </div>
        </div>
    </div>
</section> 