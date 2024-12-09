document.addEventListener("DOMContentLoaded", () => {
    const subscribeDialog = document.getElementById("sub-dia");
    const subscribeBackDrop = document.getElementById("sub-dia-back-drop");
    const closeSubscribeDialog = document.getElementById("close-sub-dia");
    const subscribeButtons = document.querySelectorAll(".open-sub-dia");
    const subscribeButton = document.querySelector(".open-sub-dia");
  
    subscribeButtons.forEach((button) => {
      button.addEventListener("click", (event) => {
        console.log("acl");
        subscribeBackDrop.classList.remove("hidden");
        subscribeDialog.classList.remove("hidden");
  
        setTimeout(() => {
          subscribeBackDrop.classList.add("show-backdrop");
          subscribeDialog.classList.add("show-dialog");
        }, 300);
      });
    });
  
    subscribeButton.addEventListener("click", (event) => {
      console.log("acl");
      subscribeBackDrop.classList.remove("hidden");
      subscribeDialog.classList.remove("hidden");
  
      setTimeout(() => {
        subscribeBackDrop.classList.add("show-backdrop");
        subscribeDialog.classList.add("show-dialog");
      }, 300);
    });
  
    subscribeBackDrop.addEventListener("click", () => {
      subscribeBackDrop.classList.remove("show-backdrop");
      subscribeDialog.classList.remove("show-dialog");
  
      setTimeout(() => {
        subscribeBackDrop.classList.add("hidden");
        subscribeDialog.classList.add("hidden");
      }, 300);
    });
  
    closeSubscribeDialog.addEventListener("click", () => {
      subscribeBackDrop.classList.remove("show-backdrop");
      subscribeDialog.classList.remove("show-dialog");
  
      setTimeout(() => {
        subscribeBackDrop.classList.add("hidden");
        subscribeDialog.classList.add("hidden");
      }, 300);
    });
  });
  