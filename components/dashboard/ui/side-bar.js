import { backDrop } from "../../ui/back-drop.js";
import { activeCommunities } from "../home/active-communities.js";
import { desktopNav } from "./desktop-nav.js";
import { mobileNav } from "./mobile-nav.js";



export function sideBar() {
  return `${backDrop()} <section
      id="side-bar"
        class="fixed inset-y-0 z-40 h-screen top-0 left-0 bg-primary transform -translate-x-[260px] transition-transform duration-500 size4:translate-x-0 size4:static flex justify-end overflow-x-hidden overflow-y-auto border-r border-custom6 w-[260px] size3:w-[360px]"
      >
        <div class="w-full mr-0 mt-0 pl-0 sm:mt-[14px] sm:mr-3 sm:pl-2 sm:w-[230px] size3:mr-10">
          ${mobileNav()}
          ${desktopNav()}
          ${activeCommunities()}
          <a class="flex items-center text-custom4 font-normal h-9 text-base pl-5 sm:pl-0" href="#"
            >How to use ContentMatch</a
          >
          <a class="flex items-center text-custom4 font-normal text-base h-9 pl-5 sm:pl-0" href="#">
            Learn how to place ADs
          </a>
          <a class="flex items-center text-custom4 font-normal text-base h-9 pl-5 sm:pl-0" href="#">
            Contact Support
          </a>
          <div class="h-20"></div>
        </div>
      </section>`;
}
