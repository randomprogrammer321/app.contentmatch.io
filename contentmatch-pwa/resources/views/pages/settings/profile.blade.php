@extends('layouts.settings')

@section('settings-content')
<section class="flex-1 flex-col overflow-y-auto pt-0 sm:pt-5">
    <div class="pl-4 pr-4 sm:pl-10 sm:pr-10 size1:pr-24">
        <!-- PROFILE HEADER -->
    <div class="h-[46px] flex items-center border-b border-custom6 sm:border-none sm:h-max">
        <a href="{{ route('settings.profile') }}" class="h-[18px] w-[9px] mr-2 mb-[1px] block sm:hidden">
            <img class="w-full h-full" src="{{ asset('assets/icon/back-outlined-left.svg') }}" alt=""/>
        </a>
        <p class="text-white font-medium text-base sm:text-xl">Edit Profile</p>
    </div>

    <!-- COVER PHOTO -->
    <div class="relative w-full rounded-xl mt-5 h-[110px] sm:h-[200px] sm:mt-[37px]">
        <div class="absolute bottom-2 w-max right-2 bg-custom10 h-[33px] backdrop-blur-md border border-secondary rounded-[32px] sm:right-5 sm:bottom-4 px-3 sm:h-9">
            <button class="flex items-center h-full w-full justify-center text-[10px] text-secondary font-medium sm:text-base">
                Change cover photo
            </button>
            <input type="file" accept="image/*" class="hidden"/>
        </div>
        <div class="h-full w-full overflow-hidden rounded-xl border border-custom6">
            <img class="object-cover h-full w-full" src="{{ asset('assets/images/home/placeholder-6.svg') }}" alt="Cover photo"/>
        </div>
    </div>

    <!-- USER INFO -->
    <div class="p-3 mt-5 mb-1 flex items-center justify-between border border-custom6 rounded-xl sm:mb-0 sm:py-3 sm:px-5 sm:mt-10">
        <div class="flex items-center gap-x-2">
            <div class="h-10 w-10 rounded-full border border-secondary overflow-hidden sm:w-20 sm:h-20">
                <img class="h-full w-full object-cover" src="{{ auth()->user()->profile_image_url ?? asset('assets/images/home/pp-placeholder.png') }}" alt=""/>
            </div>
            <div>
                <p class="text-white font-bold text-xs sm:text-xl">{{ auth()->user()->full_name }}</p>
                <p class="text-custom4 font-medium text-xs mt-[6px] sm:mt-[3px] sm:text-base">{{ '@' . auth()->user()->username }}</p>
            </div>
        </div>
        <div class="rounded-[32px] flex-shrink-0 px-3 bg-custom14 h-[33px] sm:h-[38px]">
            <button class="flex items-center justify-center h-full w-full text-secondary font-medium text-xs sm:text-base">
                Change profile picture
            </button>
            <input type="file" accept="image/*" class="hidden"/>
        </div>
    </div>

    <!-- FORM -->
    <form class="mt-6">
        <!-- Name -->
        <div class="relative mb-3 sm:mb-2">
            <input type="text" value="{{ auth()->user()->full_name }}" 
                   class="w-full h-[45px] mt-6 text-xs bg-transparent text-secondary px-0 border-0 border-b border-custom1 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-custom2 sm:mt-[40px]"/>
            <label class="absolute bottom-[13px] left-0 text-custom4 text-xs pointer-events-none transition-all duration-150 sm:text-sm">
                Name
            </label>
        </div>

        <!-- Bio -->
        <div class="relative mb-3 sm:mb-2">
            <textarea class="w-full pb-2 h-[45px] mt-6 text-xs bg-transparent text-secondary px-0 border-0 border-b border-custom1 focus:outline-none focus:ring-0 sm:h-[70px] sm:text-base focus:border-custom2 sm:mt-[25px] resize-none overflow-hidden">{{ auth()->user()->bio }}</textarea>
            <label class="absolute bottom-[19px] left-0 text-custom4 text-xs pointer-events-none transition-all duration-150 sm:text-sm">
                Bio
            </label>
        </div>

        <!-- Social Links -->
        <div class="border-t border-custom6 w-full pt-6">
            <p class="text-white font-medium text-sm sm:text-xl">Social links</p>
            <!-- Social inputs here -->
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end mb-24">
            <button type="submit" class="h-[38px] px-10 bg-secondary flex items-center justify-center text-custom9 rounded-[32px] w-full sm:w-max">
                Submit
            </button>
        </div>
    </form>
    </div>
</section>
@endsection
