export function userNamePasswordForm() {
    return `<form id="creat-user-pass"
    class="hidden justify-center items-start animate-fade-in flex-1 sm:py-10 sm:items-center"
  >
    <div
      class="max-w-[580px] w-full p-0 sm:border-[0.5px] sm:backdrop-blur-40 rounded-[24px] sm:p-[40px] sm:bg-custom5 sm:border-custom1"
    >
      <button
        id="creat-user-pass-bk-btn"
        type="button"
        class="flex items-center transition-transform duration-200 hover:scale-105"
      >
        <div class="h-[20px] w-[20px] sm:h-[24px] sm:w-[24px]">
          <img
            class="h-full w-full"
            src="/assets/icon/ep_back.svg"
            alt="Back"
          />
        </div>
        <p
          class="font-normal ml-[10px] text-secondary text-xs sm:text-base"
        >
          Back
        </p>
      </button>
      <h1
        class="text-base text-secondary font-medium mt-[24px] sm:mt-[40px] md:text-[28px]"
      >
        Create username and password
      </h1>
      <input
        required
        type="text"
        class="w-full h-[45px] mt-6 text-[12px] bg-transparent text-custom2 px-0 border-0 border-b-[1px] border-custom1 placeholder-custom2 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-[14px] focus:border-b-[2px] focus:border-custom3 sm:mt-[40px]"
        placeholder="Username"
      />
      <div class="relative mt-6">
        <input
          type="password"
          id="password"
          class="w-full h-[45px] text-[12px] bg-transparent text-custom2 px-0 border-0 border-b-[1px] border-custom1 placeholder-custom2 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-[14px] focus:border-b-[2px] focus:border-custom3"
          placeholder="Choose Password"
        />
        <img
          class="absolute top-4 right-2 cursor-pointer"
          id="togglePassword"
          src="/assets/icon/humbleicons_eye-close.svg"
        />
      </div>
      <div class="relative mt-6">
        <input
          type="password"
          id="confirmPassword"
          class="w-full h-[45px] text-[12px] bg-transparent text-custom2 px-0 border-0 border-b-[1px] border-custom1 placeholder-custom2 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-[14px] focus:border-b-[2px] focus:border-custom3"
          placeholder="Confirm Password"
        />
        <img
          class="absolute top-4 right-2 cursor-pointer"
          id="toggleConfirmPassword"
          src="/assets/icon/humbleicons_eye-close.svg"
        />
      </div>
      <p class="font-medium text-secondary text-xs mt-6 sm:text-base">
        Your password must have:
      </p>
      <div class="flex items-center mt-3">
        <div class="h-[12px] w-[12px] mr-1 sm:h-[18px] sm:w-[18px]">
          <img
            class="h-full w-full"
            src="/assets/icon/icon-park-solid_check-one.svg"
          />
        </div>
        <p class="font-normal text-custom4 text-xs leading-[22.4px] pt-[2px] sm:text-base">Above 8 characters</p>
      </div>
      <div class="flex items-center mt-2">
        <div class="h-[12px] w-[12px] mr-1 sm:h-[18px] sm:w-[18px]">
            <img
              class="h-full w-full"
              src="/assets/icon/icon-park-solid_check-one.svg"
            />
          </div>
          <p class="font-normal text-custom4 text-xs leading-[22.4px] pt-[2px] sm:text-base">A special character like @#$%^&*</p>
      </div>
      <div class="flex items-center mt-2">
        <div class="h-[12px] w-[12px] mr-1 sm:h-[18px] sm:w-[18px]">
            <img
              class="h-full w-full"
              src="/assets/icon/icon-park-solid_check-one.svg"
            />
          </div>
          <p class="font-normal text-custom4 text-xs leading-[22.4px] pt-[2px] sm:text-base">A number</p>
      </div>
      <button
      id="to-profile-setup"
        class="outline-none shadow-combined h-[41px] mt-[24px] rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm sm:h-[44px] sm:mt-[40px] transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg"
      >
        Continue
      </button>
    </div>
  </form>`;
  }
  





