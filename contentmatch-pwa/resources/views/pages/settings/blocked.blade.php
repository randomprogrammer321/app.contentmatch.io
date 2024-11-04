@extends('layouts.settings')
@section('settings-content')
<section class="flex-1 flex-col overflow-y-auto pt-0 sm:pt-5">
<div class="pl-4 pr-4 sm:pl-10 sm:pr-10 size1:pr-24">
    <!-- BLOCKED USERS HEADER -->
    <div class="h-[46px] flex items-center border-b border-custom6 mb-5 -mx-4 px-4 sm:px-0 sm:mx-0 sm:mb-9 sm:border-none sm:h-max">
        <a href="{{ route('settings.profile') }}" class="h-[18px] w-[9px] mr-2 mb-[1px] block sm:hidden">
            <img class="w-full h-full" src="{{ asset('assets/icon/back-outlined-left.svg') }}" alt=""/>
        </a>
        <p class="text-white font-medium text-base sm:text-xl">Blocked users</p>
    </div>

    <!-- BLOCKED USERS LIST -->
    <div class="mb-4">
        <p class="text-custom4 font-bold text-xs sm:text-base mb-3">Blocked Users</p>
        
        <!-- Empty State -->
        <div class="flex flex-col items-center justify-center py-8 border border-custom6 rounded-xl">
            <img src="{{ asset('assets/icon/blocked-users.svg') }}" alt="No blocked users" class="w-16 h-16 mb-4">
            <p class="text-custom4 text-sm sm:text-base text-center">You haven't blocked anyone yet</p>
        </div>

        <!-- Example Blocked Users (Hard-coded for demo) -->
        <div class="space-y-3 mt-4">
            <div class="flex justify-between items-center p-4 border border-custom6 rounded-xl">
                <div class="flex items-center gap-x-3">
                    <div class="h-10 w-10 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/home/pp-placeholder.png') }}" 
                             alt="Profile Picture"
                             class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-secondary font-medium text-sm sm:text-base">John Smith</p>
                        <p class="text-custom4 text-xs sm:text-sm">@johnsmith</p>
                    </div>
                </div>
                <button type="button" 
                        class="px-4 py-2 border border-custom3 text-custom3 rounded-full text-xs sm:text-sm hover:bg-custom3 hover:text-white transition-all duration-200">
                    Unblock
                </button>
            </div>

            <div class="flex justify-between items-center p-4 border border-custom6 rounded-xl">
                <div class="flex items-center gap-x-3">
                    <div class="h-10 w-10 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/home/pp-placeholder.png') }}" 
                             alt="Profile Picture"
                             class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-secondary font-medium text-sm sm:text-base">Sarah Johnson</p>
                        <p class="text-custom4 text-xs sm:text-sm">@sarahj</p>
                    </div>
                </div>
                <button type="button" 
                        class="px-4 py-2 border border-custom3 text-custom3 rounded-full text-xs sm:text-sm hover:bg-custom3 hover:text-white transition-all duration-200">
                    Unblock
                </button>
            </div>

            <div class="flex justify-between items-center p-4 border border-custom6 rounded-xl">
                <div class="flex items-center gap-x-3">
                    <div class="h-10 w-10 rounded-full overflow-hidden">
                        <img src="{{ asset('assets/images/home/pp-placeholder.png') }}" 
                             alt="Profile Picture"
                             class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="text-secondary font-medium text-sm sm:text-base">Mike Wilson</p>
                        <p class="text-custom4 text-xs sm:text-sm">@mikewilson</p>
                    </div>
                </div>
                <button type="button" 
                        class="px-4 py-2 border border-custom3 text-custom3 rounded-full text-xs sm:text-sm hover:bg-custom3 hover:text-white transition-all duration-200">
                    Unblock
                </button>
            </div>
        </div>
    </div>

    <!-- Info Text -->
    <div class="mt-6">
        <p class="text-custom4 text-xs sm:text-sm leading-relaxed">
            Blocked users won't be able to:
        </p>
        <ul class="list-disc list-inside mt-2 space-y-1 text-custom4 text-xs sm:text-sm">
            <li>See your profile</li>
            <li>Send you messages</li>
            <li>Follow your account</li>
            <li>View your posts and comments</li>
        </ul>
    </div>
    </div>
</section>
@endsection
