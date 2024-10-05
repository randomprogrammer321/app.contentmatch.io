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
  
    const attachButton = document.getElementById("attach-image");
    const imageInput = document.getElementById("image-input");
    const engageProofContainer = document.getElementById("engage-proof");
  
    attachButton.addEventListener("click", () => {
      imageInput.click();
    });
  
    imageInput.addEventListener("change", (event) => {
      const file = event.target.files[0];
      if (file) {
        const imgUrl = URL.createObjectURL(file);
        const imageName = file.name;
  
        const imageElement = document.createElement("div");
        imageElement.className =
          "flex items-center h-9 rounded-[40px] px-3 border border-custom6 m-1 opacity-0 transition-opacity duration-300 ease-in-out sm:h-10";
  
        imageElement.innerHTML = `
                <div class="h-5 w-5 sm:h-[24px] sm:w-[24px] rounded-[4px] overflow-hidden">
                    <img class="object-cover h-full w-full" src="${imgUrl}" />
                </div>
                <p class="text-xs text-custom2 font-normal mx-2 sm:text-sm">${imageName}</p>
                <button class="h-2 w-3 flex items-center justify-center close-button">
                    <img class="h-[9px] w-[9px]" src="/assets/icon/close.svg" alt="">
                </button>
            `;
  
        engageProofContainer.appendChild(imageElement);
  
        setTimeout(() => {
          imageElement.classList.remove("opacity-0");
        }, 10);
  
        const closeButton = imageElement.querySelector(".close-button");
        closeButton.addEventListener("click", () => {
          imageElement.classList.add("opacity-0");
  
          setTimeout(() => {
            engageProofContainer.removeChild(imageElement);
          }, 300);
        });
      }
  
      imageInput.value = "";
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
  