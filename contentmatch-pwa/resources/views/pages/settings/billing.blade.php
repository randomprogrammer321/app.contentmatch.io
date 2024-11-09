@extends('layouts.app')
@section('content')
<section class="flex-1 flex-col overflow-y-auto pt-0 sm:pt-5">

<div class="pl-4 pr-4 sm:pl-10 sm:pr-10 size1:pr-24">
    {{-- Mobile Header --}}
    <div class="h-[46px] flex items-center border-b border-custom6 mb-5 -mx-4 px-4 sm:px-0 sm:mx-0 sm:mb-9 sm:border-none sm:h-max">
        <button class="h-[18px] w-[9px] mr-2 mb-[1px] block sm:hidden">
            <img class="w-full h-full" src="{{ asset('assets/icon/back-outlined-left.svg') }}" alt=""/>
        </button>
        <p class="text-white font-medium text-base sm:text-xl">Billing and Invoices</p>
    </div>

    {{-- Subscribe Section --}}
    <div class="border border-custom6 rounded-xl mb-5 p-3 sm:p-5 sm:mb-10">
        <div class="flex items-center justify-between py-2 border-b border-custom6 mb-3 sm:mb-4 sm:py-3">
            <p class="font-bold text-secondary text-sm sm:text-xl">Subscribe to Pro</p>
            <button class="px-3 rounded-[32px] flex items-center border-b border-custom6 justify-center bg-custom11 text-custom9 font-medium text-xs sm:text-sm h-[33px] sm:h-9">
                Subscribe
            </button>
        </div>

        {{-- Pricing --}}
        <div class="h-[52px] flex items-center gap-x-3 mb-[14px] sm:mb-4">
            <p class="text-white font-bold text-base sm:text-2xl">$4,000</p>
            <div class="rounded-[40px] flex items-center border border-custom6 p-2">
                <button class="px-3 bg-custom6 rounded-[40px] flex items-center justify-end font-medium text-secondary h-[33px] text-xs sm:text-sm sm:h-9">
                    Annually
                </button>
                <button class="px-3 flex items-center justify-end font-medium text-custom4 h-[33px] text-xs sm:text-sm sm:h-9">
                    Monthly
                </button>
            </div>
        </div>

        {{-- Features List --}}
        <p class="text-custom4 font-medium text-xs sm:text-base">What you will enjoy</p>
        @foreach([
            'Unrestricted direct messaging',
            'Ad-free experience',
            'Increased group participation (join more than 2 groups)',
            'Ability to create multiple groups',
            'Access to boost packs for increased reach'
        ] as $feature)
            <div class="flex items-center gap-x-2 py-1 sm:py-2">
                <div class="h-[18px] w-[18px] sm:h-5 sm:w-5">
                    <img class="w-full h-full" src="{{ asset('assets/icon/check.svg') }}" alt=""/>
                </div>
                <p class="font-normal text-custom2 text-xs sm:text-base">{{ $feature }}</p>
            </div>
        @endforeach
    </div>

    {{-- Billing History --}}
    <div class="mt-8">
        <p class="text-secondary font-medium text-xs sm:text-xl">Billing History</p>
        <div class="border border-custom6 rounded-xl overflow-hidden mb-5 p-3 mt-3 sm:mt-4 sm:p-5 sm:mb-10">
            <table class="min-w-full">
                <thead>
                    <tr class="font-medium text-custom4 border-b border-custom6 h-[33px] text-xs sm:text-base sm:h-[38px]">
                        <th class="text-start pr-1">Invoice</th>
                        <th class="text-start pr-1">Amount</th>
                        <th class="text-start pr-1">Date paid</th>
                        <th class="text-start pr-1">Due date</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0; $i < 4; $i++)
                        <tr class="font-normal text-custom2 border-b border-custom6 text-xs sm:text-base">
                            <td class="pr-2 py-2 sm:pr-1 sm:py-4">Pro version</td>
                            <td class="pr-2 py-2 sm:pr-1 sm:py-4">$400</td>
                            <td class="pr-2 py-2 sm:pr-1 sm:py-4">12th July, 2024</td>
                            <td class="pr-2 py-2 sm:pr-1 sm:py-4">12th July, 2024</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
    </div>
</section>
@endsection
