export function socialsForm() {
  return `<form
    id="socials"
      class="hidden justify-center items-start animate-fade-in flex-1 sm:py-10 sm:items-center"
    >
      <div
        class="max-w-[580px] w-full p-0 sm:border-[0.5px] sm:backdrop-blur-40 rounded-[24px] sm:p-[40px] sm:bg-custom5 sm:border-custom1"
      >
        <button
          id="socials-bk-btn"
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
            Step 2 of 5
          </p>
        </button>
        <h1
          class="text-base text-secondary font-medium mt-[24px] leading-[22.4px] sm:leading-[39.2px] sm:mt-[40px] md:text-[28px]"
        >
        Add links to platforms you are looking to grow
        </h1>
        <p class="text-xs text-custom4 leading-[22.4px] mt-1 font-medium sm:text-base">We only accept Instagram, Youtube and Tiktok</p>
  
        <div class="relative">
          <input
            required
            id="insta-url"
            type="url"
            class="w-full h-[45px] mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b-2 border-custom1 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[40px]"
          />
          <label
            for="insta-url"
            class="absolute bottom-[13px] left-0 text-custom2 text-xs pointer-events-none transition-all duration-150 sm:text-sm"
          >
          Instagram URL
          </label>
        </div>

        <div class="relative">
          <input
            required
            id="youtube-url"
            type="url"
            class="w-full h-[45px] mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b-2 border-custom1 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-6"
          />
          <label
            for="youtube-url"
            class="absolute bottom-[13px] left-0 text-custom2 text-xs pointer-events-none transition-all duration-150 sm:text-sm"
          >
          Youtube URL
          </label>
        </div>

        <div class="relative">
          <input
            required
            id="tiktok-url"
            type="url"
            class="w-full h-[45px] mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b-2 border-custom1 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-6"
          />
          <label
            for="tiktok-url"
            class="absolute bottom-[13px] left-0 text-custom2 text-xs pointer-events-none transition-all duration-150 sm:text-sm"
          >
          TikTok URL
          </label>
        </div>
        <button
          id="to-about-one"
          class="outline-none shadow-combined h-[41px] mt-4 rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm sm:h-[44px] sm:mt-10 transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg"
        >
          Continue
        </button>
      </div>
    </form>`;
}
