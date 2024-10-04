export function postCard() {
  return `<div class="w-full mb-5 border-b border-custom6">
  <div class="flex justify-between w-full mb-2 sm:mb-1">
    <div class="flex items-center">
      <div class="h-8 w-8 rounded-full md:h-10 md:w-10">
        <img
          class="w-full h-full"
          src="/assets/images/home/pp-placeholder.png"
        />
      </div>
      <p class="text-xs font-medium text-secondary pl-1 pr-3 sm:text-base">
        Thomas Andrews
      </p>
      <button class="text-xs font-bold text-secondary sm:text-sm">
        Follow
      </button>
    </div>
<div class="relative group">
  <button class="menuButton h-5 w-5 flex items-center justify-center mt-2 relative">
    <img class="h-full w-full" src="/assets/icon/home/v-menu.svg" alt="Menu" />
  </button>
  <div class="tooltip absolute right-0 top-7 z-10 mt-2 opacity-0 invisible font-normal text-base transform scale-95 transition-all duration-300 ease-out bg-custom9 text-custom2 px-3 py-2 rounded-xl border border-custom6 shadow-combined">
    <div class="cursor-pointer flex items-center h-[46px] truncate border-b border-custom6">
      View Thomas's profile
    </div>
    <div class="cursor-pointer flex items-center h-[46px] truncate">
      Report video
    </div>
  </div>
</div>
  </div>
  <p class="text-xs leading-[16.8px] text-secondary font-normal sm:leading-[22.4px] sm:text-base">
    As the final buzzer sounds, echoing through the neighborhood, the court
    transforms into a stage where the spirit of competition and camaraderie
    thrives.
  </p>
  <div class="relative w-full mt-3 h-[311px] sm:h-[579px] sm:mt-4">
    <div
      class="absolute top-2 left-2 flex bg-custom10 items-center h-[22px] px-2 backdrop-blur-md rounded-[20px] sm:top-4 sm:left-4 sm:px-3 sm:h-9"
    >
      <div class="w-5 h-[14px] sm:w-7 sm:h-5">
        <img class="w-full h-full" src="/assets/icon/socials/youtube.svg" />
      </div>
      <p class="text-[10px] text-secondary font-medium pl-1 sm:text-sm">
        Uploaded from YouTube
      </p>
    </div>
    <div
      class="absolute -bottom-2 right-0 h-12 w-12 rounded-full bg-secondary flex items-center justify-center sm:hidden"
    >
      <img class="h-3 w-3" src="/assets/icon/home/add-c.svg" />
    </div>
    <div class="h-full w-full overflow-hidden rounded-lg">
      <img
        class="object-cover h-full w-full"
        src="/assets/images/home/video-placeholder.png"
      />
    </div>
  </div>

  <div
    class="flex items-center justify-between gap-1 mt-3 mb-3 sm:mt-[22px] sm:mb-[26px]"
  >
    <div class="flex items-center">
      <div class="h-[28px] hidden sm:flex">
        <div
          class="h-full w-[28px] rounded-full border border-custom4 overflow-hidden"
        >
          <img
            class="h-full w-full object-cover"
            src="/assets/images/home/placeholder-1.png"
            alt=""
          />
        </div>
        <div
          class="h-full w-[28px] -ml-[10px] rounded-full border border-custom4 overflow-hidden"
        >
          <img
            class="h-full w-full object-cover"
            src="/assets/images/home/placeholder-2.png"
            alt=""
          />
        </div>
        <div
          class="h-full w-[28px] -ml-[10px] rounded-full border border-custom4 overflow-hidden"
        >
          <img
            class="h-full w-full object-cover"
            src="/assets/images/home/placeholder-3.png"
            alt=""
          />
        </div>
        <div
          class="h-full w-[28px] -ml-[10px] rounded-full border border-custom4 overflow-hidden"
        >
          <img
            class="h-full w-full object-cover"
            src="/assets/images/home/placeholder-3.png"
            alt=""
          />
        </div>
        <div
          class="h-full w-[28px] -ml-[10px] rounded-full border border-custom4 overflow-hidden"
        >
          <img
            class="h-full w-full object-cover"
            src="/assets/images/home/placeholder-4.png"
            alt=""
          />
        </div>
        <div
          class="h-full w-[28px] -ml-[10px] rounded-full border border-custom4 overflow-hidden"
        >
          <img
            class="h-full w-full object-cover"
            src="/assets/images/home/placeholder-5.png"
            alt=""
          />
        </div>
      </div>
      <p class="font-bold text-secondary text-[10px] ml-2 mr-1 sm:text-base">
        12.2k
      </p>
      <p class="text-[10px] font-normal text-custom4 sm:text-base">likes</p>
      <div
        class="h-1 w-1 bg-custom1 rounded-full mx-1 sm:mx-2 sm:h-[6px] sm:w-[6px]"
      ></div>
      <p
        class="font-bold text-secondary text-[10px] ml-[1px] mr-1 sm:ml-2 sm:text-base"
      >
        12M
      </p>
      <p class="text-[10px] font-normal text-custom4 sm:text-base">Feedbacks</p>
    </div>

    <div class="flex items-center">
      <button
        class="h-[30px] w-[30px] rounded-full border border-custom4 flex items-center justify-center sm:h-10 sm:w-10"
      >
        <img
          class="h-[18px] w-[18px] sm:h-6 sm:w-6"
          src="/assets/icon/like.svg"
          alt=""
        />
      </button>
      <button
        class="h-[30px] w-[30px] mx-3 rounded-full border border-custom4 flex items-center justify-center sm:h-10 sm:w-10"
      >
        <img
          class="hh-[18px] w-[18px] sm:h-6 sm:w-6"
          src="/assets/icon/interactive-space.svg"
          alt=""
        />
      </button>
      <button
        class="h-[33px] bg-secondary px-3 rounded-[32px] flex items-center text-xs truncate text-custom9 font-medium pt-[1px]"
      >
        Send Feedback
      </button>
    </div>
  </div>
</div>
`;
}

document.addEventListener("DOMContentLoaded", () => {
  const menuButtons = document.querySelectorAll('.menuButton');
  const tooltips = document.querySelectorAll('.tooltip');

  menuButtons.forEach((button, index) => {
    const tooltip = tooltips[index];

    button.addEventListener('mouseenter', () => {
      tooltip.classList.remove('opacity-0', 'invisible', 'scale-95');
      tooltip.classList.add('opacity-100', 'visible', 'scale-100');
    });

    tooltip.addEventListener('mouseenter', () => {
      tooltip.classList.remove('opacity-0', 'invisible', 'scale-95');
      tooltip.classList.add('opacity-100', 'visible', 'scale-100');
    });

    button.addEventListener('mouseleave', () => {
      setTimeout(() => {
        if (!tooltip.matches(':hover')) {
          tooltip.classList.remove('opacity-100', 'visible', 'scale-100');
          tooltip.classList.add('opacity-0', 'invisible', 'scale-95');
        }
      }, 200);
    });

    tooltip.addEventListener('mouseleave', () => {
      tooltip.classList.remove('opacity-100', 'visible', 'scale-100');
      tooltip.classList.add('opacity-0', 'invisible', 'scale-95');
    });
  });
})