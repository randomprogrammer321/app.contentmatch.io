let starRating = 0;
const selectElement = document.querySelector(".custom-select");

function adjustWidth() {
    // Create a temporary span element to measure the width of the selected option
    const tempSpan = document.createElement('span');
    tempSpan.style.visibility = 'hidden';
    tempSpan.style.position = 'absolute';
    tempSpan.style.whiteSpace = 'nowrap';
    document.body.appendChild(tempSpan);

    // Set the text of the temporary span to the selected option's text
    tempSpan.textContent = selectElement.options[selectElement.selectedIndex].textContent;

    // Adjust the width of the select element based on the span width
    selectElement.style.width = `${tempSpan.offsetWidth + 52}px`;

    // Remove the temporary span from the DOM
    document.body.removeChild(tempSpan);
}

if(selectElement) {
  adjustWidth();
  selectElement.addEventListener('change', adjustWidth);
}

function fillStars(starIndex) {
  const stars = document.querySelectorAll(".rate img");

  if (starRating === 1 && starIndex === starRating) {
    stars[starIndex - 1].src = "/assets/icon/star-empty.svg";
    stars[starIndex - 1].classList.remove("filled");
    stars[starIndex - 1].classList.add("empty");
    starRating = 0;
  } else {
    stars.forEach((star, index) => {
      if (index < starIndex) {
        star.src = "/assets/icon/star-filled.svg";
        star.classList.remove("empty");
        star.classList.add("filled");
      } else {
        star.src = "/assets/icon/star-empty.svg";
        star.classList.remove("filled");
        star.classList.add("empty");
      }
    });
    starRating = starIndex;
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const isMobile = window.innerWidth <= 649;
  const feedBackBtn = document.querySelectorAll(".send-fdbk-btn");
  const mobileDrawup = document.getElementById("if-mobile-drawup");
  const backDrop = document.getElementById("back-drop-6");
  const feedBkDialog = document.querySelector(".feed-bk-dialog");

  const cancelEngage = document.getElementById("close-fdbk");

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
