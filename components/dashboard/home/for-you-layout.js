import { getPremiumCard } from "./get-premium-card.js";
import { postCard } from "./post-card.js";


export function forYouLayout() {
  return `<div id="contentForYou" class="content transition-opacity duration-1000 flex flex-col flex-1 pb-32 overflow-y-auto px-[25px]">
<div class="block size5:hidden">  ${getPremiumCard()} </div>
${postCard()}
${postCard()}
 </div>`;
}
