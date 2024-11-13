      <!-- CREATE A COMMUNITY DIALOG START -->
      <div
        id="create-com-back-drop"
        class="inset-y-0 hidden z-40 h-screen w-screen bg-transparent sm:bg-custom12 fixed top-0 left-0"
      ></div>
      <div
        id="create-com-dia"
        class="dialog z-50 hidden transition-all duration-1000 ease-in-out sm:m-auto bg-primary px-mpd w-full h-full sm:shadow-custom1 sm:h-max sm:max-w-[764px] rounded-[24px] pt-7 sm:backdrop-blur-40 sm:bg-custom15 sm:border-custom1 sm:border-[0.5px] sm:p-8"
      >
        <div class="animatedDialog">
          <div class="flex items-center justify-between mb-6 sm:mb-4">
            <p class="text-xl text-secondary font-medium sm:text-2xl">
              Create a community
            </p>
            <button
              id="close-create-com-dia"
              class="h-6 w-6 flex items-center justify-center"
            >
              <img
                class="h-[14px] w-[14px]"
                src="assets/icon/close.svg"
                alt=""
              />
            </button>
          </div>

          <!-- PROGRESS INDICATOR -->
          <div>
            <p
              class="text-secondary font-normal text-xs mb-2 sm:mb-1 sm:text-sm"
              id="progress-text"
            >
              Step 1 of 5
            </p>
            <progress
              style="transition: width 5s ease"
              id="progress-bar"
              class="w-full h-[3px] rounded-[40px] bg-custom6"
              max="100"
              value="20"
            ></progress>
          </div>

          <!-- Steps -->
          <div id="step-1" class="animate-fade-in">
            <div class="relative">
              <input
                required
                id="comm-name"
                class="w-full h-[45px] mt-0 text-xs bg-transparent text-custom2 px-0 border-0 border-b border-custom2 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[25px]"
              />
              <label
                for="comm-name"
                class="absolute bottom-[13px] left-0 font-normal text-custom2 text-xs pointer-events-none transition-all duration-150 sm:text-sm"
              >
                Community name
              </label>
            </div>
            <div class="relative">
              <input
                required
                id="desc"
                class="w-full h-[45px] mt-4 text-xs bg-transparent text-custom2 px-0 border-0 border-b border-custom2 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[25px]"
              />
              <label
                for="desc"
                class="absolute bottom-[13px] left-0 font-normal text-custom2 text-xs pointer-events-none transition-all duration-150 sm:text-sm"
              >
                Description
              </label>
            </div>
            <div class="border-t border-custom6 mt-4 pt-4 sm:mt-10 sm:pt-10">
              <p class="text-secondary font-medium text-base sm:text-xl">
                Set viewing options
              </p>
              <label
                class="flex justify-between cursor-pointer mt-3 mb-3 sm:mt-4"
              >
                <input type="radio" checked name="option" class="hidden peer" />
                <div>
                  <p class="text-secondary font-medium mb-[2px] text-base">
                    Public
                  </p>
                  <p class="text-xs font-normal text-custom4 truncate">
                    Anyone can view and contribute
                  </p>
                </div>
                <div
                  class="h-7 w-7 mt-[1.5px] rounded-full bg-[url('assets/icon/radio-inactive.svg')] bg-top bg-no-repeat peer-checked:bg-[url('assets/icon/radio-active.svg')] peer-checked:border-transparent"
                ></div>
              </label>

              <label
                class="flex justify-between cursor-pointer mt-3 mb-3 sm:mt-4"
              >
                <input type="radio" name="option" class="hidden peer" />
                <div>
                  <p class="text-secondary font-medium mb-[2px] text-base">
                    Restricted
                  </p>
                  <p class="text-xs font-normal text-custom4 truncate">
                    Anyone can view, but only approved users can contribute
                  </p>
                </div>
                <div
                  class="h-7 w-7 mt-[1.5px] rounded-full bg-[url('assets/icon/radio-inactive.svg')] bg-top bg-no-repeat peer-checked:bg-[url('assets/icon/radio-active.svg')] peer-checked:border-transparent"
                ></div>
              </label>
            </div>
          </div>
          <div id="step-2" class="hidden animate-fade-in mt-5">
            <p class="text-custom2 font-medium text-base sm:text-xl">
              Banner Picture
            </p>
            <div
              class="relative w-full rounded-xl mt-3 border border-custom6 h-[123px] sm:h-[128px]"
            >
              <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
              >
                <button
                  id="change-photo-btn"
                  onclick="imagePreview('cover-photo-preview','cover-photo-input')"
                  class="flex flex-col items-center gap-y-[2px] w-full justify-center"
                >
                  <div class="h-10 w-10">
                    <img
                      class="h-full w-full"
                      src="assets/images/upload-picture.svg"
                    />
                  </div>
                  <p
                    class="text-xs text-secondary font-normal truncate sm:text-base"
                  >
                    Click to upload image
                  </p>
                </button>
                <input
                  type="file"
                  id="cover-photo-input"
                  accept="image/*"
                  style="display: none"
                />
              </div>
              <div
                class="h-full w-full overflow-hidden rounded-xl border border-custom6"
              >
                <img
                  id="cover-photo-preview"
                  class="object-cover h-full w-full"
                  src=""
                  alt="Cover photo"
                />
              </div>
            </div>
          </div>
          <div id="step-3" class="hidden animate-fade-in sm:mt-6">
            <p class="text-secondary font-medium text-base sm:text-xl">
              Select Platforms
            </p>
            <div class="mt-3 h-[34px] flex gap-x-3 sm:h-[38px]">
              <button
                class="text-custom9 h-full flex items-center justify-center px-3 bg-secondary rounded-[40px] transition-colors duration-500 ease-in-out space-x-2 sm:space-x-1"
                onclick="toggleClasses(this)"
              >
                <div class="h-[18px] w-[25px]">
                  <img
                    class="h-full w-full"
                    src="assets/icon/socials/youtube.svg"
                    alt=""
                  />
                </div>
                <p class="font-normal text-sm mt-[1px] sm:text-base">YouTube</p>
              </button>

              <button
                class="text-custom2 h-full flex items-center justify-center px-3 border border-custom1 rounded-[40px] transition-colors duration-500 ease-in-out space-x-2 sm:space-x-1"
                onclick="toggleClasses(this)"
              >
                <div class="h-[18px] w-[18px]">
                  <img
                    class="h-full w-full"
                    src="assets/icon/socials/instagram.svg"
                    alt=""
                  />
                </div>
                <p class="font-normal text-sm mt-[1px] sm:text-base">
                  Instagram
                </p>
              </button>

              <button
                class="text-custom2 h-full flex items-center justify-center px-3 border border-custom1 rounded-[40px] transition-colors duration-500 ease-in-out space-x-2 sm:space-x-1"
                onclick="toggleClasses(this)"
              >
                <div class="h-[18px] w-4">
                  <img
                    class="h-full w-full"
                    src="assets/icon/socials/tiktok.svg"
                    alt=""
                  />
                </div>
                <p class="font-normal text-sm mt-[1px] sm:text-base">Tiktok</p>
              </button>
            </div>

            <div class="mt-6 sm:border-t border-custom6 sm:mt-3 sm:pt-3">
              <div class="flex items-center justify-between">
                <p class="text-secondary font-medium text-base sm:text-xl">
                  Select tags
                </p>
                <p class="text-secondary font-medium text-sm sm:text-base">
                  <span id="tag-count">0</span> tags selected
                </p>
              </div>
              <div class="flex flex-wrap gap-3 mt-3">
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Design
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Technology
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Programming
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Product
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Digital Arts
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Education
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Entertainments
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Real Estate
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Finance
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Crypto
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  investments
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Education
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Career
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Education
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Fashion
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Food
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Games
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Sports
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Education
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Movies
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Music
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Travel
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Culture
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Stories
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  News
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Education
                </button>
                <button
                  class="tags flex-shrink-0 font-normal text-custom2 rounded-[40px] border border-custom1 transition-colors duration-500 ease-in-out px-[10px] h-[33px] text-xs sm:text-base sm:px-3 sm:h-[38px]"
                >
                  Education
                </button>
              </div>
            </div>
          </div>
          <div id="step-4" class="hidden animate-fade-in mt-1 sm:mt-6">
            <p class="text-secondary font-medium text-sm mb-4 sm:text-xl">
              Set community rules
            </p>
            <p class="text-secondary font-medium text-xs sm:text-base">
              Example rules
            </p>
            <div class="flex flex-wrap gap-3 mt-2">
              <div
                class="flex items-center justify-center border border-custom6 rounded-[32px] text-custom2 font-medium px-3 h-[33px] text-xs sm:text-base sm:h-[38px]"
              >
                Be kind and courteous
              </div>
              <div
                class="flex items-center justify-center border border-custom6 rounded-[32px] text-custom2 font-medium px-3 h-[33px] text-xs sm:text-base sm:h-[38px]"
              >
                No hate speech or bullying
              </div>
              <div
                class="flex items-center justify-center border border-custom6 rounded-[32px] text-custom2 font-medium px-3 h-[33px] text-xs sm:text-base sm:h-[38px]"
              >
                No promotions or spam
              </div>
            </div>
            <div class="relative">
              <input
                required
                id="tle"
                class="w-full h-[45px] mt-5 text-xs bg-transparent text-custom2 px-0 border-0 border-b border-custom2 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[25px]"
              />
              <label
                for="tle"
                class="absolute bottom-[13px] left-0 font-normal text-custom2 text-xs pointer-events-none transition-all duration-150 sm:text-sm"
              >
                Title
              </label>
            </div>
            <div class="relative">
              <input
                required
                id="descri"
                class="w-full h-[45px] mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b border-custom2 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[25px]"
              />
              <label
                for="descri"
                class="absolute bottom-[13px] left-0 font-normal text-custom2 text-xs pointer-events-none transition-all duration-150 sm:text-sm"
              >
                Description
              </label>
            </div>
            <button class="flex items-center mt-5 gap-x-2">
              <div class="h-[9px] w-[9px]">
                <img
                  class="w-full h-full"
                  src="assets/icon/home/add.svg"
                  alt=""
                />
              </div>
              <p class="font-medium text-white mt-[2px] text-xs">
                Add another rule
              </p>
            </button>

            <div class="border-t border-custom6 mt-5">
              <div class="relative">
                <input
                  required
                  id="dmop"
                  class="w-full h-[45px] mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b border-custom2 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[25px]"
                />
                <label
                  for="dmop"
                  class="absolute bottom-[13px] left-0 font-normal text-custom2 text-xs pointer-events-none transition-all duration-150 sm:text-sm"
                >
                  Daily number of posts
                </label>
              </div>
            </div>
          </div>
          <div id="step-5" class="hidden animate-fade-in mt-1 sm:mt-6">
            <p class="text-secondary font-medium text-xs sm:text-xl">
              What is the purpose of this community?
            </p>
            <div class="flex flex-wrap gap-3 mt-4">
              <button
                class="flex items-center justify-center border border-custom6 rounded-[32px] text-custom2 font-medium px-3 h-[33px] text-xs sm:text-base sm:h-[38px]"
              >
                Meet new users
              </button>
              <button
                class="flex items-center justify-center border border-custom6 rounded-[32px] text-custom2 font-medium px-3 h-[33px] text-xs sm:text-base sm:h-[38px]"
              >
                Grow youtube channel
              </button>
              <button
                class="flex items-center justify-center border border-custom6 rounded-[32px] text-custom2 font-medium px-3 h-[33px] text-xs sm:text-base sm:h-[38px]"
              >
                Help users grow
              </button>
              <button
                class="flex items-center justify-center border border-custom6 rounded-[32px] text-custom2 font-medium px-3 h-[33px] text-xs sm:text-base sm:h-[38px]"
              >
                Boost users content
              </button>
              <button
                class="flex items-center justify-center border border-custom6 rounded-[32px] text-custom2 font-medium px-3 h-[33px] text-xs sm:text-base sm:h-[38px]"
              >
                Digital Activism
              </button>
              <button
                class="flex items-center justify-center border border-custom6 rounded-[32px] text-custom2 font-medium px-3 h-[33px] text-xs sm:text-base sm:h-[38px]"
              >
                To learn about a specific niche
              </button>
              <button
                class="flex items-center justify-center border border-custom6 rounded-[32px] text-custom2 font-medium px-3 h-[33px] text-xs sm:text-base sm:h-[38px]"
              >
                Increase engagement
              </button>
              <button
                class="flex items-center justify-center border border-custom6 rounded-[32px] text-custom2 font-medium px-3 h-[33px] text-xs sm:text-base sm:h-[38px]"
              >
                Follow users
              </button>
            </div>
          </div>

          <div class="flex gap-x-4 mt-6 h-[41px] sm:h-11 sm:mt-10">
            <button
              id="cc-bk-btn"
              class="h-full w-full text-secondary border border-custom6 rounded-[40px] font-medium text-xs sm:text-sm hidden"
            >
              Back
            </button>
            <button
              id="cc-nxt-btn"
              class="h-full w-full text-secondary bg-custom3 rounded-[40px] font-medium text-xs sm:text-sm"
            >
              Next
            </button>
          </div>
        </div>
      </div>
      <!-- CREATE A COMMUNITY DIALOG END -->

      <!-- CREATE COMMUNITY SUCCESS DIALOG START -->
      <div
        id="create-com-dia-succ"
        class="dialog z-50 hidden m-auto transition-all w-full duration-1000 px-4 ease-in-out sm:w-max"
      >
        <div
          class="max-w-[564px] px-4 rounded-[24px] py-8 m-auto backdrop-blur-40 bg-custom15 border-custom1 border-[0.5px] sm:p-8 sm:shadow-custom1"
        >
          <div class="mx-auto mb-5 sm:mb-6 w-[120px] h-[120px] sm:h-[334px] sm:w-[334px]">
            <img
              class="w-full h-full"
              src="assets/images/community-created-success.svg"
            />
          </div>
          <p
            class="text-secondary font-medium text-center mb-5 leading-[28px] text-xl sm:leading-[39.2px] sm:text-[28px] sm:mb-6"
          >
            Your community was created successfully!
          </p>
          <a
            href="#"
            class="w-full flex items-center justify-center text-secondary bg-custom3 rounded-[40px] font-medium text-xs h-11 sm:text-sm"
          >
            Go to community
          </a>
          <a
            href="#"
            class="w-full flex items-center justify-center mt-4 border border-custom6 text-white rounded-[40px] font-medium text-xs h-11 sm:border-none sm:mt-0 sm:text-sm"
          >
            Homepage
          </a>
        </div>
      </div>
      <!-- CREATE COMMUNITY SUCCESS DIALOG END -->

      <!-- SIDEBAR START -->
      <div
        id="back-drop"
        class="hidden inset-y-0 z-20 h-screen w-screen backdrop-blur-md bg-custom10 top-0 left-0"
      ></div>