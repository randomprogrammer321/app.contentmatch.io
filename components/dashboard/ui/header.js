export function header() {
    return `<header
          class="w-full h-[52px] px-mpd flex items-center border-b border-custom6 sm:h-[84px] sm:px-10"
        >
        <button id="hb-btn" class="h-10 w-10 flex items-center justify-center mr-1 sm:h-14 sm:w-14 size4:hidden">
              <img class="w-full h-full" src="/assets/logo/logo.svg" />
        </button>
          <div class="h-9 w-full flex sm:h-[44px]">
            <div
              class="flex flex-1 items-center px-3 rounded-[32px] overflow-hidden bg-custom8 mx-5 sm:px-5 sm:mx-0"
            >
              <div class="flex items-center h-5 flex-1">
                <input
                  type="email"
                  class="w-full h-full mt-[1px] text-[12px] bg-transparent text-custom2 px-0 border-0 border-none placeholder-custom4 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-sm focus:border-b-[2px] focus:border-none"
                  placeholder="Search"
                />
                <div class="w-8 ml-3 h-5 sm:ml-2 border-l border-custom flex justify-end">
                  <img
                    class="h-full w-5"
                    src="/assets/icon/home/ep_search.svg"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="h-8 w-8 rounded-full block sm:hidden sm:h-10 sm:w-10">
              <img
                class="h-full w-full object-cover"
                src="/assets/images/home/pp-placeholder.png"
              />
            </div>
            <div
              class="hidden sm:flex h-10 w-10 mx-5 items-center justify-center rounded-full border border-custom1"
            >
              <img
                class="h-6 w-6"
                src="/assets/icon/nav/creator-match-active.svg"
                alt=""
              />
            </div>
            <button
              class="hidden sm:flex h-[38px] items-center px-4 bg-secondary rounded-[32px]"
            >
              <img src="/assets/icon/home/add-c.svg" alt="" />
              <p class="pl-[9px] text-base text-custom9 pt-[2px] font-medium">
                Create Post
              </p>
            </button>
          </div>
        </header>`;
  }
  

