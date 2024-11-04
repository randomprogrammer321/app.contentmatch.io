@extends('layouts.settings')

@section('settings-content')
<section class="flex-1 flex-col overflow-y-auto pt-0 sm:pt-5">
<div class="pl-4 pr-4 sm:pl-10 sm:pr-10 size1:pr-24">
    <!-- NOTIFICATIONS HEADER -->
    <div class="h-[46px] flex items-center border-b border-custom6 mb-5 -mx-4 px-4 sm:px-0 sm:mx-0 sm:mb-9 sm:border-none sm:h-max">
        <a href="{{ route('settings.profile') }}" class="h-[18px] w-[9px] mr-2 mb-[1px] block sm:hidden">
            <img class="w-full h-full" src="{{ asset('assets/icon/back-outlined-left.svg') }}" alt=""/>
        </a>
        <p class="text-white font-medium text-base sm:text-xl">Notifications</p>
    </div>

    <!-- NOTIFICATION SETTINGS -->
    <div class="mb-4">
        <p class="text-custom4 font-bold text-xs sm:text-base">Notification Preferences</p>
        
        <!-- Email Notifications -->
        <div class="flex justify-between items-center p-4 border border-custom6 rounded-xl mt-3">
            <div>
                <p class="text-secondary font-medium text-sm sm:text-base">Email Notifications</p>
                <p class="text-custom4 text-xs sm:text-sm mt-1">Receive notifications via email</p>
            </div>
            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" checked>
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-custom3"></div>
            </label>
        </div>

        <!-- Push Notifications -->
        <div class="flex justify-between items-center p-4 border border-custom6 rounded-xl mt-3">
            <div>
                <p class="text-secondary font-medium text-sm sm:text-base">Push Notifications</p>
                <p class="text-custom4 text-xs sm:text-sm mt-1">Receive push notifications</p>
            </div>
            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" checked>
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-custom3"></div>
            </label>
        </div>

        <!-- Engagement Notifications -->
        <div class="flex justify-between items-center p-4 border border-custom6 rounded-xl mt-3">
            <div>
                <p class="text-secondary font-medium text-sm sm:text-base">Engagement Notifications</p>
                <p class="text-custom4 text-xs sm:text-sm mt-1">Get notified about likes, comments and shares</p>
            </div>
            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" checked>
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-custom3"></div>
            </label>
        </div>

        <!-- Match Notifications -->
        <div class="flex justify-between items-center p-4 border border-custom6 rounded-xl mt-3">
            <div>
                <p class="text-secondary font-medium text-sm sm:text-base">Match Notifications</p>
                <p class="text-custom4 text-xs sm:text-sm mt-1">Get notified about new matches</p>
            </div>
            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer" checked>
                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-custom3"></div>
            </label>
        </div>

        <!-- Save Button -->
        <div class="flex justify-end mt-6">
            <button type="submit" class="px-6 py-2 bg-custom3 text-white rounded-full text-sm sm:text-base hover:bg-opacity-90 transition-all duration-200">
                Save Changes
            </button>
        </div>
    </div>
    </div>
</section>
@endsection
