<a href="{{route('login.social', ['provider' => 'google'])}}" class="flex items-center pl-[20px] mb-[16px] h-[42px] w-full rounded-[40px] pr-[43px] border-[0.5px] border-custom1 transition-transform duration-300 hover:scale-105">
    <div class="h-[18px] w-[18px]">
        <img class="h-full w-full" src="{{ asset('assets/icon/socials/google.svg') }}" />
    </div>
    <p class="text-xs text-secondary font-normal leading-[22.4px] text-center flex-1 sm:text-[16px]">
        Continue with Google
    </p>
</a>

<a href="{{route('login.social', ['provider' => 'discord'])}}" class="flex items-center pl-[20px] mb-[16px] h-[42px] w-full rounded-[40px] pr-[43px] border-[0.5px] border-custom1 transition-transform duration-300 hover:scale-105">
    <div class="h-[18px] w-[18px]">
        <img class="h-full w-full" src="{{ asset('assets/icon/socials/discord.svg') }}" />
    </div>
    <p class="text-xs text-secondary font-normal leading-[22.4px] text-center flex-1 sm:text-[16px]">
        Continue with Discord
    </p>
</a>



<div class="flex items-center mt-[28px] sm:mt-[32px]">
    <hr class="border-t-[0.3px] border-t-[#ADADAD] flex-1 opacity-20" />
    <p class="px-[90px] text-custom2">or</p>
    <hr class="border-t-[0.3px] border-t-[#ADADAD] flex-1 opacity-20" />
</div>
