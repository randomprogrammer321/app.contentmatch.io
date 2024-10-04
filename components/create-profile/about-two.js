export function aboutTwoForm() {
    return `<form
        id="about-two"
        class="hidden justify-center items-start animate-fade-in flex-1 sm:py-10 sm:items-center"
      >
        <div
          class="max-w-[720px] w-full p-0 sm:border-[0.5px] sm:backdrop-blur-40 rounded-[24px] sm:p-[40px] sm:bg-custom5 sm:border-custom1"
        >
          <button
            id="about-two-bk-btn"
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
              Step 4 of 5
            </p>
          </button>
          <h1
            class="text-base text-secondary font-medium my-6 leading-[22.4px] sm:leading-[39.2px] sm:mt-[40px] sm:mb-10 md:text-[28px]"
          >
            Let's learn about you
          </h1>

          <div class="border-b border-custom6 pb-3 sm:pb-5">
            <p
              class="font-medium text-secondary leading-[16.8px] text-xs sm:leading-[28px] sm:text-xl"
            >
            What type of content do you create?
            </p>
            <div
              class="grid grid-cols-3 mt-3 gap-y-3 gap-x-2 sm:gap-x-[14px] sm:gap-y-6 sm:mt-5"
            >
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
              Gaming
              </button>
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
              Vlogging
              </button>
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
              Beauty & Fashion
              </button>
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
              Technology
              </button>
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
              Educational
              </button>
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
              Fitness & Health
              </button>

              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
              DIY & Crafts
              </button>
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
              Food & Cooking
              </button>
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
              Music
              </button>
            </div>
          </div>

          <div class="border-b border-custom6 pb-3 mt-5 sm:pb-5">
            <p
              class="font-medium text-secondary leading-[16.8px] text-xs sm:leading-[28px] sm:text-xl"
            >
            What is your audience size?
            </p>
            <div
              class="grid grid-cols-1 mt-3 gap-y-3 gap-x-2 sm:gap-x-[14px] sm:gap-y-6 sm:grid-cols-2 size1:grid-cols-3 sm:mt-5"
            >
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
              Small: 0 - 4999
              </button>
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
              Medium: 5000 - 19,999
              </button>
              <button
              type="button"
              class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
            >
            Large: > 20,000
            </button>
            </div>
            
          </div>
          <button
          id="to-step-five"
          class="outline-none shadow-combined h-[41px] mt-4 rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm sm:h-[44px] sm:mt-10 transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg"
        >
          Continue
        </button>

      </form>`;
}