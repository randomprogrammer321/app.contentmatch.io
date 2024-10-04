export function otpForm() {
  return `<form id="otp-form" class="flex justify-center items-start flex-1 sm:py-10 sm:items-center animate-fade-in">
        <div class="max-w-[580px] w-full p-0 sm:border-[0.5px] sm:backdrop-blur-40 rounded-[24px] sm:p-[40px] sm:bg-custom5 sm:border-custom1">

          <button id="back-button" type="button" class="flex items-center transition-transform duration-200 hover:scale-105">
            <div class="h-[20px] w-[20px] sm:h-[24px] sm:w-[24px]">
              <img
                class="h-full w-full"
                src="/assets/icon/ep_back.svg"
                alt="Back"
              />
            </div>
            <p class="font-normal ml-[10px] text-secondary text-xs sm:text-base">Back</p>
          </button>
          <h1 class="text-base text-secondary font-medium mt-[24px] sm:mt-[40px] md:text-[28px]">
            We sent an OTP
          </h1>
          <p class="text-secondary font-normal text-xs mt-[4px] sm:mt-[7px] sm:text-base">
            Please enter the OTP that was sent to xyz@gmail.com
          </p>
          <div class="flex gap-5 mt-[24px] sm:mt-[40px]">
            ${[...Array(6)]
              .map(
                (_, i) => `
              <input
                class="transition-transform duration-200 focus:scale-105 w-full h-[45px] text-center text-xs bg-transparent text-custom2 px-0 border-0 border-b-[1px] border-custom1 focus:outline-none focus:border-custom3 focus:ring-0 sm:h-[74px] sm:text-[24px]"
                type="number"
                maxlength="1"
                aria-label="OTP Digit ${i + 1}"
              />
            `
              )
              .join("")}
          </div>
          <div class="flex my-[25px] text-xs sm:text-base sm:my-[40px]">
            <p class="text-custom2 font-normal">Didn't get OTP?</p>
            <button class="text-white ml-2 hover:underline transition duration-200">Resend</button>
          </div>
          <a
            class="underline text-xs text-custom2 sm:text-base"
            href="/signup.html"
          >Use another email</a>
          <button
          id="to-user-pass"
            class="outline-none shadow-combined h-[41px] mt-[24px] rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm sm:h-[44px] sm:mt-[40px] transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg"
          >
            Continue
          </button>
        </div>
      </form>`;
}
