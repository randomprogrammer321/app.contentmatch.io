<div class="my-5">
    <p class="text-custom4 text-sm uppercase font-normal">communities to join</p>
    
    @php
        $communities = [
            [
                'name' => 'Newbie Artists',
                'members' => '24k Members',
                'letter' => 'N'
            ],
            [
                'name' => 'Art Club',
                'members' => '24k Members',
                'letter' => 'A'
            ],
            [
                'name' => 'Art Hub',
                'members' => '24k Members',
                'letter' => 'A'
            ],    [
                'name' => 'Art Hub',
                'members' => '24k Members',
                'letter' => 'A'
            ],
            [
                'name' => 'Digital Arts',
                'members' => '24k Members',
                'letter' => 'D'
            ]
        ];
    @endphp

    @foreach($communities as $community)
        <div class="flex justify-between items-center h-[66px]">
            <div class="flex items-center">
                <div class="h-10 w-10 rounded-full bg-custom6 text-xl flex items-center justify-center text-secondary font-bold">
                    
                {{ $community['letter'] }}
                </div>
                <div class="ml-2">
                    <p class="text-sm font-medium text-secondary leading-[19.6px]">
                        {{ $community['name'] }}
                    </p>
                    <p class="text-custom2 font-normal text-xs leading-[19.6px]">
                        {{ $community['members'] }}
                    </p>
                </div>
            </div>
            <a href="#" class="h-9 px-4 rounded-[32px] border border-custom6 text-sm flex items-center font-bold text-secondary">
                Join
             </a>
        </div>
    @endforeach
</div>
