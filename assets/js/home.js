import { post } from "../../components/dashboard/home/posts.js";
import { sectionThree } from "../../components/dashboard/home/section-three.js";
import { bottomTab } from "../../components/dashboard/ui/bottom-tab.js";
import { sideBar } from "../../components/dashboard/ui/side-bar.js";


const content = `
  ${sideBar()}
  ${post()}
  ${sectionThree()}
  ${bottomTab()}
`;

document.getElementById("content").innerHTML = content;

document.addEventListener("DOMContentLoaded", () => {
  const hbBtn = document.getElementById("hb-btn");
  const sideBar = document.getElementById("side-bar");
  const backDrop = document.getElementById("back-drop");

  hbBtn.addEventListener("click", (event) => {
    sideBar.classList.add("translate-x-0");
    sideBar.classList.remove("-translate-x-[260px]");
    backDrop.classList.add("fixed");
    backDrop.classList.remove("hidden");
  });

  backDrop.addEventListener("click", (event) => {
    sideBar.classList.remove("translate-x-0");
    sideBar.classList.add("-translate-x-[260px]");
    backDrop.classList.remove("fixed");
    backDrop.classList.add("hidden");
  });
});
