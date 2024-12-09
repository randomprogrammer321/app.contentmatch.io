export function sectionTwo() {
  return `
  <section class="flex-1 overflow-y-auto px-mpd size1:pr-10">
      <div class="max-w-[650px] size1:max-w-[500px] flex flex-col flex-1 h-full m-auto transition-transform duration-300">
          <div class="flex justify-between items-center mt-[30px] sm:mt-[54.5px]">
              <div class="h-[32px] w-[32px] sm:h-[55px] sm:w-[55px]">
                  <img class="flex size1:hidden h-full w-full" src="/assets/logo/logo.svg" />
              </div>
              <a href="#" class="text-secondary font-normal text-[12px] leading-[22.4px] underline sm:text-[16px]">
                  About ContentMatch
              </a>
          </div>
          <div class="flex-1 flex flex-col justify-start mt-8 sm:mt-24 size1:justify-center size1:-mt-[10px]">
              <h3 class="text-secondary font-medium text-[16px] leading-[22.4px] mb-[28px] sm:mb-[30px] sm:leading-[39.2px] sm:text-[28px]">
                  Join Contentmatch today
              </h3>
              <button class="flex items-center pl-[20px] mb-[16px] h-[42px] w-full rounded-[40px] pr-[43px] border-[0.5px] border-custom1 transition-transform duration-300 hover:scale-105">
                  <div class="h-[18px] w-[18px]">
                      <img class="h-full w-full" src="/assets/icon/socials/google.svg" />
                  </div>
                  <p class="text-xs text-secondary font-normal leading-[22.4px] text-center flex-1 sm:text-[16px]">
                      Continue with Google
                  </p>
              </button>

              <button class="flex items-center pl-[20px] mb-[16px] h-[42px] w-full rounded-[40px] pr-[43px] border-[0.5px] border-custom1 transition-transform duration-300 hover:scale-105">
                  <div class="h-[18px] w-[18px]">
                      <img class="h-full w-full" src="/assets/icon/socials/apple.svg" />
                  </div>
                  <p class="text-xs text-secondary font-normal leading-[22.4px] text-center flex-1 sm:text-[16px]">
                      Continue with Apple
                  </p>
              </button>

              <button class="flex items-center pl-[20px] h-[42px] w-full rounded-[40px] pr-[43px] border-[0.5px] border-custom1 transition-transform duration-300 hover:scale-105">
                  <div class="h-[18px] w-[18px]">
                      <img class="h-full w-full" src="/assets/icon/socials/facebook.svg" />
                  </div>
                  <p class="text-xs text-secondary font-normal leading-[22.4px] text-center flex-1 sm:text-[16px]">
                      Continue with Facebook
                  </p>
              </button>

              <div class="flex items-center mt-[28px] sm:mt-[32px]">
                  <hr class="border-t-[0.3px] border-t-[#ADADAD] flex-1 opacity-20" />
                  <p class="px-[90px] text-custom2">or</p>
                  <hr class="border-t-[0.3px] border-t-[#ADADAD] flex-1 opacity-20" />
              </div>

              <form>
                  <input type="email" class="w-full h-[45px] text-[12px] bg-transparent text-custom2 px-0 border-0 border-b-[1px] border-custom1 placeholder-custom2 focus:outline-none focus:ring-0 sm:h-[48px] sm:text-[14px] focus:border-b-[2px] focus:border-custom3" placeholder="Enter email address" />
                  <button class="outline-none w-full shadow-combined h-[44px] mt-[16px] rounded-[40px] text-custom2 bg-custom3 transition-transform duration-300 hover:scale-105">
                      Continue
                  </button>
              </form>
              <p class="font-normal text-custom4 mt-[16px] text-xs sm:text-sm sm:mt-[17px]">
                  By continuing, you agree to Contentmatch's
                  <a href="" class="text-custom2 underline">Terms of Service</a> and
                  <a class="text-custom2 underline" href="">Privacy Policy.</a>
              </p>
              <p class="font-thin text-custom2 mt-[28px] mb-5 text-xs sm:mt-[32px] sm:text-sm">
                  Already have an account?
                  <a href="" class="text-white font-medium">Login</a>
              </p>
          </div>
      </div>
  </section>`;
}