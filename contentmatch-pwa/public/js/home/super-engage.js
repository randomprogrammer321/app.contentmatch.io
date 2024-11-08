document.addEventListener("DOMContentLoaded", () => {
    const isMobile = window.innerWidth <= 649;
    const feedBackBtn = document.querySelectorAll(".sup-eng-btn");
    const mobileDrawup = document.getElementById("if-mobile-drawup2");
    const backDrop = document.getElementById("back-drop-7");
    const feedBkDialog = document.querySelector(".sup-eng-dialog");
  
    const cancelEngage = document.getElementById("close-sup-eng-dialog");
  
    if (isMobile) {
      mobileDrawup.classList.add("mobile-drawup");
      mobileDrawup.classList.remove("overlay-animate");
      mobileDrawup.classList.remove("dialog");
      backDrop.classList.add("hidden");
      mobileDrawup.classList.remove("hidden");
  
      let currentOverlay = null;
      let startY = null;
  
      cancelEngage.addEventListener("click", (e) => {
        backDrop.classList.add("hidden");
        feedBkDialog.classList.remove("show");
      });
  
      feedBackBtn.forEach((button) => {
        button.addEventListener("click", (event) => {
          console.log("clikce");
  
          backDrop.classList.remove("hidden");
          mobileDrawup.classList.remove("hidden");
          mobileDrawup.classList.add("show");
  
          backDrop.classList.add("show");
  
          if (mobileDrawup) {
            mobileDrawup.classList.add("show");
          }
  
          event.stopPropagation();
        });
      });
  
      document.addEventListener("touchstart", (e) => {
        if (backDrop) {
          startY = e.touches[0].clientY;
        }
      });
  
      
        
  
      document.addEventListener("touchmove", (e) => {
        if (backDrop && backDrop.classList.contains("show")) {
          const moveY = e.touches[0].clientY;
          if (moveY - startY > 50) {
            backDrop.classList.add("hidden");
  
            feedBkDialog.classList.remove("show");
          }
        }
      });
  
      backDrop.addEventListener("click", (e) => {
        if (backDrop && backDrop.classList.contains("show")) {
          backDrop.classList.add("hidden");
          feedBkDialog.classList.remove("show");
        }
      });
    } else {
      mobileDrawup.classList.remove("mobile-drawup");
      backDrop.classList.add("hidden");
      mobileDrawup.classList.add("hidden");
      feedBackBtn.forEach((button) => {
        button.addEventListener("click", (event) => {
          backDrop.classList.remove("hidden");
          mobileDrawup.classList.remove("hidden");
  
          setTimeout(() => {
            backDrop.classList.add("show-backdrop");
            mobileDrawup.classList.add("show-dialog");
          }, 10);
        });
      });
  
      backDrop.addEventListener("click", () => {
        backDrop.classList.remove("show-backdrop");
        mobileDrawup.classList.remove("show-dialog");
  
        setTimeout(() => {
          backDrop.classList.add("hidden");
          mobileDrawup.classList.add("hidden");
        }, 300);
      });
  
        cancelEngage.addEventListener("click", () => {
          backDrop.classList.remove("show-backdrop");
          mobileDrawup.classList.remove("show-dialog");
  
          setTimeout(() => {
            backDrop.classList.add("hidden");
            mobileDrawup.classList.add("hidden");
          }, 300);
        });
    }
  });
  