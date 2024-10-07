

document.addEventListener("DOMContentLoaded", () => {
    const yesLabel = "Yes";
    const noLabel = "No";
  
    const didYouEngageInput = document.getElementById("did-you-engage");
    const didYouEngageLabel = document.getElementById("did-you-engage-label");
  
    didYouEngageInput.addEventListener("change", function () {
      if (didYouEngageInput.checked) {
        didYouEngageLabel.textContent = yesLabel;
      } else {
        didYouEngageLabel.textContent = noLabel;
      }
    });
  
    const didYouSubscribeInput = document.getElementById("did-you-subscribe");
    const didYouSubscribeLabel = document.getElementById(
      "did-you-subscribe-label"
    );
  
    didYouSubscribeInput.addEventListener("change", function () {
      if (didYouSubscribeInput.checked) {
        didYouSubscribeLabel.textContent = yesLabel;
      } else {
        didYouSubscribeLabel.textContent = noLabel;
      }
    });
  
    const didYouLeaveALikeInput = document.getElementById("did-you-leave-a-like");
    const didYouLeaveALikeLabel = document.getElementById(
      "did-you-leave-a-like-label"
    );
  
    didYouLeaveALikeInput.addEventListener("change", function () {
      if (didYouLeaveALikeInput.checked) {
        didYouLeaveALikeLabel.textContent = yesLabel;
      } else {
        didYouLeaveALikeLabel.textContent = noLabel;
      }
    });
  
    const didYouLeaveACommentInput = document.getElementById(
      "did-you-leave-a-comment"
    );
    const didYouLeaveACommentLabel = document.getElementById(
      "did-you-leave-a-comment-label"
    );
  
    didYouLeaveACommentInput.addEventListener("change", function () {
      if (didYouLeaveACommentInput.checked) {
        didYouLeaveACommentLabel.textContent = yesLabel;
      } else {
        didYouLeaveACommentLabel.textContent = noLabel;
      }
    });
  
   
    const isMobile = window.innerWidth <= 649;
    const engageButton = document.querySelectorAll(".engage-btn");
    const mobileDrawup = document.getElementById("mobile-drawup");
    const backDrop = document.getElementById("back-drop-2");
    const cancelEngage = document.getElementById("cancel-engage");
  
    if (isMobile) {
      mobileDrawup.classList.add("mobile-drawup");
      mobileDrawup.classList.remove("overlay-animate");
      mobileDrawup.classList.remove("dialog");
      backDrop.classList.add("hidden");
      mobileDrawup.classList.remove("hidden");
  
      let currentOverlay = null;
      let startY = null;
  
      engageButton.forEach((button) => {
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
  
      cancelEngage.addEventListener("click", (e) => {
        if (backDrop && backDrop.classList.contains("show")) {
          backDrop.classList.add("hidden");
          document.querySelector(".mobile-drawup").classList.remove("show");
        }
      });
      document.addEventListener("touchmove", (e) => {
        if (backDrop && backDrop.classList.contains("show")) {
          const moveY = e.touches[0].clientY;
          if (moveY - startY > 50) {
            backDrop.classList.add("hidden");
            document.querySelector(".mobile-drawup").classList.remove("show");
          }
        }
      });
  
      backDrop.addEventListener("click", (e) => {
        if (backDrop && backDrop.classList.contains("show")) {
          backDrop.classList.add("hidden");
          document.querySelector(".mobile-drawup").classList.remove("show");
        }
      });
    } else {
      mobileDrawup.classList.remove("mobile-drawup");
      backDrop.classList.add("hidden");
      mobileDrawup.classList.add("hidden");
      engageButton.forEach((button) => {
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
  