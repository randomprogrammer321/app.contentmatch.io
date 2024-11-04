<form id="profile-setup" class="flex justify-center items-start animate-fade-in flex-1 sm:py-10 sm:items-center">
    <div class="max-w-[580px] w-full p-0 sm:border-[0.5px] sm:backdrop-blur-40 rounded-[24px] sm:p-[40px] sm:bg-custom5 sm:border-custom1">
        <button id="profile-setup-bk-btn" type="button" class="flex items-center transition-transform duration-200 hover:scale-105">
            <div class="h-[20px] w-[20px] sm:h-[24px] sm:w-[24px]">
                <img class="h-full w-full" src="{{ asset('assets/icon/ep_back.svg') }}" alt="Back" />
            </div>
            <p class="font-normal ml-[10px] text-secondary text-xs sm:text-base">
                Step 1 of 5
            </p>
        </button>
        
        <h1 class="text-base text-secondary font-medium mt-[24px] sm:mt-[40px] md:text-[28px]">
            Set up your profile
        </h1>
        
        <div class="flex items-center mt-6 sm:mt-10">
            <div class="rounded-full bg-secondary w-14 h-14 sm:h-20 sm:w-20">
                <img id="profile-image" src="" class="rounded-full h-full w-full object-cover" />
            </div>
            <p class="text-custom2 text-xs font-medium ml-3 sm:text-xl">
                @opulence222
            </p>
        </div>

        <div class="flex text-secondary text-xs mt-3 sm:mt-5 sm:text-sm">
            <input type="file" id="image-input" accept="image/*" style="display: none" />
            <button type="button" id="upload-button" class="text-center shadow-combined border border-secondary rounded-[40px] h-[33px] w-[103px] sm:w-[140px] sm:h-11 transition-transform duration-200 hover:scale-105">
                Upload Image
            </button>
            <button type="button" id="remove-button" class="ml-2 text-center h-[33px] w-[103px] sm:w-[122px] sm:h-11 transition-transform duration-200 hover:scale-105">
                Remove Image
            </button>
        </div>

        <div class="relative">
            <input required id="full-name" class="w-full h-[45px] mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b-2 border-custom1 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[40px]" />
            <label for="full-name" class="absolute bottom-[13px] left-0 text-custom4 text-xs pointer-events-none transition-all duration-150 sm:text-sm">
                Full Name
            </label>
        </div>

        <div class="relative">
            <textarea id="bio" required rows="3" class="resize-none bio-textarea text-start align-top w-full mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b-2 border-custom1 focus:outline-none focus:ring-0 sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[40px]"></textarea>
            <label for="bio" class="absolute bottom-[50px] left-0 text-custom4 text-xs pointer-events-none transition-all duration-150 sm:text-sm">
                Bio
            </label>
        </div>

        <button id="to-socials" class="outline-none shadow-combined h-[41px] mt-4 rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm sm:h-[44px] sm:mt-10 transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg">
            Continue
        </button>
    </div>
</form>
