import { getPremiumCard } from "./get-premium-card.js";
import { postCard } from "./post-card.js";

export function communitiesLayput() {
    return `<div id="contentCommunities" class="text-white content hidden opacity-0 transition-opacity duration-1000 flex-col flex-1 pb-32 overflow-y-auto px-[25px]">
<div class="block size5:hidden">  ${getPremiumCard()} </div>
<p class="text-custom4 font-medium text-xs mb-1 sm:text-base">From Youtubers Hub Community</p>
${postCard()}
${postCard()}
   </div>`;
  }