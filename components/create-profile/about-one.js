export function aboutOneForm() {
  return `<form
        id="about-one"
        class="hidden justify-center items-start animate-fade-in flex-1 sm:py-10 sm:items-center"
      >
        <div
          class="max-w-[720px] w-full p-0 sm:border-[0.5px] sm:backdrop-blur-40 rounded-[24px] sm:p-[40px] sm:bg-custom5 sm:border-custom1"
        >
          <button
            id="about-one-bk-btn"
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
              Step 3 of 5
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
              What is your purpose of joining?
            </p>
            <div
              class="grid grid-cols-2 mt-3 gap-y-3 gap-x-2 sm:gap-x-[14px] sm:gap-y-6 size1:grid-cols-3 sm:mt-5"
            >
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
                Meet new users
              </button>
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
                Grow my channel
              </button>
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
                Increase engagement
              </button>
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
                Support community
              </button>
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
                Digital Activism
              </button>
              <button
                type="button"
                class="w-full border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] h-[33px] size1:h-[46px] sm:text-base"
              >
                Boost followers
              </button>
            </div>
          </div>

          <div class="border-b border-custom6 pb-3 sm:pb-5">
            <p
              class="font-medium text-secondary leading-[28px] mt-3 text-xs sm:text-xl sm:mt-5"
            >
              What are your causes?
            </p>
            <div
              class="flex flex-wrap size1:grid size1:grid-cols-3 mt-3 gap-y-3 gap-x-2 sm:mt-5 sm:gap-x-[14px] sm:gap-y-6"
            >
              <button
                type="button"
                class="flex-grow px-1 h-[33px] w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                Gender Equality
              </button>
              <button
                type="button"
                class="flex-grow px-1 h-[33px] w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                LGBTQ Rights
              </button>
              <button
                type="button"
                class="flex-grow px-1 h-[33px] w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                Climate Change
              </button>
              <button
                type="button"
                class="flex-grow px-1 h-[33px] w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                Mental Health Awareness
              </button>
              <button
                type="button"
                class="flex-grow h-[33px] px-1 w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                Black Lives Matter
              </button>
              <button
                type="button"
                class="px-7 w-max h-[33px] border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                Poverty Alleviation
              </button>
            </div>
          </div>

          <div class="pb-3 sm:pb-5">
            <p
              class="font-medium text-secondary leading-[16.8px] mt-3 text-xs sm:leading-[28px] sm:text-xl sm:mt-5"
            >
              Choose your interest?
            </p>
            <div
              class="flex flex-wrap mt-3 gap-y-3 gap-x-2 sm:gap-x-[14px] sm:mt-5 sm:gap-y-6 size1:grid size1:grid-cols-3"
            >
              <button
                type="button"
                class="flex-grow h-[33px] px-3 w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                <div class="flex items-center justify-center">
                  <div class="h-5 w-5 sm:h-6 sm:w-6">
                    <img
                      class="h-full w-full"
                      src="/assets/icon/emoji/openmoji_man-playing-handball.svg"
                      alt=""
                    />
                  </div>
                  <p class="leading-[22.4px] ml-1 mt-[2px]">Hobbies</p>
                </div>
              </button>
              <button
                type="button"
                class="flex-grow h-[33px] px-3 w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                <div class="flex items-center justify-center">
                  <div class="h-5 w-5 sm:h-6 sm:w-6">
                    <img
                      class="h-full w-full"
                      src="/assets/icon/emoji/fluent_games-32-filled.svg"
                      alt=""
                    />
                  </div>
                  <p class="leading-[22.4px] ml-1 mt-[2px]">Games</p>
                </div>
              </button>
              <button
                type="button"
                class="flex-grow h-[33px] px-3 w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                <div class="flex items-center justify-center">
                  <div class="h-5 w-5 sm:h-6 sm:w-6">
                    <img
                      class="h-full w-full"
                      src="/assets/icon/emoji/office-worker.svg"
                      alt=""
                    />
                  </div>
                  <p class="leading-[22.4px] ml-1 mt-[2px]">Passion</p>
                </div>
              </button>
              <button
                type="button"
                class="flex-grow h-[33px] px-3 w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                <div class="flex items-center justify-center">
                  <div class="h-5 w-5 sm:h-6 sm:w-6">
                    <img
                      class="h-full w-full"
                      src="/assets/icon/emoji/twemoji_church.svg"
                      alt=""
                    />
                  </div>
                  <p class="leading-[22.4px] ml-1 mt-[2px]">Religion</p>
                </div>
              </button>
              <button
                type="button"
                class="flex-grow h-[33px] px-3 w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                <div class="flex items-center justify-center">
                  <div class="h-5 w-5 sm:h-6 sm:w-6">
                    <img
                      class="h-full w-full"
                      src="/assets/icon/emoji/noto_man-dancing.svg"
                      alt=""
                    />
                  </div>
                  <p class="leading-[22.4px] ml-1 mt-[2px]">Dancing</p>
                </div>
              </button>
              <button
                type="button"
                class="flex-grow h-[33px] px-3 w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                <div class="flex items-center justify-center">
                  <div class="h-5 w-5 sm:h-6 sm:w-6">
                    <img
                      class="h-full w-full"
                      src="/assets/icon/emoji/flat_pen.svg"
                      alt=""
                    />
                  </div>
                  <p class="leading-[22.4px] ml-1 mt-[2px]">Writing</p>
                </div>
              </button>

              <button
                type="button"
                class="flex-grow h-[33px] px-3 w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                <div class="flex items-center justify-center">
                  <div class="h-5 w-5 sm:h-6 sm:w-6">
                    <img
                      class="h-full w-full"
                      src="/assets/icon/emoji/noto_palm-tree.svg"
                      alt=""
                    />
                  </div>
                  <p class="leading-[22.4px] ml-1 mt-[2px]">Nature</p>
                </div>
              </button>
              <button
                type="button"
                class="flex-grow h-[33px] px-3 w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                <div class="flex items-center justify-center">
                  <div class="h-5 w-5 sm:h-6 sm:w-6">
                    <img
                      class="h-full w-full"
                      src="/assets/icon/emoji/noto_dress.svg"
                      alt=""
                    />
                  </div>
                  <p class="leading-[22.4px] ml-1 mt-[2px]">Fashion</p>
                </div>
              </button>

              <button
                type="button"
                class="flex-grow h-[33px] px-3 w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                <div class="flex items-center justify-center">
                  <div class="h-5 w-5 sm:h-6 sm:w-6">
                    <img
                      class="h-full w-full"
                      src="/assets/icon/emoji/twemoji_airplane.svg"
                      alt=""
                    />
                  </div>
                  <p class="leading-[22.4px] ml-1 mt-[2px]">Travel</p>
                </div>
              </button>
              <button
                type="button"
                class="flex-grow h-[33px] px-3 w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                <div class="flex items-center justify-center">
                  <div class="h-5 w-5 sm:h-6 sm:w-6">
                    <img
                      class="h-full w-full"
                      src="/assets/icon/emoji/openmoji_artist.svg"
                      alt=""
                    />
                  </div>
                  <p class="leading-[22.4px] ml-1 mt-[2px]">Arts and Culture</p>
                </div>
              </button>

              <button
                type="button"
                class="flex-grow h-[33px] px-3 w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                <div class="flex items-center justify-center">
                  <div class="h-5 w-5 sm:h-6 sm:w-6">
                    <img
                      class="h-full w-full"
                      src="/assets/icon/emoji/twemoji_airplane.svg"
                      alt=""
                    />
                  </div>
                  <p class="leading-[22.4px] ml-1 mt-[2px]">Technology</p>
                </div>
              </button>
              <button
                type="button"
                class="h-[33px] px-3 w-max border text-custom2 border-custom1 text-xs font-normal text-center rounded-[40px] sm:text-base size1:px-0 size1:w-full size1:h-[46px]"
              >
                <div class="flex items-center justify-center">
                  <div class="h-5 w-5 sm:h-6 sm:w-6">
                    <img
                      class="h-full w-full"
                      src="/assets/icon/emoji/fluent-emoji_health-worker.svg"
                      alt=""
                    />
                  </div>
                  <p class="leading-[22.4px] ml-1 mt-[2px]">
                    Health and wellbeing
                  </p>
                </div>
              </button>
            </div>
          </div>

          <button
            id="to-about-two"
            class="outline-none shadow-combined h-[41px] mt-4 rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm sm:h-[44px] sm:mt-10 transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg"
          >
            Continue
          </button>
        </div>
      </form>`;
}
