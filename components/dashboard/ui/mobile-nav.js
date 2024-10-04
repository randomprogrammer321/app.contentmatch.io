import { profileCard } from "../home/profile-card.js";

export function mobileNav() {
  return `<nav class="flex flex-col w-full sm:hidden">
            ${profileCard()}
            <div class="border-b border-custom6 mx-5">
            <a href="#" class="flex items-center w0 h-10 text-base my-5">
              <div class="h-6 w-6">
                <img
                  class="h-full w-full"
                  src="/assets/icon/nav/profile.svg"
                />
              </div>
              <p
                class="font-normal pl-4 text-base text-custom7 leading-[22.4px]"
              >
                Profile
              </p>
            </a>
            <a href="#" class="flex items-center w0 h-10 text-base mb-5">
              <div class="h-6 w-6">
                <img
                  class="h-full w-full"
                  src="/assets/icon/nav/friends-inactive.svg"
                />
              </div>
              <p
                class="font-normal pl-4 text-base text-custom7 leading-[22.4px]"
              >
                Friends
              </p>
            </a>
            <a href="#" class="flex items-center w0 h-10 text-base mb-5">
              <div class="h-6 w-6">
                <img
                  class="h-full w-full"
                  src="/assets/logo/logo.svg"
                />
              </div>
              <p
                class="font-normal pl-4 text-base text-custom7 leading-[22.4px]"
              >
                Get Premium
              </p>
            </a>
            
            <a href="#" class="flex items-center w0 h-10 text-base mb-5">
              <div class="h-6 w-6">
                <img
                  class="h-full w-full"
                  src="/assets/icon/nav/settings-inactive.svg"
                />
              </div>
              <p
                class="font-normal pl-4 text-base text-custom7 leading-[22.4px]"
              >
                Settings
              </p>
            </a>
            <button class="flex items-center w0 h-10 text-base mb-5">
              <div class="h-6 w-6">
                <img
                  class="h-full w-full"
                  src="/assets/icon/nav/log-out.svg"
                />
              </div>
              <p
                class="font-normal pl-4 text-base text-custom7 leading-[22.4px]"
              >
                Log out
              </p>
            </button>
            </div>
          </nav>`;
}
