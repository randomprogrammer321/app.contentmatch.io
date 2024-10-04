export function topTab() {
  return `
  <div class="w-full h-[48px] px-mpd flex items-end pb-2 mb-4 border-b border-custom6 sm:px-10">
    <button id="forYouBtn" class="text-secondary border-b-2 border-custom2 px-2 text-xs h-[25px] sm:text-base">
      For you
    </button>
    <button id="followingBtn" class="text-custom2 font-normal px-2 mx-3 text-xs h-[25px] sm:text-base">
      Following
    </button>
    <button id="communitiesBtn" class="text-custom2 font-normal px-2 text-xs h-[25px] sm:text-base">
      Communities
    </button>
  </div>
  `;
}

