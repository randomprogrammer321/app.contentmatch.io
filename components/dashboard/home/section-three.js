import { communitiesToJoin } from "./communities-to-join.js";
import { getPremiumCard } from "./get-premium-card.js";
import { peopleToFollow } from "./people-to-follow.js";
import { profileCard } from "./profile-card.js";

export function sectionThree() {
  return `<section class="hidden size5:block w-[360px] overflow-y-auto border-l border-custom6">
  ${profileCard()}
  <div class="ml-5 max-w-[250px] pt-3 size3:ml-10">
    ${getPremiumCard()}
    <div class="h-[100px] mt-5 w-full bg-custom6 rounded uppercase flex items-center justify-center text-white">
      ADS
    </div>
    ${peopleToFollow()}
    ${communitiesToJoin()}
  </div>
</section>`;
}


