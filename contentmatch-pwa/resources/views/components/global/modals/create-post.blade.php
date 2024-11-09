<div
        id="create-post-backdrop-one"
        class="inset-y-0 hidden z-40 h-screen w-screen bg-custom12 fixed top-0 left-0"
      ></div>
      <div
        id="create-post-stp1-dialog"
        class="dialog z-50 hidden sm:m-auto bg-primary overflow-y-auto h-screen sm:h-max sm:bg-tranparent px-mpd w-full sm:max-w-[577px] sm:backdrop-blur-40 rounded-[24px] pt-7 sm:border-custom1 sm:border-[0.5px] sm:p-8"
      >
        <div class="w-full flex justify-between items-center">
          <p class="text-xl font-medium text-secondary sm:text-2xl">
            Create Post
          </p>
          <button
            class="close-create-post-dialog-step1 h-6 w-6 flex items-center justify-center"
          >
            <img
              class="h-4 h4 sm:h-3 sm:w-3"
              src="assets/icon/close.svg"
              alt=""
            />
          </button>
        </div>

        <div class="flex mt-5 sm:mt-6">
          <div
            class="rounded-full h-11 wp11 overflow-hidden sm:h-[50px] sm:w-[50px]"
          >
            <img
              class="h-full w-full object-cover"
              src="assets/images/home/placeholder-1.png"
            />
          </div>
          <div class="ml-2">
            <p class="font-bold text-sm text-white sm:text-base">
              Macdonald Anyanwu
            </p>
            <div class="relative mt-1">
              <button
                onclick="toggleDropdown()"
                class="flex items-center text-xs font-normal text-custom4 sm:text-sm"
                id="menu-button"
                aria-expanded="true"
                aria-haspopup="true"
              >
                Post to everyone
                <div class="h-6 w-6 flex items-center justify-center">
                  <img src="assets/icon/drop-down.svg" alt="" />
                </div>
              </button>

              <div
                id="dropdown"
                class="hidden origin-top-right absolute z-20 ml-10 -right-5 mt-2 rounded-xl shadow-lg py-4 px-3 backdrop-blur-xl ring-1 ring-black ring-opacity-5 transition-all duration-300 ease-in-out transform opacity-0 scale-95 sm:right-0"
                role="menu"
                aria-orientation="vertical"
                aria-labelledby="menu-button"
                tabindex="-1"
              >
                <div class="py-1 bg-transparent" role="none">
                  <div class="pb-3 mb-3 border-b border-custom6">
                    <p class="text-secondary font-medium text-sm">
                      Pick Your Audience
                    </p>
                    <label class="flex cursor-pointer mt-2 sm:mt-4">
                      <input
                        type="radio"
                        checked
                        name="option"
                        class="hidden peer"
                      />
                      <div
                        class="h-7 w-7 mt-[1.5px] rounded-full bg-[url('assets/icon/radio-inactive.svg')] bg-top bg-no-repeat peer-checked:bg-[url('assets/icon/radio-active.svg')] peer-checked:border-transparent"
                      ></div>
                      <div class="ml-1">
                        <p
                          class="text-secondary font-normal text-sm leading-[19.6px]"
                        >
                          Everyone
                        </p>
                        <p
                          class="text-xs font-normal text-custom4 leading-[16.8px] truncate"
                        >
                          Everyone can see this post
                        </p>
                      </div>
                    </label>
                  </div>

                  <p class="uppercase text-custom4 font-normal text-xs">
                    communities
                  </p>
                  <label
                    onclick="toggleDropdown()"
                    class="flex cursor-pointer mt-3"
                  >
                    <input type="radio" name="comm" class="hidden peer" />
                    <div
                      class="h-7 w-7 mt-[1.5px] rounded-full bg-[url('assets/icon/radio-inactive.svg')] bg-top bg-no-repeat peer-checked:bg-[url('assets/icon/radio-active.svg')]"
                    ></div>
                    <div class="ml-1">
                      <p
                        class="text-secondary font-normal text-sm leading-[19.6px]"
                      >
                        Newbie Artists
                      </p>
                      <p
                        class="text-xs font-normal text-custom4 leading-[16.8px]"
                      >
                        24k Members
                      </p>
                    </div>
                  </label>
                  <label
                    onclick="toggleDropdown()"
                    class="flex cursor-pointer mt-2"
                  >
                    <input type="radio" name="comm" class="hidden peer" />
                    <div
                      class="h-7 w-7 mt-[1.5px] rounded-full bg-[url('assets/icon/radio-inactive.svg')] bg-top bg-no-repeat peer-checked:bg-[url('assets/icon/radio-active.svg')] peer-checked:border-transparent"
                    ></div>
                    <div class="ml-1">
                      <p
                        class="text-secondary font-normal text-sm leading-[19.6px]"
                      >
                        Art Club
                      </p>
                      <p
                        class="text-xs font-normal text-custom4 leading-[16.8px]"
                      >
                        24k Members
                      </p>
                    </div>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="font-normal text-base text-secondary my-5">
          Which platform are you uploading from?
        </p>
        <button
          id="instagram-btn"
          class="social-btn text-custom2 flex items-center w-full h-11 mb-5 justify-center border border-custom1 rounded-[40px] transition-all duration-300 ease-in-out transform hover:translate-y-[-2px] hover:shadow-lg sm:h-[50px] sm:mb-6"
        >
          <div class="h-5 w-5 mr-1">
            <img src="assets/icon/socials/instagram.svg" alt="" />
          </div>
          <p class="font-normal text-sm sm:text-base">Instagram</p>
        </button>

        <button
          id="youtube-btn"
          class="social-btn text-custom2 flex items-center w-full h-11 mb-5 justify-center border border-custom1 rounded-[40px] transition-all duration-300 ease-in-out transform hover:translate-y-[-2px] hover:shadow-lg sm:h-[50px] sm:mb-6"
        >
          <div class="h-5 w-7 mr-1">
            <img src="assets/icon/socials/youtube.svg" alt="" />
          </div>
          <p class="font-normal text-sm sm:text-base">YouTube</p>
        </button>

        <button
          id="tiktok-btn"
          class="social-btn text-custom2 flex items-center w-full h-11 mb-2 justify-center border border-custom1 rounded-[40px] transition-all duration-300 ease-in-out transform hover:translate-y-[-2px] hover:shadow-lg sm:h-[50px]"
        >
          <div class="h-5 w-[18px] mr-1">
            <img src="assets/icon/socials/tiktok.svg" alt="" />
          </div>
          <p class="font-normal text-sm sm:text-base">Tiktok</p>
        </button>

        <div
          id="input-container"
          class="hidden opacity-0 transition-opacity duration-500 ease-in-out"
        >
          <div class="relative">
            <input
              required
              id="insta-url"
              class="w-full h-[45px] mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b-2 border-custom1 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[20px]"
            />
            <label
              for="insta-url"
              class="absolute bottom-[13px] left-0 text-custom2 text-xs pointer-events-none transition-all duration-150 sm:text-sm"
            >
              Enter video link
            </label>
            <img
              id="social-img"
              src=""
              class="absolute right-[29px] bottom-[13px]"
              alt=""
            />
          </div>
          <p class="text-normal text-sm text-custom2 mt-2">
            Only YouTube, Instagram, Tiktok links
          </p>
        </div>

        <button
          id="open-create-post-dialog-two"
          class="outline-none mt-4 shadow-combined h-[41px] rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm sm:h-[44px] transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg"
        >
          Proceed
        </button>
      </div>
      <!-- CREATE POST DIALOG ONE END -->

      <!-- CREATE POST DIALOG TWO START -->
      <div
        id="create-post-backdrop-two"
        class="inset-y-0 hidden z-40 h-screen w-screen bg-custom12 fixed top-0 left-0"
      ></div>
      <div
        id="create-post-stp2-dialog"
        class="dialog z-50 hidden sm:m-auto bg-primary overflow-y-auto sm:bg-tranparent px-mpd w-full h-full sm:max-w-[585px] sm:bg-custom5 sm:backdrop-blur-40 rounded-[24px] pt-7 sm:border-custom1 sm:border-[0.5px] sm:p-8"
      >
        <div class="w-full flex justify-between items-center">
          <p class="text-xl font-medium text-secondary sm:text-2xl">
            Create Post
          </p>
          <button
            class="close-create-post-dialog-step2 h-6 w-6 flex items-center justify-center"
          >
            <img
              class="h-4 h4 sm:h-3 sm:w-3"
              src="assets/icon/close.svg"
              alt=""
            />
          </button>
        </div>

        <div class="flex mt-5 sm:mt-6">
          <div
            class="rounded-full h-11 wp11 overflow-hidden sm:h-[50px] sm:w-[50px]"
          >
            <img
              class="h-full w-full object-cover"
              src="assets/images/home/placeholder-1.png"
            />
          </div>
          <div class="ml-2">
            <p class="font-bold text-sm text-white sm:text-base">
              Macdonald Anyanwu
            </p>
            <div class="relative mt-1">
              <button
                onclick="toggleDropdown2()"
                class="flex items-center text-xs font-normal text-custom4 sm:text-sm"
                id="menu-button"
                aria-expanded="true"
                aria-haspopup="true"
              >
                Post to everyone
                <div class="h-6 w-6 flex items-center justify-center">
                  <img src="assets/icon/drop-down.svg" alt="" />
                </div>
              </button>

              <div
                id="dropdown2"
                class="hidden origin-top-right absolute z-20 ml-10 -right-5 mt-2 rounded-xl shadow-lg py-4 px-3 backdrop-blur-xl ring-1 ring-black ring-opacity-5 transition-all duration-300 ease-in-out transform opacity-0 scale-95 sm:right-0"
                role="menu"
                aria-orientation="vertical"
                aria-labelledby="menu-button"
                tabindex="-1"
              >
                <div class="py-1 bg-transparent" role="none">
                  <div class="pb-3 mb-3 border-b border-custom6">
                    <p class="text-secondary font-medium text-sm">
                      Pick Your Audience
                    </p>
                    <label class="flex cursor-pointer mt-2 sm:mt-4">
                      <input
                        type="radio"
                        checked
                        name="option"
                        class="hidden peer"
                      />
                      <div
                        class="h-7 w-7 mt-[1.5px] rounded-full bg-[url('assets/icon/radio-inactive.svg')] bg-top bg-no-repeat peer-checked:bg-[url('assets/icon/radio-active.svg')] peer-checked:border-transparent"
                      ></div>
                      <div class="ml-1">
                        <p
                          class="text-secondary font-normal text-sm leading-[19.6px]"
                        >
                          Everyone
                        </p>
                        <p
                          class="text-xs font-normal text-custom4 leading-[16.8px] truncate"
                        >
                          Everyone can see this post
                        </p>
                      </div>
                    </label>
                  </div>

                  <p class="uppercase text-custom4 font-normal text-xs">
                    communities
                  </p>
                  <label
                    onclick="toggleDropdown2()"
                    class="flex cursor-pointer mt-3"
                  >
                    <input type="radio" name="comm" class="hidden peer" />
                    <div
                      class="h-7 w-7 mt-[1.5px] rounded-full bg-[url('assets/icon/radio-inactive.svg')] bg-top bg-no-repeat peer-checked:bg-[url('assets/icon/radio-active.svg')]"
                    ></div>
                    <div class="ml-1">
                      <p
                        class="text-secondary font-normal text-sm leading-[19.6px]"
                      >
                        Newbie Artists
                      </p>
                      <p
                        class="text-xs font-normal text-custom4 leading-[16.8px]"
                      >
                        24k Members
                      </p>
                    </div>
                  </label>
                  <label
                    onclick="toggleDropdown2()"
                    class="flex cursor-pointer mt-2"
                  >
                    <input type="radio" name="comm" class="hidden peer" />
                    <div
                      class="h-7 w-7 mt-[1.5px] rounded-full bg-[url('assets/icon/radio-inactive.svg')] bg-top bg-no-repeat peer-checked:bg-[url('assets/icon/radio-active.svg')] peer-checked:border-transparent"
                    ></div>
                    <div class="ml-1">
                      <p
                        class="text-secondary font-normal text-sm leading-[19.6px]"
                      >
                        Art Club
                      </p>
                      <p
                        class="text-xs font-normal text-custom4 leading-[16.8px]"
                      >
                        24k Members
                      </p>
                    </div>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="mt-4 relative w-full h-[128px] rounded-lg border-[0.2px] border-custom13 overflow-hidden sm:h-[180px]"
        >
          <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center h-[22px] w-9 bg-custom10 rounded-[20px] backdrop-blur-8 overflow-hidden sm:w-[58px] sm:h-10"
          >
            <img
              class="w-5 h-[14px] sm:w-[34px] sm:h-6"
              src="assets/icon/socials/youtube.svg"
              alt=""
            />
          </div>
          <img
            class="h-full w-full object-cover"
            src="assets/images/home/engagement.png"
            alt=""
          />
        </div>
        <div class="relative">
          <input
            required
            id="content-title"
            class="w-full h-[45px] mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b-2 border-custom1 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[40px]"
          />
          <label
            for="content-title"
            class="absolute bottom-[13px] left-0 text-custom2 text-xs pointer-events-none transition-all duration-150 sm:text-sm"
          >
            Content Title
          </label>
        </div>
        <div class="relative">
          <input
            required
            id=" do-you-to-tlk-abt"
            class="w-full h-[45px] mt-6 text-xs bg-transparent text-custom2 px-0 border-0 border-b-2 border-custom1 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-base focus:border-b-[2px] focus:border-custom3 sm:mt-[20px]"
          />
          <label
            for=" do-you-to-tlk-abt"
            class="absolute bottom-[13px] left-0 text-custom2 text-xs pointer-events-none transition-all duration-150 sm:text-sm"
          >
            What do you want to talk about?
          </label>
        </div>

        <div class="flex items-center justify-between h-11 mt-4 sm:h-14">
          <p class="font-normal text-xs text-secondary sm:text-sm">
            Allow Feedback
          </p>
          <label for="allow-feedbk" class="flex items-center cursor-pointer">
            <div class="relative">
              <input id="allow-feedbk" type="checkbox" class="sr-only peer" />
              <div
                class="block bg-gray-600 border border-custom4 peer-checked:bg-custom14 peer-checked:border-none w-[38px] h-6 rounded-full transition"
              ></div>
              <div
                class="dot absolute left-1 top-1 w-[16px] h-[16px] rounded-full bg-white border border-custom4 peer-checked:translate-x-[15px] peer-checked:none transition-transform"
              ></div>
            </div>
          </label>
        </div>
        <div class="flex items-center justify-between h-11 sm:h-14">
          <p class="font-normal text-xs text-secondary sm:text-sm">
            Allow Engagement
          </p>
          <label
            for="allow-engagement"
            class="flex items-center cursor-pointer"
          >
            <div class="relative">
              <input
                id="allow-engagement"
                type="checkbox"
                class="sr-only peer"
              />
              <div
                class="block bg-gray-600 border border-custom4 peer-checked:bg-custom14 peer-checked:border-none w-[38px] h-6 rounded-full transition"
              ></div>
              <div
                class="dot absolute left-1 top-1 w-[16px] h-[16px] rounded-full bg-white border border-custom4 peer-checked:translate-x-[15px] peer-checked:none transition-transform"
              ></div>
            </div>
          </label>
        </div>
        <div class="flex gap-4 h-11 mt-4 mb-10 sm:mb-0">
          <button
            class="close-create-post-dialog-step2 rounded-[40px] text-custom2 border border-custom6 w-full text-xs sm:text-sm h-full transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg"
          >
            Back
          </button>
          <button
            class="outline-none shadow-combined rounded-[40px] text-custom2 bg-custom3 w-full text-xs sm:text-sm h-full transition-transform duration-200 hover:translate-y-[-2px] hover:shadow-lg"
          >
            Post
          </button>
        </div>
      </div>
      <!-- CREATE POST DIALOG TWO END -->