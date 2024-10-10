document.addEventListener("DOMContentLoaded", () => {
    const hbBtn = document.getElementById("hb-btn");
    const sideBar = document.getElementById("side-bar");
    const backDrop = document.getElementById("back-drop");
  
    if(hbBtn) {
    hbBtn.addEventListener("click", (event) => {
      sideBar.classList.add("translate-x-0");
      sideBar.classList.remove("-translate-x-[260px]");
      backDrop.classList.add("fixed");
      backDrop.classList.remove("hidden");
    });
  }
    backDrop.addEventListener("click", (event) => {
      sideBar.classList.remove("translate-x-0");
      sideBar.classList.add("-translate-x-[260px]");
      backDrop.classList.remove("fixed");
      backDrop.classList.add("hidden");
    });
  });