<div class="my-5">
    <p class="text-custom4 uppercase text-sm font-normal">people to follow</p>
    
    @php
        $people = [
            [
                'name' => 'Maren Mango',
                'username' => '@chi1234',
                'avatar' => 'placeholder-1.png'
            ],
            [
                'name' => 'Alena Dokidis',
                'username' => '@chi1234',
                'avatar' => 'placeholder-1.png'
            ],
            [
                'name' => 'Corey Saris',
                'username' => '@chi1234',
                'avatar' => 'placeholder-1.png'
            ],
            [
                'name' => 'Dulce Lubin',
                'username' => '@chi1234',
                'avatar' => 'placeholder-1.png'
            ],
            [
                'name' => 'Dulce Lubin',
                'username' => '@chi1234',
                'avatar' => 'placeholder-1.png'
            ],
            [
                'name' => 'Corey Carder',
                'username' => '@chi1234',
                'avatar' => 'placeholder-1.png'
            ]
        ];
    @endphp

    @foreach($people as $person)
        <div class="flex justify-between items-center h-[66px]">
            <div class="flex items-center">
                <div class="h-10 w-10 rounded-full overflow-hidden">
                    <img class="h-full w-full object-cover" 
                         src="{{ asset('assets/images/home/' . $person['avatar']) }}" 
                         alt="{{ $person['name'] }}"/>
                </div>
                <div class="ml-2">
                    <p class="text-sm font-medium text-secondary leading-[19.6px]">
                        {{ $person['name'] }}
                    </p>
                    <p class="text-custom4 font-normal text-sm leading-[19.6px]">
                        {{ $person['username'] }}
                    </p>
                </div>
            </div>
            <a href="{{ route('profile.show', ['username' => $person['username']]) }}" class="h-9 px-4 rounded-[32px] border border-custom6 text-sm flex items-center font-bold text-secondary">
                Follow
    </a>
        </div>
    @endforeach
</div>
