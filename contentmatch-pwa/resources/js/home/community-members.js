document.addEventListener("DOMContentLoaded", () => {
  const activeUserBtn = document.getElementById("activeUserBtn");
  const blockedUserBtn = document.getElementById("blockedUserBtn");

  const activeUserTab = document.getElementById("activeUserSection");
  const blockedUserTab = document.getElementById("blockedUserSection");

  const mobileDropUpBottomBackDrop = document.getElementById("back-drop-7");
  const mobileDropUpDialog = document.querySelector(".sup-eng-dialog");

  let activeButton = activeUserBtn;

  function hideAllContents() {
    activeUserTab.classList.add("hidden", "opacity-0");
    blockedUserTab.classList.add("hidden", "opacity-0");
  }

  function updateButtonStyles(button) {
    activeButton.classList.remove(
      "border-b-2",
      "border-custom3",
      "text-secondary"
    );
    activeButton.classList.add("text-custom2");
    button.classList.add("border-b-2", "border-custom3", "text-secondary");
    activeButton = button;
  }

  activeUserBtn.addEventListener("click", () => {
    hideAllContents();
    activeUserTab.classList.remove("hidden");
    setTimeout(() => activeUserTab.classList.remove("opacity-0"), 0);
    updateButtonStyles(activeUserBtn);
  });

  blockedUserBtn.addEventListener("click", () => {
    hideAllContents();
    blockedUserTab.classList.remove("hidden");

    setTimeout(() => {
      blockedUserTab.classList.remove("opacity-0");
    }, 0);
    updateButtonStyles(blockedUserBtn);
  });

  const isMobile = window.innerWidth <= 649;
  const menuButtons = document.querySelectorAll(".menuButton");

  if (isMobile) {
    const feedBackBtn = document.querySelectorAll(".sup-eng-btn");
    const mobileDrawup = document.getElementById("if-mobile-drawup2");
   

    mobileDrawup.classList.add("mobile-drawup");
    mobileDrawup.classList.remove("overlay-animate");
    mobileDrawup.classList.remove("dialog");
    mobileDropUpBottomBackDrop.classList.add("hidden");
    mobileDrawup.classList.remove("hidden");

    let currentOverlay = null;
    let startY = null;

    menuButtons.forEach((button) => {
      button.addEventListener("click", (event) => {
        console.log("clikce");

        mobileDropUpBottomBackDrop.classList.remove("hidden");
        mobileDrawup.classList.remove("hidden");
        mobileDrawup.classList.add("show");

        mobileDropUpBottomBackDrop.classList.add("show");

        if (mobileDrawup) {
          mobileDrawup.classList.add("show");
        }

        event.stopPropagation();
      });
    });

    document.addEventListener("touchstart", (e) => {
      if (mobileDropUpBottomBackDrop) {
        startY = e.touches[0].clientY;
      }
    });

    /////////////////////// DIVIDER ////////////////////////////

    document.addEventListener("touchmove", (e) => {
      if (mobileDropUpBottomBackDrop && mobileDropUpBottomBackDrop.classList.contains("show")) {
        const moveY = e.touches[0].clientY;
        if (moveY - startY > 50) {
          mobileDropUpBottomBackDrop.classList.add("hidden");

          mobileDropUpDialog.classList.remove("show");
        }
      }
    });

    mobileDropUpBottomBackDrop.addEventListener("click", (e) => {
      if (mobileDropUpBottomBackDrop && mobileDropUpBottomBackDrop.classList.contains("show")) {
        mobileDropUpBottomBackDrop.classList.add("hidden");
        mobileDropUpDialog.classList.remove("show");
      }
    });
  } else {
    const tooltips = document.querySelectorAll(".tooltip");
    const closeMenuButton = document.querySelector(".closeMenuButton"); // Single close button
    const isMobile = window.innerWidth <= 649;

    // Function to close the menu (hide tooltip)
    const closeMenu = (tooltip) => {
      console.log(tooltip);
      tooltip.classList.remove("opacity-100", "visible", "scale-100");
      tooltip.classList.add("opacity-0", "invisible", "scale-95");
    };

    // Function to open the menu (show tooltip)
    const openMenu = (tooltip) => {
      console.log(tooltip);
      tooltip.classList.remove("opacity-0", "invisible", "scale-95");
      tooltip.classList.add("opacity-100", "visible", "scale-100");
    };

    // Add event listeners for menu buttons (for mobile)
    menuButtons.forEach((button, index) => {
      const tooltip = tooltips[index];

      // Show tooltip on button click for mobile
      button.addEventListener("click", () => {
        if (!tooltip.classList.contains("visible")) {
          openMenu(tooltip);
        } else {
          closeMenu(tooltip);
        }
      });

      // For desktop behavior (using hover)
      button.addEventListener("mouseenter", () => {
        openMenu(tooltip);
      });

      button.addEventListener("mouseleave", () => {
        setTimeout(() => {
          if (!tooltip.matches(":hover")) {
            closeMenu(tooltip);
          }
        }, 200);
      });

      tooltip.addEventListener("mouseenter", () => {
        openMenu(tooltip);
      });

      tooltip.addEventListener("mouseleave", () => {
        closeMenu(tooltip);
      });
    });

    // Handle closeMenuButton click to hide tooltips on mobile
    if (closeMenuButton) {
      closeMenuButton.addEventListener("click", (event) => {
        event.stopPropagation();
        tooltips.forEach((tooltip) => {
          closeMenu(tooltip); // Close all tooltips
        });
      });
    }
  }

  ///////////////////// DIVIDER ////////////////////////

  const assignAsModeratorDialog = document.getElementById("modera-dia");
  const assignAsModeratorConfirmationDialog = document.getElementById("c-modera-dia");
  const assignAsModeratorBackDrop = document.getElementById("back-drop-4");
  const proceedAssignAsModeratorBtn = document.getElementById("proceed-mde-btn");
  const closeAsMoederatorBtns = document.querySelectorAll(".clse-modera-dia");
  const assignModeratorBtns = document.querySelectorAll(".assignModeratorBtn");

  assignModeratorBtns.forEach((button) => {
    button.addEventListener("click", (event) => {
      assignAsModeratorBackDrop.classList.remove("hidden");
      assignAsModeratorDialog.classList.remove("hidden");
      mobileDropUpBottomBackDrop.classList.add("hidden");
      mobileDropUpDialog.classList.remove("show");

      setTimeout(() => {
        assignAsModeratorBackDrop.classList.add("show-backdrop");
        assignAsModeratorDialog.classList.add("show-dialog");
      }, 300);
    });
  });

  assignAsModeratorBackDrop.addEventListener("click", () => {
    assignAsModeratorBackDrop.classList.remove("show-backdrop");
    assignAsModeratorDialog.classList.remove("show-dialog");

    setTimeout(() => {
      assignAsModeratorBackDrop.classList.add("hidden");
      assignAsModeratorDialog.classList.add("hidden");
    }, 300);
  });
  closeAsMoederatorBtns.forEach((button) => {
    button.addEventListener("click", () => {
      assignAsModeratorBackDrop.classList.remove("show-backdrop");
      assignAsModeratorDialog.classList.remove("show-dialog");
      assignAsModeratorConfirmationDialog.classList.remove("show-dialog");
  
      setTimeout(() => {
        assignAsModeratorBackDrop.classList.add("hidden");
        assignAsModeratorDialog.classList.add("hidden");
        assignAsModeratorConfirmationDialog.classList.add("hidden");
      }, 300);
    });
  })
  

  assignAsModeratorBackDrop.addEventListener("click", () => {
    assignAsModeratorBackDrop.classList.remove("show-backdrop");
    assignAsModeratorDialog.classList.remove("show-dialog");
    assignAsModeratorConfirmationDialog.classList.remove("show-dialog");
    

    setTimeout(() => {
      assignAsModeratorBackDrop.classList.add("hidden");
      assignAsModeratorDialog.classList.add("hidden");
      assignAsModeratorConfirmationDialog.classList.add("hidden");
    }, 300);
  });

  proceedAssignAsModeratorBtn.addEventListener("click", () => {
    assignAsModeratorDialog.classList.remove("show-dialog");
    // assignAsModeratorBackDrop.classList.remove("show-backdrop");
    // assignAsModeratorDialog.classList.remove("show-dialog");

    // setTimeout(() => {
    //   assignAsModeratorBackDrop.classList.add("hidden");
    //   assignAsModeratorDialog.classList.add("hidden");
    // }, 300);

    setTimeout(() => {
      assignAsModeratorDialog.classList.add("hidden");
      assignAsModeratorConfirmationDialog.classList.remove("hidden")
  
  
      setTimeout(() => {
      //  assignAsModeratorConfirmationDialog.add("show-backdrop");
        assignAsModeratorConfirmationDialog.classList.add("show-dialog");
      }, 10);
    }, 300);
  });
});
