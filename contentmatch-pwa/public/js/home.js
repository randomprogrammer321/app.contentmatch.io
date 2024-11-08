import { engagementDialog } from "./home/engagementDialog.js";
import { notificationDialog } from "js/home/notification-dialog.js";
import { post } from "js/home/posts.js";
import { reportVideoDialog } from "js/home/report-video-dialog.js";
import { sectionThree } from "js/home/section-three.js";
import { welcomeDialog } from "./home/welcome-dialog.js";
import { bottomTab } from "js/ui/bottom-tab.js";
import { sideBar } from "js/ui/side-bar.js";


const content = `
${engagementDialog()}

${notificationDialog()}
${welcomeDialog()}
  ${sideBar()}
  ${post()}
  ${reportVideoDialog()}
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
