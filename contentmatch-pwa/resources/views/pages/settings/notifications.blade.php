@extends('layouts.settings')

@section('settings-content')
<section class="flex-1 flex-col overflow-y-auto pt-0 sm:pt-5">
<div class="pl-4 pr-4 sm:pl-10 sm:pr-10 size1:pr-24">
    <!-- NOTIFICATIONS HEADER -->
    <div class="h-[46px] flex items-center border-b border-custom6 mb-5 -mx-4 px-4 sm:px-0 sm:mx-0 sm:mb-9 sm:border-none sm:h-max">
    <button id="hb-btn"  class="h-[18px] w-[9px] mr-2 mb-[1px] block sm:hidden">
        <img class="w-full h-full" src="{{ asset('assets/icon/back-outlined-left.svg') }}" alt=""/>
    </button>
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
            <label for="email-notif" class="flex items-center cursor-pointer">
              <div class="relative">
                <input id="email-notif" type="checkbox" class="sr-only peer">
                <div class="block bg-gray-600 border border-custom4 peer-checked:bg-custom14 peer-checked:border-none w-[38px] h-6 rounded-full transition"></div>
                <div class="dot absolute left-1 top-1 w-[16px] h-[16px] rounded-full bg-white border border-custom4 peer-checked:translate-x-[15px] peer-checked:none transition-transform"></div>
              </div>
            </label>
        </div>

        <!-- Push Notifications -->
        <div class="flex justify-between items-center p-4 border border-custom6 rounded-xl mt-3">
            <div>
                <p class="text-secondary font-medium text-sm sm:text-base">Push Notifications</p>
                <p class="text-custom4 text-xs sm:text-sm mt-1">Receive push notifications</p>
            </div>
            <label for="push-notif" class="flex items-center cursor-pointer">
              <div class="relative">
                <input id="push-notif" type="checkbox" class="sr-only peer">
                <div class="block bg-gray-600 border border-custom4 peer-checked:bg-custom14 peer-checked:border-none w-[38px] h-6 rounded-full transition"></div>
                <div class="dot absolute left-1 top-1 w-[16px] h-[16px] rounded-full bg-white border border-custom4 peer-checked:translate-x-[15px] peer-checked:none transition-transform"></div>
              </div>
            </label>
        </div>

        <!-- Engagement Notifications -->
        <div class="flex justify-between items-center p-4 border border-custom6 rounded-xl mt-3">
            <div>
                <p class="text-secondary font-medium text-sm sm:text-base">Engagement Notifications</p>
                <p class="text-custom4 text-xs sm:text-sm mt-1">Get notified about likes, comments and shares</p>
            </div>
            <label for="engagement-notif" class="flex items-center cursor-pointer">
              <div class="relative">
                <input id="engagement-notif" type="checkbox" class="sr-only peer">
                <div class="block bg-gray-600 border border-custom4 peer-checked:bg-custom14 peer-checked:border-none w-[38px] h-6 rounded-full transition"></div>
                <div class="dot absolute left-1 top-1 w-[16px] h-[16px] rounded-full bg-white border border-custom4 peer-checked:translate-x-[15px] peer-checked:none transition-transform"></div>
              </div>
            </label>
        </div>

        <!-- Match Notifications -->
        <div class="flex justify-between items-center p-4 border border-custom6 rounded-xl mt-3">
            <div>
                <p class="text-secondary font-medium text-sm sm:text-base">Match Notifications</p>
                <p class="text-custom4 text-xs sm:text-sm mt-1">Get notified about new matches</p>
            </div>
            <label for="match-notif" class="flex items-center cursor-pointer">
              <div class="relative">
                <input id="match-notif" type="checkbox" class="sr-only peer">
                <div class="block bg-gray-600 border border-custom4 peer-checked:bg-custom14 peer-checked:border-none w-[38px] h-6 rounded-full transition"></div>
                <div class="dot absolute left-1 top-1 w-[16px] h-[16px] rounded-full bg-white border border-custom4 peer-checked:translate-x-[15px] peer-checked:none transition-transform"></div>
              </div>
            </label>
        </div>

        <div class="flex justify-between items-center p-4 border border-custom6 rounded-xl mt-3">
            <div>
                <p class="text-secondary font-medium text-sm sm:text-base">Message Notifications</p>
                <p class="text-custom4 text-xs sm:text-sm mt-1">Get notified about new messages</p>
            </div>
            <label for="message-notif" class="flex items-center cursor-pointer">
              <div class="relative">
                <input id="message-notif" type="checkbox" class="sr-only peer">
                <div class="block bg-gray-600 border border-custom4 peer-checked:bg-custom14 peer-checked:border-none w-[38px] h-6 rounded-full transition"></div>
                <div class="dot absolute left-1 top-1 w-[16px] h-[16px] rounded-full bg-white border border-custom4 peer-checked:translate-x-[15px] peer-checked:none transition-transform"></div>
              </div>
            </label>
        </div>

        <!-- Save Button -->
        <div class="flex justify-end mt-6">
            <button type="submit" class="h-[38px] bg-secondary px-10 flex items-center justify-center text-custom9 rounded-[32px] w-full sm:w-max">
                Save Changes
            </button>
        </div>
    </div>
    </div>
</section>
@endsection
