{{-- Profile Setup Form --}}
<form id="profile-setup" 
      method="POST" 
      action="{{ route('step1.save') }}" 
      enctype="multipart/form-data" 
      class="flex justify-center items-start animate-fade-in flex-1 sm:py-10 sm:items-center">
    @csrf
    <div class="max-w-[580px] w-full p-0 sm:border-[0.5px] sm:backdrop-blur-40 rounded-[24px] sm:p-[40px] sm:bg-custom5 sm:border-custom1">
        <button id="profile-setup-bk-btn" type="button" class="flex items-center transition-transform duration-200 hover:scale-105">
            <div class="h-[20px] w-[20px] sm:h-[24px] sm:w-[24px]">
                <img class="h-full w-full" src="{{ asset('assets/icon/ep_back.svg') }}" alt="Back" />
            </div>
            <p class="font-normal ml-[10px] text-secondary text-xs sm:text-base">
                Step 1 of 7
            </p>
        </button>
        
        <h1 class="text-base text-secondary font-medium mt-[24px] sm:mt-[40px] md:text-[28px]">
            Set up your profile
        </h1>
        
        {{-- Banner Image Section --}}
        <div class="mt-6 sm:mt-10">
            <div class="relative w-full h-[100px] sm:h-[140px] rounded-lg bg-secondary overflow-hidden">
                <img id="banner-image" src="{{ auth()->user()->banner_url ?? asset('assets/images/home/placeholder-6.svg') }}" 
                     class="w-full h-full object-cover" alt="Banner"/>
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                    <div class="text-white text-center">
                        <p class="text-sm">Click to upload banner</p>
                        <p class="text-xs">Recommended size: 1500x500</p>
                    </div>
                </div>
            </div>
            <input type="file" id="banner-input" name="banner_image" accept="image/*" class="hidden" />
        </div>

        {{-- Profile Image Section --}}
        <div class="flex items-center mt-6 sm:mt-10">
            <div class="relative rounded-full bg-secondary w-14 h-14 sm:h-20 sm:w-20 overflow-hidden">
                <img id="profile-image" src="{{ auth()->user()->profile_image_url ?? asset('assets/images/home/placeholder-1.png') }}" 
                     class="rounded-full h-full w-full object-cover" alt="Profile"/>
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity rounded-full">
                    <p class="text-white text-xs">Upload photo</p>
                </div>
            </div>
            <p class="text-custom2 text-xs font-medium ml-3 sm:text-xl">
              @  {{ auth()->user()->username ?? '' }}
            </p>
        </div>

        {{-- Image Upload Buttons --}}
        <div class="flex text-secondary text-xs mt-3 sm:mt-5 sm:text-sm">
            <input type="file" id="profile-input" name="profile_image" accept="image/*" class="hidden" />
            <button type="button" id="upload-profile" class="text-center shadow-combined border border-secondary rounded-[40px] h-[33px] w-[103px] sm:w-[140px] sm:h-11 transition-transform duration-200 hover:scale-105">
                Upload Profile
            </button>
            <button type="button" id="upload-banner" class="ml-2 text-center shadow-combined border border-secondary rounded-[40px] h-[33px] w-[103px] sm:w-[140px] sm:h-11 transition-transform duration-200 hover:scale-105">
                Upload Banner
            </button>
        </div>

        {{-- Profile Fields --}}
        <div class="relative">
            <input required id="username" name="username" maxlength="30"
                   class="w-full h-[45px] mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b-2 border-custom1 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[40px]" 
                   value="{{ old('username', auth()->user()->username ?? '') }}" />
            <label for="username" class="absolute bottom-[13px] left-0 text-custom4 text-xs pointer-events-none transition-all duration-150 sm:text-sm">
                Username (max 30 characters)
            </label>
        </div>
        
        <div class="relative">
            <input required id="full-name" name="full_name" maxlength="50"
                   class="w-full h-[45px] mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b-2 border-custom1 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[40px]" 
                   value="{{ old('full_name', auth()->user()->full_name ?? '') }}" />
            <label for="full-name" class="absolute bottom-[13px] left-0 text-custom4 text-xs pointer-events-none transition-all duration-150 sm:text-sm">
                Full Name (max 50 characters)
            </label>
        </div>

        <div class="relative">
            <textarea id="bio" name="bio" required rows="3" maxlength="160"
                      class="resize-none bio-textarea text-start align-top w-full mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b-2 border-custom1 focus:outline-none focus:ring-0 sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[40px]">{{ old('bio', auth()->user()->bio ?? '') }}</textarea>
            <label for="bio" class="absolute bottom-[50px] left-0 text-custom4 text-xs pointer-events-none transition-all duration-150 sm:text-sm">
                Bio (max 160 characters)
            </label>
            <span class="text-xs text-custom4 absolute right-0 bottom-[-20px]">
                <span id="bio-count">0</span>/160
            </span>
        </div>

        {{-- Date of Birth Field --}}
        <div class="relative mt-8 sm:mt-12">
            <label for="dob" class="block text-custom4 text-xs mb-2 sm:text-sm">
                Date of Birth (Must be 13 or older)
            </label>
            <input type="date" id="dob" name="dob" required
                   max="{{ now()->subYears(13)->format('Y-m-d') }}"
                   class="w-full h-[45px] text-xs bg-transparent text-custom2 px-3 border border-custom1 rounded-lg focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-custom3"
                   value="{{ old('dob', auth()->user()->dob ? auth()->user()->dob->format('Y-m-d') : '') }}" />
        </div>

        {{-- Gender Selection --}}
        <div class="relative mt-8 sm:mt-12">
            <label for="gender" class="block text-custom4 text-xs mb-2 sm:text-sm">
                Gender
            </label>
            <div class="relative">
                <select id="gender" name="gender" required
                        class="w-full h-[45px] text-xs bg-transparent text-custom2 px-3 border border-custom1 rounded-lg focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-custom3 appearance-none cursor-pointer">
                    <option value="" disabled {{ old('gender', auth()->user()->gender) ? '' : 'selected' }}>Select your gender</option>
                    <option value="male" {{ old('gender', auth()->user()->gender) === 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender', auth()->user()->gender) === 'female' ? 'selected' : '' }}>Female</option>
                    <option value="non_binary" {{ old('gender', auth()->user()->gender) === 'non_binary' ? 'selected' : '' }}>Non-binary</option>
                    <option value="other" {{ old('gender', auth()->user()->gender) === 'other' ? 'selected' : '' }}>Other</option>
                    <option value="prefer_not_to_say" {{ old('gender', auth()->user()->gender) === 'prefer_not_to_say' ? 'selected' : '' }}>Prefer not to say</option>
                </select>
                {{-- Custom select arrow --}}
                <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
                    <svg class="w-4 h-4 text-custom4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
        </div>

        <button type="submit" class="outline-none shadow-combined h-[41px] mt-8 rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm sm:h-[44px] sm:mt-12 transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg">
            Continue
        </button>
    </div>
</form>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Profile Image Upload
    const profileInput = document.getElementById('profile-input');
    const profileImage = document.getElementById('profile-image');
    const uploadProfileBtn = document.getElementById('upload-profile');
    const uploadBannerBtn = document.getElementById('upload-banner');
    const bannerInput = document.getElementById('banner-input');
    const bannerImage = document.getElementById('banner-image');
    const bioTextarea = document.getElementById('bio');
    const bioCount = document.getElementById('bio-count');

    // Profile Image Upload
    uploadProfileBtn.addEventListener('click', () => profileInput.click());
    profileInput.addEventListener('change', function(e) {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = e => profileImage.src = e.target.result;
            reader.readAsDataURL(this.files[0]);
        }
    });

    // Banner Image Upload
    uploadBannerBtn.addEventListener('click', () => bannerInput.click());
    bannerInput.addEventListener('change', function(e) {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = e => bannerImage.src = e.target.result;
            reader.readAsDataURL(this.files[0]);
        }
    });

    // Banner click to upload
    bannerImage.parentElement.addEventListener('click', () => bannerInput.click());

    // Bio Character Counter
    function updateBioCount() {
        const currentLength = bioTextarea.value.length;
        bioCount.textContent = currentLength;
        
        if (currentLength > 160) {
            bioTextarea.value = bioTextarea.value.substring(0, 160);
            bioCount.textContent = 160;
        }
    }

    bioTextarea.addEventListener('input', updateBioCount);
    bioTextarea.addEventListener('keyup', updateBioCount);
    bioTextarea.addEventListener('paste', () => setTimeout(updateBioCount, 0));

    // Initialize counter with current value
    updateBioCount();
});
</script>
@endpush
