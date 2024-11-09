<section id="side-bar" class="fixed inset-y-0 z-30 h-screen top-0 left-0 bg-primary transform -translate-x-[260px] transition-transform duration-500 size4:translate-x-0 size4:static flex justify-end overflow-x-hidden overflow-y-auto border-r border-custom6 w-[260px] size3:w-[360px]">
    <div class="w-full mr-0 mt-0 pl-0 sm:mt-[14px] sm:mr-3 sm:pl-2 sm:w-[230px] size3:mr-10">
        {{-- Desktop Navigation --}}
        <nav class="hidden sm:flex flex-col w-full border-b border-custom6">
            {{-- Logo --}}
            <div class="h-14 w-14 mb-[15px]">
                <img class="w-full h-full" src="{{ asset('assets/logo/logo.svg') }}" onclick="window.location.href = '{{ route('home') }}'"/>
            </div>

            {{-- Navigation Links --}}
            <div class="flex flex-col space-y-5 mb-5">
                {{-- Home --}}
                <a href="{{ route('feed.home') }}" class="flex items-center w0 h-10 rounded-xl pl-4 bg-custom6 mb-5">
                    <div class="h-6 w-6">
                        <img class="h-full w-full" src="{{ asset('assets/icon/nav/home-active.svg') }}"/>
                    </div>
                    <p class="font-medium pl-4 text-base text-custom7 leading-[22.4px]">Home</p>
                </a>

                {{-- Explore --}}
                <a href="{{ route('explore.index') }}" class="flex items-center w0 h-10 rounded-xl pl-4 mb-5">
                    <div class="h-6 w-6">
                        <img class="h-full w-full" src="{{ asset('assets/icon/nav/explore-inactive.svg') }}"/>
                    </div>
                    <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">Explore</p>
                </a>

                {{-- Creator Match --}}
                <a href="{{ route('match.index') }}" class="flex items-center w0 h-10 rounded-xl pl-4 mb-5">
                    <div class="h-6 w-6">
                        <img class="h-full w-full" src="{{ asset('assets/icon/nav/creator-match-inactive.svg') }}"/>
                    </div>
                    <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">Creator Match</p>
                </a>

                {{-- Communities --}}
                    <a href="{{ route('communities.index') }}" class="flex items-center w0 h-10 rounded-xl pl-4 mb-5">
                    <div class="h-6 w-6">
                        <img class="h-full w-full" src="{{ asset('assets/icon/nav/friends-inactive.svg') }}"/>
                    </div>
                    <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">Communities</p>
                </a>

                {{-- Messages --}}
                <a href="{{ route('messages.index') }}" class="flex items-center w0 h-10 rounded-xl pl-4 mb-5">
                    <div class="h-6 w-6">
                        <img class="h-full w-full" src="{{ asset('assets/icon/nav/messages-inactive.svg') }}"/>
                    </div>
                    <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">Messages</p>
                </a>

                {{-- Notifications --}}
                <a href="{{ route('notifications.index') }}" class="flex items-center w0 h-10 rounded-xl pl-4 mb-5">
                    <div class="h-6 w-6">
                        <img class="h-full w-full" src="{{ asset('assets/icon/nav/notification-inactive.svg') }}"/>
                    </div>
                    <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">Notifications</p>
                </a>

                {{-- Profile --}}
                <a href="{{ route('profile.edit') }}" class="flex items-center w0 h-10 rounded-xl pl-4 mb-5">
                    <div class="h-6 w-6">
                        <img class="h-full w-full" src="{{ asset('assets/icon/nav/profile-inactive.svg') }}"/>
                    </div>
                    <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">Profile</p>
                </a>

                {{-- Settings --}}
                <a href="{{ route('settings.profile') }}" class="flex items-center w0 h-10 rounded-xl pl-4 mb-5">
                    <div class="h-6 w-6">
                        <img class="h-full w-full" src="{{ asset('assets/icon/nav/settings-inactive.svg') }}"/>
                    </div>
                    <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">Settings</p>
                </a>

                {{-- Logout --}}
                @if(auth()->check())
                    <a href="{{ route('logout') }}" class="flex items-center w0 h-10 rounded-xl pl-4 mb-5">
                        <div class="h-6 w-6">
                            <img class="h-full w-full" src="{{ asset('assets/icon/nav/log-out.svg') }}"/>
                        </div>
                    </a>
                @endif
            </div>
        </nav>

     

        <nav class="flex flex-col w-full sm:hidden">
            <!-- PROFILE CARD START -->
            <div class="w-full border-b border-custom6 h-[76px] flex items-center pl-5 sm:h-[84px] sm:pl-3 size3:pl-10">
              <div class="flex">
                <div class="h-10 w-10 rounded-full">
                    <img class="h-full w-full object-cover" src="{{ asset('assets/images/home/pp-placeholder.png') }}"/>
                </div>
                <div class="ml-2">
                  <p class="text-sm leading-[19.6px] mb-1 text-white flex items-center">{{ auth()->user()->username ?? 'User Name' }}
                    @if(auth()->user()->is_premium)
                        <img class="ml-1" src="{{ asset('assets/icon/verified.svg') }}" alt="">
                    @endif
                  </p>
                  <p class="text-custom4 text-xs sm:text-sm">
                    @if(auth()->user()->is_premium)
                        Manage Your Premium 
                    @else
                        You are currently a free user
                    @endif
                  </p>
                </div>
              </div>
            </div>
            <!-- PROFILE CARD END -->

            <!-- MOBILE NAV LINK START -->
            <div class="border-b border-custom6 mx-5">
              <a href="#" class="flex items-center w0 h-10 text-base my-5">
                <div class="h-6 w-6">
                  <img class="h-full w-full" src="assets/icon/nav/profile.svg">
                </div>
                <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">
                  Profile
                </p>
              </a>
              <a href="#" class="flex items-center w0 h-10 text-base mb-5">
                <div class="h-6 w-6">
                  <img class="h-full w-full" src="assets/icon/nav/friends-inactive.svg">
                </div>
                <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">
                  Friends
                </p>
              </a>
              <button class="open-sub-dia flex items-center w0 h-10 text-base mb-5">
                <div class="h-6 w-6">
                  <img class="h-full w-full" src="assets/logo/logo.svg">
                </div>
                <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">
                  Get Premium
                </p>
              </button>

              <a href="#" class="flex items-center w0 h-10 text-base mb-5">
                <div class="h-6 w-6">
                  <img class="h-full w-full" src="assets/icon/nav/settings-inactive.svg">
                </div>
                <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">
                  Settings
                </p>
              </a>
              @if(auth()->check())
              <a href="#" class="flex items-center w0 h-10 text-base mb-5">
                <div class="h-6 w-6">
                  <img class="h-full w-full" src="assets/icon/nav/settings-inactive.svg">
                </div>
                <p class="font-normal pl-4 text-base text-custom7 leading-[22.4px]">
                  Settings
                </p>
              </a>
              @endif
            </div>
            <!-- MOBILE NAV LINKS END -->
          </nav>

        {{-- Active Communities Section --}}

        <div class="w-full">
            <div class="border-b border-custom6 mb-5 mx-5 pt-5 pb-2 sm:mb-7 sm:pb-5 sm:ml-0">
                <p class="uppercase text-sm text-custom4 font-normal sm:text-base">active communities</p>
                
                {{-- Create Community Button --}}
                <button class="open-create-com-dia flex items-center h-10 mt-3 mb-1">
                    <div class="flex items-center justify-center h-8 w-8 mr-1 sm:h-10 sm:w-10">
                        <img class="h-5 w-5" src="{{ asset('assets/icon/home/add.svg') }}" alt=""/>
                    </div>
                    <p class="text-sm text-custom2 font-normal sm:text-base">Create a community</p>
                </button>

                {{-- Community List --}}
                <div class="space-y-4">
                    @for($i = 0; $i < 4; $i++)
                        <div class="flex items-center h-[73px]">
                            <div class="rounded-full flex items-center font-bold text-secondary justify-center bg-custom6 mr-2 h-10 w-10 text-xl sm:text-base sm:text-[20px]">
                                N
                            </div>
                            <div>
                                <p class="font-medium text-secondary leading-[16.8px] text-sm sm:leading-[22.4px] sm:text-base">
                                    Community Name
                                </p>
                                <p class="mt-[2px] text-xs font-normal text-custom2 leading-[16.8px] sm:leading-[19.6px] sm:mt-1 sm:text-sm">
                                    24k Members
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        {{-- Sidebar Footer --}}
        <div class="space-y-2 pl-5 sm:pl-0">
            <a class="flex items-center text-custom4 font-normal h-9 text-base" target="_blank" href="https://contentmatch.io/our-app/">How to use ContentMatch</a>
            <a class="flex items-center text-custom4 font-normal text-base h-9" target="_blank" href="https://discord.gg/contentmatch">Join our Discord</a>
            <a class="flex items-center text-custom4 font-normal text-base h-9" target="_blank" href="https://support.contentmatch.io/en/customer/create-ticket/">Contact Support</a>
        </div>
        <div class="h-20"></div>
    </div>
</section>
