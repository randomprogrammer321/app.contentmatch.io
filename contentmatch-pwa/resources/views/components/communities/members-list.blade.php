<div class="my-5">
    <p class="text-custom4 text-sm font-normal">{{ number_format($community->members_count) }} Members</p>
    @foreach($community->members as $member)
        <div class="flex justify-between items-center h-[66px]">
            <div class="flex items-center">
                <div class="h-10 w-10 relative">
                    <div class="h-full w-full rounded-full overflow-hidden">
                        <img class="h-full w-full object-cover" 
                             src="{{ $member->avatar ?? asset('assets/images/home/placeholder-1.png') }}" 
                             alt="{{ $member->name }}"/>
                    </div>
                    @if($member->is_online)
                        <div class="h-2 w-2 rounded-full bg-custom17 absolute bottom-[1px] right-[1px]"></div>
                    @endif
                </div>
                <div class="ml-2">
                    <p class="text-sm font-medium text-secondary leading-[19.6px]">
                        {{ $member->name }}
                    </p>
                    <p class="text-custom4 font-normal text-sm leading-[19.6px]">
                        {{ '@' . $member->username }}
                    </p>
                </div>
            </div>
            <button class="h-9 px-2 text-sm flex items-center font-{{ $member->is_admin ? 'bold text-custom3' : 'normal text-custom4' }}">
                {{ $member->is_admin ? 'Admin' : 'Member' }}
            </button>
        </div>
    @endforeach
</div> 