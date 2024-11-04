<section class="hidden flex-col w-full pt-5 overflow-y-auto border-r border-custom6 size1:flex size1:w-[321px]">
    <p class="text-white font-medium text-xl ml-5">Settings</p>
    <nav class="w-full flex flex-col gap-y-2 mt-[37px]">
        <a href="{{ route('settings.profile') }}" 
           class="h-[54px] w-full flex items-center flex-shrink-0 font-medium text-base {{ request()->routeIs('settings.profile') ? 'text-white bg-custom22 border-r-[3px] border-custom3' : 'text-custom2' }} pl-10">
            Edit Profile
        </a>

        <a href="{{ route('settings.notifications') }}" 
           class="h-[54px] w-full flex items-center flex-shrink-0 font-normal text-base {{ request()->routeIs('settings.notifications') ? 'text-white bg-custom22 border-r-[3px] border-custom3' : 'text-custom2' }} pl-10">
            Notifications
        </a>

        <a href="{{ route('settings.language') }}" 
           class="h-[54px] w-full flex items-center flex-shrink-0 font-normal text-base {{ request()->routeIs('settings.language') ? 'text-white bg-custom22 border-r-[3px] border-custom3' : 'text-custom2' }} pl-10">
            Languages
        </a>

        <a href="{{ route('settings.billing-portal') }}" target="_blank"
           class="h-[54px] w-full flex items-center flex-shrink-0 font-normal text-base {{ request()->routeIs('settings.billing') ? 'text-white bg-custom22 border-r-[3px] border-custom3' : 'text-custom2' }} pl-10">
            Billing Portal
        </a>

        <a href="{{ route('privacy') }}" target="_blank"
           class="h-[54px] w-full flex items-center flex-shrink-0 font-normal text-base {{ request()->routeIs('settings.privacy') ? 'text-white bg-custom22 border-r-[3px] border-custom3' : 'text-custom2' }} pl-10">
            Account Privacy
        </a>

        <a href="{{ route('settings.blocked') }}" 
           class="h-[54px] w-full flex items-center flex-shrink-0 font-normal text-base {{ request()->routeIs('settings.blocked') ? 'text-white bg-custom22 border-r-[3px] border-custom3' : 'text-custom2' }} pl-10">
            Blocked users
        </a>

        <a href="https://support.contentmatch.io" target="_blank"
           class="h-[54px] w-full flex items-center flex-shrink-0 justify-between font-normal text-base text-custom2 px-10">
            <p>Customer's Support</p>
            <div class="h-5 w-5">
                <img class="w-full h-full" src="{{ asset('assets/icon/arrow-outward.svg') }}" alt="">
            </div>
        </a>

        <a href="{{ route('settings.deactivate') }}" 
           class="h-[54px] w-full flex items-center flex-shrink-0 font-normal text-base {{ request()->routeIs('settings.deactivate') ? 'text-white bg-custom22 border-r-[3px] border-custom3' : 'text-custom2' }} pl-10">
            Delete Account
        </a>
    </nav>
</section>
