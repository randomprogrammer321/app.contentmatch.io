@extends('layouts.settings')

@section('settings-content')
<section class="flex-1 flex-col overflow-y-auto pt-0 sm:pt-5">

<div class="pl-4 pr-4 sm:pl-10 sm:pr-10 size1:pr-24">
    <!-- DEACTIVATE HEADER -->
    <div class="h-[46px] flex items-center border-b border-custom6 mb-5 -mx-4 px-4 sm:px-0 sm:mx-0 sm:mb-9 sm:border-none sm:h-max">
    <button id="hb-btn"  class="h-[18px] w-[9px] mr-2 mb-[1px] block sm:hidden">
        <img class="w-full h-full" src="{{ asset('assets/icon/back-outlined-left.svg') }}" alt=""/>
    </button>
        <p class="text-white font-medium text-base sm:text-xl">
            Deactivate your account
        </p>
    </div>

    <!-- USER INFO -->
    <div class="flex items-center gap-x-1 justify-between border border-custom6 rounded-xl p-3 mb-2 sm:mb-4 sm:py-3 sm:px-5">
        <div class="flex items-center gap-x-2">
            <div class="rounded-full overflow-hidden h-10 w-10 sm:w-20 sm:h-20">
                <img class="w-full h-full object-cover" 
                     src="{{ auth()->user()->profile_image_url ?? asset('assets/images/home/pp-placeholder.png') }}" 
                     alt="Profile Picture"/>
            </div>
            <div class="flex flex-col gap-y-[6px]">
                <p class="text-bold text-white text-xs sm:text-xl">
                    {{ auth()->user()->full_name }}
                </p>
                <p class="font-medium text-custom4 text-xs sm:text-xl">
                    {{ '@' . auth()->user()->username }}
                </p>
            </div>
        </div>
        <p class="font-medium text-custom4 text-xs sm:text-base">
            Joined: {{ auth()->user()->created_at->format('jS F, Y') }}
        </p>
    </div>

    <!-- DEACTIVATION WARNING -->
    <div class="mt-6 space-y-4">
        <p class="font-bold text-secondary text-xs mb-2 sm:mb-3 sm:text-base">
            This will deactivate your account
        </p>
        <p class="font-normal text-custom4 leading-[19.2px] text-xs sm:text-base sm:leading-[25.6px]">
            You're about to deactivate your Contentmatch account. Your display name, @{{ auth()->user()->username }}, 
            and public profile will no longer be visible on contentmatch.com.
        </p>

        <!-- Deactivation Effects -->
        <div class="space-y-3 mt-4">
            <p class="text-custom4 font-medium text-xs sm:text-base">What happens when you deactivate:</p>
            <ul class="list-disc list-inside space-y-2 text-custom4 text-xs sm:text-sm">
                <li>Your profile and content will be hidden</li>
                <li>Active subscriptions will be cancelled</li>
                <li>Your username will be reserved for 30 days</li>
                <li>Community memberships will be suspended</li>
                <li>Ongoing collaborations will be cancelled</li>
            </ul>
        </div>

        <!-- Confirmation Input -->
        <div class="mt-6">
            <label class="block text-custom4 text-xs mb-2 sm:text-sm">
                Type "DELETE" to confirm deactivation
            </label>
            <input type="text" 
                   class="w-full bg-transparent border border-custom6 rounded-lg p-2 text-white text-sm focus:border-error focus:ring-0"
                   placeholder="Type DELETE"/>
        </div>

        <!-- Deactivate Button -->
        <button disabled 
                class="px-3 bg-error rounded-[32px] flex items-center justify-center font-bold text-custom2 mt-4 text-xs sm:text-sm h-[33px] sm:h-9 sm:mt-6 w-full sm:w-auto disabled:opacity-50">
            Deactivate Account
        </button>
    </div>
</div>
</section>
@endsection

@push('scripts')
<script>
    const deactivateBtn = document.querySelector('button:last-child');
    const confirmInput = document.querySelector('input[type="text"]');

    confirmInput.addEventListener('input', function() {
        deactivateBtn.disabled = this.value !== 'DELETE';
    });
</script>
@endpush

