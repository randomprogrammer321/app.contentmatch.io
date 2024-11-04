/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/create-username-and-password.js":
/*!******************************************************!*\
  !*** ./resources/js/create-username-and-password.js ***!
  \******************************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var togglePassword = document.querySelector("#togglePassword");
  var toggleConfirmPassword = document.querySelector("#toggleConfirmPassword");
  var password = document.querySelector("#password");
  var confirmPassword = document.querySelector("#confirmPassword");
  if (togglePassword) {
    togglePassword.addEventListener("click", function (e) {
      var passwordType = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", passwordType);
      var passwordIconSrc = passwordType === "password" ? "/assets/icon/humbleicons_eye-close.svg" : "/assets/icon/lucide_eye.svg";
      togglePassword.setAttribute("src", passwordIconSrc);
    });
  }
  if (toggleConfirmPassword) {
    toggleConfirmPassword.addEventListener("click", function (e) {
      var confirmPasswordType = confirmPassword.getAttribute("type") === "password" ? "text" : "password";
      confirmPassword.setAttribute("type", confirmPasswordType);
      var confirmPassworfIconSrc = confirmPasswordType === "password" ? "/assets/icon/humbleicons_eye-close.svg" : "/assets/icon/lucide_eye.svg";
      toggleConfirmPassword.setAttribute("src", confirmPassworfIconSrc);
    });
  }
});

/***/ }),

/***/ "./resources/js/home.js":
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
/***/ (() => {

// import { engagementDialog } from "../../components/dashboard/home/engagementDialog.js";
// import { notificationDialog } from "../../components/dashboard/home/notification-dialog.js";
// import { post } from "../../components/dashboard/home/posts.js";
// import { reportVideoDialog } from "../../components/dashboard/home/report-video-dialog.js";
// import { sectionThree } from "../../components/dashboard/home/section-three.js";
// import { welcomeDialog } from "../../components/dashboard/home/welcome-dialog.js";
// import { bottomTab } from "../../components/dashboard/ui/bottom-tab.js";
// import { sideBar } from "../../components/dashboard/ui/side-bar.js";

// const content = `
// ${engagementDialog()}

// ${notificationDialog()}
// ${welcomeDialog()}
//   ${sideBar()}
//   ${post()}
//   ${reportVideoDialog()}
//   ${sectionThree()}
//   ${bottomTab()}
// `;

// document.getElementById("content").innerHTML = content;

// document.addEventListener("DOMContentLoaded", () => {
//   const hbBtn = document.getElementById("hb-btn");
//   const sideBar = document.getElementById("side-bar");
//   const backDrop = document.getElementById("back-drop");

//   hbBtn.addEventListener("click", (event) => {
//     sideBar.classList.add("translate-x-0");
//     sideBar.classList.remove("-translate-x-[260px]");
//     backDrop.classList.add("fixed");
//     backDrop.classList.remove("hidden");
//   });

//   backDrop.addEventListener("click", (event) => {
//     sideBar.classList.remove("translate-x-0");
//     sideBar.classList.add("-translate-x-[260px]");
//     backDrop.classList.remove("fixed");
//     backDrop.classList.add("hidden");
//   });
// });

/***/ }),

/***/ "./resources/js/home/attach-image.js":
/*!*******************************************!*\
  !*** ./resources/js/home/attach-image.js ***!
  \*******************************************/
/***/ (() => {

function attachImage(inputId, attachImageContainer) {
  var imageInput = document.getElementById(inputId);
  var engageProofContainer = document.getElementById(attachImageContainer);
  imageInput.click();
  imageInput.addEventListener("change", function (event) {
    var file = event.target.files[0];
    if (file) {
      var imgUrl = URL.createObjectURL(file);
      var imageName = file.name;
      var imageElement = document.createElement("div");
      imageElement.className = "flex items-center h-9 rounded-[40px] px-3 border border-custom6 m-1 opacity-0 transition-opacity duration-300 ease-in-out sm:h-10";
      imageElement.innerHTML = "\n                <div class=\"h-5 w-5 sm:h-[24px] sm:w-[24px] mr-2 rounded-[4px] overflow-hidden\">\n                    <img class=\"object-cover h-full w-full\" src=\"".concat(imgUrl, "\" />\n                </div>\n                <p class=\"text-xs text-custom2 font-normal mx-2 sm:text-sm\">").concat(imageName, "</p>\n                <button class=\"h-2 w-3 flex items-center justify-center close-button\">\n                    <img class=\"h-[9px] w-[9px]\" src=\"/assets/icon/close.svg\" alt=\"\">\n                </button>\n            ");
      engageProofContainer.appendChild(imageElement);
      setTimeout(function () {
        imageElement.classList.remove("opacity-0");
      }, 10);
      var closeButton = imageElement.querySelector(".close-button");
      closeButton.addEventListener("click", function () {
        imageElement.classList.add("opacity-0");
        setTimeout(function () {
          engageProofContainer.removeChild(imageElement);
        }, 300);
      });
    }
    imageInput.value = "";
  });
}

/***/ }),

/***/ "./resources/js/home/chat.js":
/*!***********************************!*\
  !*** ./resources/js/home/chat.js ***!
  \***********************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var section = document.getElementById('chat-container');
  section.scrollTop = section.scrollHeight;
});

/***/ }),

/***/ "./resources/js/home/community-details.js":
/*!************************************************!*\
  !*** ./resources/js/home/community-details.js ***!
  \************************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var videoBtn = document.getElementById("vidoBtn");
  var discusionBtn = document.getElementById("discussionBtn");
  var aboutBtn = document.getElementById("abtBtn");
  var videoTab = document.getElementById("videoSection");
  var discussionTab = document.getElementById("discSection");
  var aboutTab = document.getElementById("abtSection");
  var discusInput = document.getElementById("discusInput");
  var activeButton = videoBtn;
  function hideAllContents() {
    videoTab.classList.add("hidden", "opacity-0");
    discussionTab.classList.add("hidden", "opacity-0");
    if (aboutTab) {
      aboutTab.classList.add("hidden", "opacity-0");
    }
    if (discusInput) {
      discusInput.classList.add("hidden", "opacity-0");
    }
  }
  function updateButtonStyles(button) {
    activeButton.classList.remove("border-b-2", "border-custom2", "text-secondary");
    activeButton.classList.add("text-custom2");
    button.classList.add("border-b-2", "border-custom2", "text-secondary");
    activeButton = button;
  }
  videoBtn.addEventListener("click", function () {
    hideAllContents();
    videoTab.classList.remove("hidden");
    setTimeout(function () {
      return videoTab.classList.remove("opacity-0");
    }, 0);
    updateButtonStyles(videoBtn);
  });
  discusionBtn.addEventListener("click", function () {
    hideAllContents();
    discussionTab.classList.remove("hidden");
    setTimeout(function () {
      if (discusInput) {
        discusInput.classList.remove("hidden", "opacity-0");
        discusInput.classList.add("flex");
      }
      discussionTab.classList.remove("opacity-0");
    }, 0);
    updateButtonStyles(discusionBtn);
  });
  if (aboutBtn) {
    aboutBtn.addEventListener("click", function () {
      hideAllContents();
      aboutTab.classList.remove("hidden");
      setTimeout(function () {
        return aboutTab.classList.remove("opacity-0");
      }, 0);
      updateButtonStyles(aboutBtn);
    });
  }
});

/***/ }),

/***/ "./resources/js/home/community-members.js":
/*!************************************************!*\
  !*** ./resources/js/home/community-members.js ***!
  \************************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var activeUserBtn = document.getElementById("activeUserBtn");
  var blockedUserBtn = document.getElementById("blockedUserBtn");
  var activeUserTab = document.getElementById("activeUserSection");
  var blockedUserTab = document.getElementById("blockedUserSection");
  var mobileDropUpBottomBackDrop = document.getElementById("back-drop-7");
  var mobileDropUpDialog = document.querySelector(".sup-eng-dialog");
  var activeButton = activeUserBtn;
  function hideAllContents() {
    activeUserTab.classList.add("hidden", "opacity-0");
    blockedUserTab.classList.add("hidden", "opacity-0");
  }
  function updateButtonStyles(button) {
    activeButton.classList.remove("border-b-2", "border-custom3", "text-secondary");
    activeButton.classList.add("text-custom2");
    button.classList.add("border-b-2", "border-custom3", "text-secondary");
    activeButton = button;
  }
  activeUserBtn.addEventListener("click", function () {
    hideAllContents();
    activeUserTab.classList.remove("hidden");
    setTimeout(function () {
      return activeUserTab.classList.remove("opacity-0");
    }, 0);
    updateButtonStyles(activeUserBtn);
  });
  blockedUserBtn.addEventListener("click", function () {
    hideAllContents();
    blockedUserTab.classList.remove("hidden");
    setTimeout(function () {
      blockedUserTab.classList.remove("opacity-0");
    }, 0);
    updateButtonStyles(blockedUserBtn);
  });
  var isMobile = window.innerWidth <= 649;
  var menuButtons = document.querySelectorAll(".menuButton");
  if (isMobile) {
    var feedBackBtn = document.querySelectorAll(".sup-eng-btn");
    var mobileDrawup = document.getElementById("if-mobile-drawup2");
    mobileDrawup.classList.add("mobile-drawup");
    mobileDrawup.classList.remove("overlay-animate");
    mobileDrawup.classList.remove("dialog");
    mobileDropUpBottomBackDrop.classList.add("hidden");
    mobileDrawup.classList.remove("hidden");
    var currentOverlay = null;
    var startY = null;
    menuButtons.forEach(function (button) {
      button.addEventListener("click", function (event) {
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
    document.addEventListener("touchstart", function (e) {
      if (mobileDropUpBottomBackDrop) {
        startY = e.touches[0].clientY;
      }
    });

    /////////////////////// DIVIDER ////////////////////////////

    document.addEventListener("touchmove", function (e) {
      if (mobileDropUpBottomBackDrop && mobileDropUpBottomBackDrop.classList.contains("show")) {
        var moveY = e.touches[0].clientY;
        if (moveY - startY > 50) {
          mobileDropUpBottomBackDrop.classList.add("hidden");
          mobileDropUpDialog.classList.remove("show");
        }
      }
    });
    mobileDropUpBottomBackDrop.addEventListener("click", function (e) {
      if (mobileDropUpBottomBackDrop && mobileDropUpBottomBackDrop.classList.contains("show")) {
        mobileDropUpBottomBackDrop.classList.add("hidden");
        mobileDropUpDialog.classList.remove("show");
      }
    });
  } else {
    var tooltips = document.querySelectorAll(".tooltip");
    var closeMenuButton = document.querySelector(".closeMenuButton"); // Single close button
    var _isMobile = window.innerWidth <= 649;

    // Function to close the menu (hide tooltip)
    var closeMenu = function closeMenu(tooltip) {
      console.log(tooltip);
      tooltip.classList.remove("opacity-100", "visible", "scale-100");
      tooltip.classList.add("opacity-0", "invisible", "scale-95");
    };

    // Function to open the menu (show tooltip)
    var openMenu = function openMenu(tooltip) {
      console.log(tooltip);
      tooltip.classList.remove("opacity-0", "invisible", "scale-95");
      tooltip.classList.add("opacity-100", "visible", "scale-100");
    };

    // Add event listeners for menu buttons (for mobile)
    menuButtons.forEach(function (button, index) {
      var tooltip = tooltips[index];

      // Show tooltip on button click for mobile
      button.addEventListener("click", function () {
        if (!tooltip.classList.contains("visible")) {
          openMenu(tooltip);
        } else {
          closeMenu(tooltip);
        }
      });

      // For desktop behavior (using hover)
      button.addEventListener("mouseenter", function () {
        openMenu(tooltip);
      });
      button.addEventListener("mouseleave", function () {
        setTimeout(function () {
          if (!tooltip.matches(":hover")) {
            closeMenu(tooltip);
          }
        }, 200);
      });
      tooltip.addEventListener("mouseenter", function () {
        openMenu(tooltip);
      });
      tooltip.addEventListener("mouseleave", function () {
        closeMenu(tooltip);
      });
    });

    // Handle closeMenuButton click to hide tooltips on mobile
    if (closeMenuButton) {
      closeMenuButton.addEventListener("click", function (event) {
        event.stopPropagation();
        tooltips.forEach(function (tooltip) {
          closeMenu(tooltip); // Close all tooltips
        });
      });
    }
  }

  ///////////////////// DIVIDER ////////////////////////

  var assignAsModeratorDialog = document.getElementById("modera-dia");
  var assignAsModeratorConfirmationDialog = document.getElementById("c-modera-dia");
  var assignAsModeratorBackDrop = document.getElementById("back-drop-4");
  var proceedAssignAsModeratorBtn = document.getElementById("proceed-mde-btn");
  var closeAsMoederatorBtns = document.querySelectorAll(".clse-modera-dia");
  var assignModeratorBtns = document.querySelectorAll(".assignModeratorBtn");
  assignModeratorBtns.forEach(function (button) {
    button.addEventListener("click", function (event) {
      assignAsModeratorBackDrop.classList.remove("hidden");
      assignAsModeratorDialog.classList.remove("hidden");
      mobileDropUpBottomBackDrop.classList.add("hidden");
      mobileDropUpDialog.classList.remove("show");
      setTimeout(function () {
        assignAsModeratorBackDrop.classList.add("show-backdrop");
        assignAsModeratorDialog.classList.add("show-dialog");
      }, 300);
    });
  });
  assignAsModeratorBackDrop.addEventListener("click", function () {
    assignAsModeratorBackDrop.classList.remove("show-backdrop");
    assignAsModeratorDialog.classList.remove("show-dialog");
    setTimeout(function () {
      assignAsModeratorBackDrop.classList.add("hidden");
      assignAsModeratorDialog.classList.add("hidden");
    }, 300);
  });
  closeAsMoederatorBtns.forEach(function (button) {
    button.addEventListener("click", function () {
      assignAsModeratorBackDrop.classList.remove("show-backdrop");
      assignAsModeratorDialog.classList.remove("show-dialog");
      assignAsModeratorConfirmationDialog.classList.remove("show-dialog");
      setTimeout(function () {
        assignAsModeratorBackDrop.classList.add("hidden");
        assignAsModeratorDialog.classList.add("hidden");
        assignAsModeratorConfirmationDialog.classList.add("hidden");
      }, 300);
    });
  });
  assignAsModeratorBackDrop.addEventListener("click", function () {
    assignAsModeratorBackDrop.classList.remove("show-backdrop");
    assignAsModeratorDialog.classList.remove("show-dialog");
    assignAsModeratorConfirmationDialog.classList.remove("show-dialog");
    setTimeout(function () {
      assignAsModeratorBackDrop.classList.add("hidden");
      assignAsModeratorDialog.classList.add("hidden");
      assignAsModeratorConfirmationDialog.classList.add("hidden");
    }, 300);
  });
  proceedAssignAsModeratorBtn.addEventListener("click", function () {
    assignAsModeratorDialog.classList.remove("show-dialog");
    // assignAsModeratorBackDrop.classList.remove("show-backdrop");
    // assignAsModeratorDialog.classList.remove("show-dialog");

    // setTimeout(() => {
    //   assignAsModeratorBackDrop.classList.add("hidden");
    //   assignAsModeratorDialog.classList.add("hidden");
    // }, 300);

    setTimeout(function () {
      assignAsModeratorDialog.classList.add("hidden");
      assignAsModeratorConfirmationDialog.classList.remove("hidden");
      setTimeout(function () {
        //  assignAsModeratorConfirmationDialog.add("show-backdrop");
        assignAsModeratorConfirmationDialog.classList.add("show-dialog");
      }, 10);
    }, 300);
  });
});

/***/ }),

/***/ "./resources/js/home/create-community.js":
/*!***********************************************!*\
  !*** ./resources/js/home/create-community.js ***!
  \***********************************************/
/***/ (() => {

function _toConsumableArray(r) { return _arrayWithoutHoles(r) || _iterableToArray(r) || _unsupportedIterableToArray(r) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(r, a) { if (r) { if ("string" == typeof r) return _arrayLikeToArray(r, a); var t = {}.toString.call(r).slice(8, -1); return "Object" === t && r.constructor && (t = r.constructor.name), "Map" === t || "Set" === t ? Array.from(r) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? _arrayLikeToArray(r, a) : void 0; } }
function _iterableToArray(r) { if ("undefined" != typeof Symbol && null != r[Symbol.iterator] || null != r["@@iterator"]) return Array.from(r); }
function _arrayWithoutHoles(r) { if (Array.isArray(r)) return _arrayLikeToArray(r); }
function _arrayLikeToArray(r, a) { (null == a || a > r.length) && (a = r.length); for (var e = 0, n = Array(a); e < a; e++) n[e] = r[e]; return n; }
function toggleClasses(button) {
  button.classList.toggle("bg-secondary");
  button.classList.toggle("text-custom9");
  button.classList.toggle("text-custom2");
  button.classList.toggle("border");
  button.classList.toggle("border-custom1");
}
document.addEventListener("DOMContentLoaded", function () {
  var tags = document.querySelectorAll(".tags");
  var tagCountElement = document.getElementById("tag-count");
  var tagCount = 0;
  tags.forEach(function (button) {
    button.addEventListener("click", function () {
      if (button.classList.contains("bg-secondary")) {
        button.classList.remove("bg-secondary", "text-custom9");
        button.classList.add("text-custom2", "border", "border-custom1");
        tagCount--;
      } else {
        button.classList.add("bg-secondary", "text-custom9");
        button.classList.remove("text-custom2", "border", "border-custom1");
        tagCount++;
      }
      tagCountElement.textContent = tagCount;
    });
  });

  //////////// DIVIDER////////////

  var currentStep = 1;
  var totalSteps = 5;
  var progressBar = document.getElementById("progress-bar");
  var progressText = document.getElementById("progress-text");
  var nextBtn = document.getElementById("cc-nxt-btn");
  var backBtn = document.getElementById("cc-bk-btn");
  var animatedDialog = document.querySelector(".animatedDialog");
  var communityCreatedSuccessDialog = document.getElementById("create-com-dia-succ");
  var createCommunityDialog = document.getElementById("create-com-dia");
  var createCommBackDrop = document.getElementById("create-com-back-drop");
  var closeCrteateDialogBtn = document.getElementById("close-create-com-dia");
  var openCreateCommDialogBtns = document.querySelectorAll(".open-create-com-dia");
  var openCreateCommDialogBtn = document.querySelector(".open-create-com-dia");
  var endOfSteps = false;
  var steps = _toConsumableArray(Array(totalSteps).keys()).map(function (i) {
    return document.getElementById("step-".concat(i + 1));
  });
  var updateStep = function updateStep() {
    steps.forEach(function (step, index) {
      step.classList.toggle("hidden", index !== currentStep - 1);
    });
    progressBar.value = currentStep / totalSteps * 100;
    progressText.textContent = "Step ".concat(currentStep, " of ").concat(totalSteps);
    backBtn.classList.toggle("hidden", currentStep === 1);
    // nextBtn.classList.toggle('hidden', currentStep === totalSteps);
  };
  nextBtn.addEventListener("click", function () {
    if (currentStep < totalSteps) {
      currentStep += 1;
      updateStep();
    }
    console.log(currentStep);
    animatedDialog.style.height = "auto";
    var height = animatedDialog.clientHeight;
    animatedDialog.style.height = "0px";
    requestAnimationFrame(function () {
      animatedDialog.style.height = "".concat(height, "px");
    });
    if (endOfSteps) {
      endOfSteps = false;
      currentStep = 1;
      updateStep();
      createCommunityDialog.classList.remove("show-dialog");
      setTimeout(function () {
        createCommunityDialog.classList.add("hidden");
        communityCreatedSuccessDialog.classList.remove("hidden");
        setTimeout(function () {
          communityCreatedSuccessDialog.classList.add("show-dialog");
        }, 10);
      }, 300);
      return;
    }
    if (currentStep === 5) {
      endOfSteps = true;
    }
    if (currentStep > 4) {
      nextBtn.innerText = "Create Community";
      console.log("here");
      return;
    }
  });
  backBtn.addEventListener("click", function () {
    if (currentStep > 1) {
      currentStep -= 1;
      updateStep();
    }
    animatedDialog.style.height = "auto";
    var height = animatedDialog.clientHeight;
    animatedDialog.style.height = "0px";
    requestAnimationFrame(function () {
      animatedDialog.style.height = "".concat(height, "px");
    });
    if (currentStep === 4) {
      nextBtn.innerText = "Next";
    }
  });
  updateStep();

  //////////// DIVIDER////////////

  openCreateCommDialogBtns.forEach(function (button) {
    button.addEventListener("click", function (event) {
      if (nextBtn.innerText !== "Next") {
        nextBtn.innerText = "Next";
      }
      createCommBackDrop.classList.remove("hidden");
      createCommunityDialog.classList.remove("hidden");
      setTimeout(function () {
        createCommBackDrop.classList.add("show-backdrop");
        createCommunityDialog.classList.add("show-dialog");
      }, 300);
    });
  });
  openCreateCommDialogBtn.addEventListener("click", function (event) {
    if (nextBtn.innerText !== "Next") {
      nextBtn.innerText = "Next";
    }
    animatedDialog.style.height = "max-content";
    createCommBackDrop.classList.remove("hidden");
    createCommunityDialog.classList.remove("hidden");
    setTimeout(function () {
      createCommBackDrop.classList.add("show-backdrop");
      createCommunityDialog.classList.add("show-dialog");
    }, 300);
  });
  createCommBackDrop.addEventListener("click", function () {
    createCommBackDrop.classList.remove("show-backdrop");
    createCommunityDialog.classList.remove("show-dialog");
    communityCreatedSuccessDialog.classList.remove("show-dialog");
    setTimeout(function () {
      createCommBackDrop.classList.add("hidden");
      createCommunityDialog.classList.add("hidden");
      communityCreatedSuccessDialog.classList.add("hidden");
    }, 300);
  });
  closeCrteateDialogBtn.addEventListener("click", function () {
    currentStep = 1;
    updateStep();
    createCommBackDrop.classList.remove("show-backdrop");
    createCommunityDialog.classList.remove("show-dialog");
    setTimeout(function () {
      createCommBackDrop.classList.add("hidden");
      createCommunityDialog.classList.add("hidden");
    }, 300);
  });
});

/***/ }),

/***/ "./resources/js/home/create-post.js":
/*!******************************************!*\
  !*** ./resources/js/home/create-post.js ***!
  \******************************************/
/***/ (() => {

function toggleDropdown() {
  var dropdown = document.getElementById("dropdown");
  if (dropdown.classList.contains("hidden")) {
    dropdown.classList.remove("hidden");
    setTimeout(function () {
      dropdown.classList.remove("opacity-0", "scale-95");
      dropdown.classList.add("opacity-100", "scale-100");
    }, 10);
  } else {
    dropdown.classList.add("opacity-0", "scale-95");
    dropdown.classList.remove("opacity-100", "scale-100");
    setTimeout(function () {
      dropdown.classList.add("hidden");
    }, 300);
  }
}
function selectOption(optionText) {
  var menuButton = document.getElementById("menu-button");
  menuButton.firstChild.textContent = optionText;
  toggleDropdown();
}
function toggleDropdown2() {
  var dropdown = document.getElementById("dropdown2");
  if (dropdown.classList.contains("hidden")) {
    dropdown.classList.remove("hidden");
    setTimeout(function () {
      dropdown.classList.remove("opacity-0", "scale-95");
      dropdown.classList.add("opacity-100", "scale-100");
    }, 10);
  } else {
    dropdown.classList.add("opacity-0", "scale-95");
    dropdown.classList.remove("opacity-100", "scale-100");
    setTimeout(function () {
      dropdown.classList.add("hidden");
    }, 300);
  }
}
function selectOptionTwo(optionText) {
  var menuButton = document.getElementById("menu-button2");
  menuButton.firstChild.textContent = optionText;
  toggleDropdown2();
}
var buttons = document.querySelectorAll(".social-btn");
var inputContainer = document.getElementById("input-container");
var socialImg = document.getElementById("social-img");
var socialImageMap = {
  "instagram-btn": "/assets/icon/socials/instagram.svg",
  "youtube-btn": "/assets/icon/socials/youtube.svg",
  "tiktok-btn": "/assets/icon/socials/tiktok.svg"
};
buttons.forEach(function (button) {
  button.addEventListener("click", function () {
    buttons.forEach(function (btn) {
      return btn.classList.remove("bg-white", "border-custom3", "text-custom9");
    });
    button.classList.add("bg-white", "border-custom3", "text-custom9");
    inputContainer.classList.remove("hidden");
    inputContainer.classList.add("show");
    var clickedButtonId = button.id;
    socialImg.src = socialImageMap[clickedButtonId];
  });
});
document.addEventListener("DOMContentLoaded", function () {
  //CREATE POST DIALOG ONE
  var createPostDialogStepOne = document.getElementById("create-post-stp1-dialog");
  var createPostStepOneBackDrop = document.getElementById("create-post-backdrop-one");
  var closeCreatePostStepOneDialog = document.querySelectorAll(".close-create-post-dialog-step1");
  var openCreatePostDialog = document.getElementById("open-create-post-dialog");
  openCreatePostDialog.addEventListener("click", function (event) {
    createPostStepOneBackDrop.classList.remove("hidden");
    createPostDialogStepOne.classList.remove("hidden");
    setTimeout(function () {
      createPostStepOneBackDrop.classList.add("show-backdrop");
      createPostDialogStepOne.classList.add("show-dialog");
    }, 300);
  });
  createPostStepOneBackDrop.addEventListener("click", function () {
    createPostStepOneBackDrop.classList.remove("show-backdrop");
    createPostDialogStepOne.classList.remove("show-dialog");
    setTimeout(function () {
      createPostStepOneBackDrop.classList.add("hidden");
      createPostDialogStepOne.classList.add("hidden");
    }, 300);
  });
  closeCreatePostStepOneDialog.forEach(function (button) {
    button.addEventListener("click", function () {
      console.log("coool");
      createPostStepOneBackDrop.classList.remove("show-backdrop");
      createPostDialogStepOne.classList.remove("show-dialog");
      setTimeout(function () {
        createPostStepOneBackDrop.classList.add("hidden");
        createPostDialogStepOne.classList.add("hidden");
      }, 300);
    });
  });

  //CREATE POST DIALOG TWO
  var createPostDialogStepTwo = document.getElementById("create-post-stp2-dialog");
  var createPostStepTwoBackDrop = document.getElementById("create-post-backdrop-two");
  var closeCreatePostStepTwoDialog = document.querySelectorAll(".close-create-post-dialog-step2");
  var openCreatePostDialogTwo = document.getElementById("open-create-post-dialog-two");
  openCreatePostDialogTwo.addEventListener("click", function (event) {
    createPostStepOneBackDrop.classList.remove("show-backdrop");
    createPostDialogStepOne.classList.remove("show-dialog");
    setTimeout(function () {
      createPostStepOneBackDrop.classList.add("hidden");
      createPostDialogStepOne.classList.add("hidden");
      createPostStepTwoBackDrop.classList.remove("hidden");
      createPostDialogStepTwo.classList.remove("hidden");
      setTimeout(function () {
        createPostStepTwoBackDrop.classList.add("show-backdrop");
        createPostDialogStepTwo.classList.add("show-dialog");
      }, 10);
    }, 300);
  });
  createPostStepTwoBackDrop.addEventListener("click", function () {
    createPostStepTwoBackDrop.classList.remove("show-backdrop");
    createPostDialogStepTwo.classList.remove("show-dialog");
    setTimeout(function () {
      createPostStepTwoBackDrop.classList.add("hidden");
      createPostDialogStepTwo.classList.add("hidden");
    }, 300);
  });
  closeCreatePostStepTwoDialog.forEach(function (button) {
    button.addEventListener("click", function () {
      console.log("coool");
      createPostStepTwoBackDrop.classList.remove("show-backdrop");
      createPostDialogStepTwo.classList.remove("show-dialog");
      setTimeout(function () {
        createPostStepTwoBackDrop.classList.add("hidden");
        createPostDialogStepTwo.classList.add("hidden");
      }, 300);
    });
  });
});

/***/ }),

/***/ "./resources/js/home/enagement-dialog.js":
/*!***********************************************!*\
  !*** ./resources/js/home/enagement-dialog.js ***!
  \***********************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var yesLabel = "Yes";
  var noLabel = "No";
  var didYouEngageInput = document.getElementById("did-you-engage");
  var didYouEngageLabel = document.getElementById("did-you-engage-label");
  didYouEngageInput.addEventListener("change", function () {
    if (didYouEngageInput.checked) {
      didYouEngageLabel.textContent = yesLabel;
    } else {
      didYouEngageLabel.textContent = noLabel;
    }
  });
  var didYouSubscribeInput = document.getElementById("did-you-subscribe");
  var didYouSubscribeLabel = document.getElementById("did-you-subscribe-label");
  didYouSubscribeInput.addEventListener("change", function () {
    if (didYouSubscribeInput.checked) {
      didYouSubscribeLabel.textContent = yesLabel;
    } else {
      didYouSubscribeLabel.textContent = noLabel;
    }
  });
  var didYouLeaveALikeInput = document.getElementById("did-you-leave-a-like");
  var didYouLeaveALikeLabel = document.getElementById("did-you-leave-a-like-label");
  didYouLeaveALikeInput.addEventListener("change", function () {
    if (didYouLeaveALikeInput.checked) {
      didYouLeaveALikeLabel.textContent = yesLabel;
    } else {
      didYouLeaveALikeLabel.textContent = noLabel;
    }
  });
  var didYouLeaveACommentInput = document.getElementById("did-you-leave-a-comment");
  var didYouLeaveACommentLabel = document.getElementById("did-you-leave-a-comment-label");
  didYouLeaveACommentInput.addEventListener("change", function () {
    if (didYouLeaveACommentInput.checked) {
      didYouLeaveACommentLabel.textContent = yesLabel;
    } else {
      didYouLeaveACommentLabel.textContent = noLabel;
    }
  });
  var isMobile = window.innerWidth <= 649;
  var engageButton = document.querySelectorAll(".engage-btn");
  var mobileDrawup = document.getElementById("mobile-drawup");
  var backDrop = document.getElementById("back-drop-2");
  var cancelEngage = document.getElementById("cancel-engage");
  if (isMobile) {
    mobileDrawup.classList.add("mobile-drawup");
    mobileDrawup.classList.remove("overlay-animate");
    mobileDrawup.classList.remove("dialog");
    backDrop.classList.add("hidden");
    mobileDrawup.classList.remove("hidden");
    var currentOverlay = null;
    var startY = null;
    engageButton.forEach(function (button) {
      button.addEventListener("click", function (event) {
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
    document.addEventListener("touchstart", function (e) {
      if (backDrop) {
        startY = e.touches[0].clientY;
      }
    });
    cancelEngage.addEventListener("click", function (e) {
      if (backDrop && backDrop.classList.contains("show")) {
        backDrop.classList.add("hidden");
        document.querySelector(".mobile-drawup").classList.remove("show");
      }
    });
    document.addEventListener("touchmove", function (e) {
      if (backDrop && backDrop.classList.contains("show")) {
        var moveY = e.touches[0].clientY;
        if (moveY - startY > 50) {
          backDrop.classList.add("hidden");
          document.querySelector(".mobile-drawup").classList.remove("show");
        }
      }
    });
    backDrop.addEventListener("click", function (e) {
      if (backDrop && backDrop.classList.contains("show")) {
        backDrop.classList.add("hidden");
        document.querySelector(".mobile-drawup").classList.remove("show");
      }
    });
  } else {
    mobileDrawup.classList.remove("mobile-drawup");
    backDrop.classList.add("hidden");
    mobileDrawup.classList.add("hidden");
    engageButton.forEach(function (button) {
      button.addEventListener("click", function (event) {
        backDrop.classList.remove("hidden");
        mobileDrawup.classList.remove("hidden");
        setTimeout(function () {
          backDrop.classList.add("show-backdrop");
          mobileDrawup.classList.add("show-dialog");
        }, 10);
      });
    });
    backDrop.addEventListener("click", function () {
      backDrop.classList.remove("show-backdrop");
      mobileDrawup.classList.remove("show-dialog");
      setTimeout(function () {
        backDrop.classList.add("hidden");
        mobileDrawup.classList.add("hidden");
      }, 300);
    });
    cancelEngage.addEventListener("click", function () {
      backDrop.classList.remove("show-backdrop");
      mobileDrawup.classList.remove("show-dialog");
      setTimeout(function () {
        backDrop.classList.add("hidden");
        mobileDrawup.classList.add("hidden");
      }, 300);
    });
  }
});

/***/ }),

/***/ "./resources/js/home/engagement-channel.js":
/*!*************************************************!*\
  !*** ./resources/js/home/engagement-channel.js ***!
  \*************************************************/
/***/ (() => {

document.getElementById("toggleButton").addEventListener("click", function () {
  var contentSection = document.getElementById("contentSection");
  var toggleIcon = document.getElementById("toggleIcon");
  if (contentSection.style.maxHeight === "0px" || !contentSection.style.maxHeight) {
    contentSection.style.maxHeight = contentSection.scrollHeight + "px";
    contentSection.style.opacity = "1";
  } else {
    contentSection.style.maxHeight = "0px";
    contentSection.style.opacity = "0";
  }
  toggleIcon.classList.toggle("rotate-180");
});

/***/ }),

/***/ "./resources/js/home/error-dialog.js":
/*!*******************************************!*\
  !*** ./resources/js/home/error-dialog.js ***!
  \*******************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var errorDialog = document.getElementById("error-dialog");
  var backDrop = document.getElementById("error-back-drop");
  var closeErrorDialog = document.getElementById("close-error-dialog");

  // const openErrorDialog = document.getElementById("open-error-dialog");

  // openErrorDialog.addEventListener("click", () => {
  //     backDrop.classList.remove('hidden');
  //     errorDialog.classList.remove('hidden');

  //     setTimeout(() => {
  //       backDrop.classList.add('show-backdrop');
  //       errorDialog.classList.add('show-dialog');
  //     }, 10);
  // })

  backDrop.addEventListener("click", function () {
    backDrop.classList.remove("show-backdrop");
    errorDialog.classList.remove("show-dialog");
    setTimeout(function () {
      backDrop.classList.add("hidden");
      errorDialog.classList.add("hidden");
    }, 300);
  });
  closeErrorDialog.addEventListener("click", function () {
    backDrop.classList.remove("show-backdrop");
    console.log("clicked");
    errorDialog.classList.remove("show-dialog");
    setTimeout(function () {
      backDrop.classList.add("hidden");
      errorDialog.classList.add("hidden");
      notificationBackDrop.classList.remove("hidden");
      notifyDialog.classList.remove("hidden");
      setTimeout(function () {
        notificationBackDrop.classList.add("show-backdrop");
        notifyDialog.classList.add("show-dialog");
      }, 10);
    }, 300);
  });
});

/***/ }),

/***/ "./resources/js/home/feedback-dialog.js":
/*!**********************************************!*\
  !*** ./resources/js/home/feedback-dialog.js ***!
  \**********************************************/
/***/ (() => {

var starRating = 0;
var selectElement = document.querySelector(".custom-select");
function adjustWidth() {
  // Create a temporary span element to measure the width of the selected option
  var tempSpan = document.createElement("span");
  tempSpan.style.visibility = "hidden";
  tempSpan.style.position = "absolute";
  tempSpan.style.whiteSpace = "nowrap";
  document.body.appendChild(tempSpan);

  // Set the text of the temporary span to the selected option's text
  tempSpan.textContent = selectElement.options[selectElement.selectedIndex].textContent;

  // Adjust the width of the select element based on the span width
  selectElement.style.width = "".concat(tempSpan.offsetWidth + 52, "px");

  // Remove the temporary span from the DOM
  document.body.removeChild(tempSpan);
}
if (selectElement) {
  adjustWidth();
  selectElement.addEventListener("change", adjustWidth);
}
function fillStars(starIndex) {
  var stars = document.querySelectorAll(".rate img");
  if (starRating === 1 && starIndex === starRating) {
    stars[starIndex - 1].src = "/assets/icon/star-empty.svg";
    stars[starIndex - 1].classList.remove("filled");
    stars[starIndex - 1].classList.add("empty");
    starRating = 0;
  } else {
    stars.forEach(function (star, index) {
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
document.addEventListener("DOMContentLoaded", function () {
  var isMobile = window.innerWidth <= 649;
  var feedBackBtns = document.querySelectorAll(".send-fdbk-btn");
  var feedBackBtn = document.querySelector(".send-fdbk-btn");
  var mobileDrawup = document.getElementById("if-mobile-drawup");
  var backDrop = document.getElementById("back-drop-6");
  var feedBkDialog = document.querySelector(".feed-bk-dialog");
  var cancelEngage = document.getElementById("close-fdbk");
  if (isMobile) {
    mobileDrawup.classList.add("mobile-drawup");
    mobileDrawup.classList.remove("overlay-animate");
    mobileDrawup.classList.remove("dialog");
    backDrop.classList.add("hidden");
    mobileDrawup.classList.remove("hidden");
    var currentOverlay = null;
    var startY = null;
    cancelEngage.addEventListener("click", function (e) {
      backDrop.classList.add("hidden");
      feedBkDialog.classList.remove("show");
    });
    feedBackBtns.forEach(function (button) {
      button.addEventListener("click", function (event) {
        console.log("clikce");
        backDrop.classList.remove("hidden");
        mobileDrawup.classList.remove("hidden");
        mobileDrawup.classList.add("show");
        backDrop.classList.add("show");
        if (mobileDrawup) {
          mobileDrawup.classList.add("show");
        }

        //  event.stopPropagation();
      });
    });
    if (feedBackBtn) {
      feedBackBtn.addEventListener("click", function (event) {
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
    }
    document.addEventListener("touchstart", function (e) {
      if (backDrop) {
        startY = e.touches[0].clientY;
      }
    });
    document.addEventListener("touchmove", function (e) {
      if (backDrop && backDrop.classList.contains("show")) {
        var moveY = e.touches[0].clientY;
        if (moveY - startY > 50) {
          backDrop.classList.add("hidden");
          feedBkDialog.classList.remove("show");
        }
      }
    });
    backDrop.addEventListener("click", function (e) {
      if (backDrop && backDrop.classList.contains("show")) {
        backDrop.classList.add("hidden");
        feedBkDialog.classList.remove("show");
      }
    });
  } else {
    mobileDrawup.classList.remove("mobile-drawup");
    backDrop.classList.add("hidden");
    mobileDrawup.classList.add("hidden");
    feedBackBtns.forEach(function (button) {
      button.addEventListener("click", function (event) {
        console.log("clickeds");
        backDrop.classList.remove("hidden");
        mobileDrawup.classList.remove("hidden");
        setTimeout(function () {
          backDrop.classList.add("show-backdrop");
          mobileDrawup.classList.add("show-dialog");
        }, 10);
      });
    });
    feedBackBtn.addEventListener("click", function (event) {
      console.log("clicked");
      backDrop.classList.remove("hidden");
      mobileDrawup.classList.remove("hidden");
      setTimeout(function () {
        backDrop.classList.add("show-backdrop");
        mobileDrawup.classList.add("show-dialog");
      }, 10);
    });
    backDrop.addEventListener("click", function () {
      backDrop.classList.remove("show-backdrop");
      mobileDrawup.classList.remove("show-dialog");
      setTimeout(function () {
        backDrop.classList.add("hidden");
        mobileDrawup.classList.add("hidden");
      }, 300);
    });
    cancelEngage.addEventListener("click", function () {
      backDrop.classList.remove("show-backdrop");
      mobileDrawup.classList.remove("show-dialog");
      setTimeout(function () {
        backDrop.classList.add("hidden");
        mobileDrawup.classList.add("hidden");
      }, 300);
    });
  }
});

/***/ }),

/***/ "./resources/js/home/image-preview.js":
/*!********************************************!*\
  !*** ./resources/js/home/image-preview.js ***!
  \********************************************/
/***/ (() => {

function imagePreview(previewImgId, imageInputId) {
  var photoInput = document.getElementById(imageInputId);
  var photoPreview = document.getElementById(previewImgId);
  photoInput.click();
  photoInput.addEventListener("change", function (event) {
    var file = event.target.files[0];
    if (file) {
      var reader = new FileReader();
      reader.onload = function (e) {
        photoPreview.src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });
}

/***/ }),

/***/ "./resources/js/home/matches.js":
/*!**************************************!*\
  !*** ./resources/js/home/matches.js ***!
  \**************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var forYouBtn = document.getElementById('matchesBtn');
  var followingBtn = document.getElementById('pstEngage');
  var communitiesBtn = document.getElementById('rqsts');
  var contentForYou = document.getElementById('matchSection');
  var contentFollowing = document.getElementById('pstEngaSection');
  var contentCommunities = document.getElementById('rqstSection');
  var activeButton = forYouBtn;
  function hideAllContents() {
    contentForYou.classList.add('hidden', 'opacity-0');
    contentFollowing.classList.add('hidden', 'opacity-0');
    contentCommunities.classList.add('hidden', 'opacity-0');
  }
  function updateButtonStyles(button) {
    activeButton.classList.remove('border-b', 'border-custom2', 'text-secondary');
    activeButton.classList.add('text-custom2');
    button.classList.add('border-b', 'border-custom2', 'text-secondary');
    activeButton = button;
  }
  forYouBtn.addEventListener('click', function () {
    hideAllContents();
    contentForYou.classList.remove('hidden');
    setTimeout(function () {
      return contentForYou.classList.remove('opacity-0');
    }, 0);
    updateButtonStyles(forYouBtn);
  });
  followingBtn.addEventListener('click', function () {
    hideAllContents();
    contentFollowing.classList.remove('hidden');
    setTimeout(function () {
      return contentFollowing.classList.remove('opacity-0');
    }, 0);
    updateButtonStyles(followingBtn);
  });
  communitiesBtn.addEventListener('click', function () {
    hideAllContents();
    contentCommunities.classList.remove('hidden');
    setTimeout(function () {
      return contentCommunities.classList.remove('opacity-0');
    }, 0);
    updateButtonStyles(communitiesBtn);
  });
});

/***/ }),

/***/ "./resources/js/home/menu-button.js":
/*!******************************************!*\
  !*** ./resources/js/home/menu-button.js ***!
  \******************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var menuButtons = document.querySelectorAll(".menuButton");
  var tooltips = document.querySelectorAll(".tooltip");
  var closeMenuButton = document.querySelector(".closeMenuButton"); // Single close button
  var isMobile = window.innerWidth <= 649;

  // Function to close the menu (hide tooltip)
  var closeMenu = function closeMenu(tooltip) {
    console.log(tooltip);
    tooltip.classList.remove("opacity-100", "visible", "scale-100");
    tooltip.classList.add("opacity-0", "invisible", "scale-95");
  };

  // Function to open the menu (show tooltip)
  var openMenu = function openMenu(tooltip) {
    console.log(tooltip);
    tooltip.classList.remove("opacity-0", "invisible", "scale-95");
    tooltip.classList.add("opacity-100", "visible", "scale-100");
  };

  // Add event listeners for menu buttons (for mobile)
  menuButtons.forEach(function (button, index) {
    var tooltip = tooltips[index];
    if (isMobile) {
      // Show tooltip on button click for mobile
      button.addEventListener("click", function () {
        if (!tooltip.classList.contains("visible")) {
          openMenu(tooltip);
        } else {
          closeMenu(tooltip);
        }
      });

      // document.addEventListener("click", () => {
      //   if (tooltip.classList.contains("visible")) {
      //   closeMenu(tooltip); }
      // });
    } else {
      // For desktop behavior (using hover)
      button.addEventListener("mouseenter", function () {
        openMenu(tooltip);
      });
      button.addEventListener("mouseleave", function () {
        setTimeout(function () {
          if (!tooltip.matches(":hover")) {
            closeMenu(tooltip);
          }
        }, 200);
      });
      tooltip.addEventListener("mouseenter", function () {
        openMenu(tooltip);
      });
      tooltip.addEventListener("mouseleave", function () {
        closeMenu(tooltip);
      });
    }
  });

  // Handle closeMenuButton click to hide tooltips on mobile
  if (closeMenuButton) {
    closeMenuButton.addEventListener("click", function (event) {
      event.stopPropagation();
      tooltips.forEach(function (tooltip) {
        closeMenu(tooltip); // Close all tooltips
      });
    });
  }
});

/***/ }),

/***/ "./resources/js/home/notification-dialog.js":
/*!**************************************************!*\
  !*** ./resources/js/home/notification-dialog.js ***!
  \**************************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var notifyDialog = document.getElementById("notify-dia");
  var notificationBackDrop = document.getElementById("back-drop-4");
  var allowNotification = document.getElementById("notify-allow");
  var dntAllowNotification = document.getElementById("notify-dnt-allow");
  notificationBackDrop.addEventListener("click", function () {
    notificationBackDrop.classList.remove("show-backdrop");
    notifyDialog.classList.remove("show-dialog");
    setTimeout(function () {
      notificationBackDrop.classList.add("hidden");
      notifyDialog.classList.add("hidden");
    }, 300);
  });
  dntAllowNotification.addEventListener("click", function () {
    notificationBackDrop.classList.remove("show-backdrop");
    notifyDialog.classList.remove("show-dialog");
    setTimeout(function () {
      notificationBackDrop.classList.add("hidden");
      notifyDialog.classList.add("hidden");
    }, 300);
  });
  allowNotification.addEventListener("click", function () {
    notificationBackDrop.classList.remove("show-backdrop");
    notifyDialog.classList.remove("show-dialog");
    setTimeout(function () {
      notificationBackDrop.classList.add("hidden");
      notifyDialog.classList.add("hidden");
    }, 300);
  });
});

/***/ }),

/***/ "./resources/js/home/post.js":
/*!***********************************!*\
  !*** ./resources/js/home/post.js ***!
  \***********************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var forYouBtn = document.getElementById("forYouBtn");
  var followingBtn = document.getElementById("followingBtn");
  var communitiesBtn = document.getElementById("communitiesBtn");
  var contentForYou = document.getElementById("contentForYou");
  var contentFollowing = document.getElementById("contentFollowing");
  var contentCommunities = document.getElementById("contentCommunities");
  var activeButton = forYouBtn;
  function hideAllContents() {
    contentForYou.classList.add("hidden", "opacity-0");
    contentFollowing.classList.add("hidden", "opacity-0");
    contentCommunities.classList.add("hidden", "opacity-0");
  }
  function updateButtonStyles(button) {
    activeButton.classList.remove("border-b-2", "border-custom2", "text-secondary");
    activeButton.classList.add("text-custom2");
    button.classList.add("border-b-2", "border-custom2", "text-secondary");
    activeButton = button;
  }
  if (forYouBtn) {
    forYouBtn.addEventListener("click", function () {
      hideAllContents();
      contentForYou.classList.remove("hidden");
      setTimeout(function () {
        return contentForYou.classList.remove("opacity-0");
      }, 0);
      updateButtonStyles(forYouBtn);
    });
  }
  if (followingBtn) {
    followingBtn.addEventListener("click", function () {
      hideAllContents();
      contentFollowing.classList.remove("hidden");
      setTimeout(function () {
        return contentFollowing.classList.remove("opacity-0");
      }, 0);
      updateButtonStyles(followingBtn);
    });
  }
  if (communitiesBtn) {
    communitiesBtn.addEventListener("click", function () {
      hideAllContents();
      contentCommunities.classList.remove("hidden");
      setTimeout(function () {
        return contentCommunities.classList.remove("opacity-0");
      }, 0);
      updateButtonStyles(communitiesBtn);
    });
  }
});

/***/ }),

/***/ "./resources/js/home/report-video-dialog.js":
/*!**************************************************!*\
  !*** ./resources/js/home/report-video-dialog.js ***!
  \**************************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var reportDialog = document.getElementById("report-dia");
  var reportBackDrop = document.getElementById("back-drop-5");
  var closeReportDialog = document.getElementById("close-repo-dia");
  var reportButtons = document.querySelectorAll(".repo-vid");
  var reportButton = document.querySelector(".repo-vid");
  reportButtons.forEach(function (button) {
    button.addEventListener("click", function (event) {
      console.log("acl");
      reportBackDrop.classList.remove("hidden");
      reportDialog.classList.remove("hidden");
      setTimeout(function () {
        reportBackDrop.classList.add("show-backdrop");
        reportDialog.classList.add("show-dialog");
      }, 300);
    });
  });
  reportButton.addEventListener("click", function (event) {
    console.log("acl");
    reportBackDrop.classList.remove("hidden");
    reportDialog.classList.remove("hidden");
    setTimeout(function () {
      reportBackDrop.classList.add("show-backdrop");
      reportDialog.classList.add("show-dialog");
    }, 300);
  });
  reportBackDrop.addEventListener("click", function () {
    reportBackDrop.classList.remove("show-backdrop");
    reportDialog.classList.remove("show-dialog");
    setTimeout(function () {
      reportBackDrop.classList.add("hidden");
      reportDialog.classList.add("hidden");
    }, 300);
  });
  closeReportDialog.addEventListener("click", function () {
    reportBackDrop.classList.remove("show-backdrop");
    reportDialog.classList.remove("show-dialog");
    setTimeout(function () {
      reportBackDrop.classList.add("hidden");
      reportDialog.classList.add("hidden");
    }, 300);
  });
});

/***/ }),

/***/ "./resources/js/home/search.js":
/*!*************************************!*\
  !*** ./resources/js/home/search.js ***!
  \*************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var searchInput = document.getElementById("search-input");
  var searchResult = document.getElementById("search-result");
  var closeBtn = document.getElementById("close-btn");
  searchInput.addEventListener("input", function () {
    if (searchInput.value.trim() !== "") {
      searchResult.classList.remove("hidden", "opacity-0", "translate-y-5");
      searchResult.classList.add("opacity-100", "translate-y-0");
      closeBtn.classList.remove("hidden", "scale-0", "opacity-0");
      closeBtn.classList.add("scale-100", "opacity-100", "flex");
    } else {
      searchResult.classList.add("opacity-0", "translate-y-5");
      searchResult.classList.remove("opacity-100", "translate-y-0");
      closeBtn.classList.add("scale-0", "opacity-0");
      setTimeout(function () {
        return closeBtn.classList.add("hidden");
      }, 300);
    }
  });
  searchInput.addEventListener("blur", function () {
    setTimeout(function () {
      searchResult.classList.add("opacity-0", "translate-y-5");
      searchResult.classList.remove("opacity-100", "translate-y-0");
      closeBtn.classList.add("scale-0", "opacity-0");
      setTimeout(function () {
        return closeBtn.classList.add("hidden");
      }, 300);
    }, 200);
  });
  closeBtn.addEventListener("click", function () {
    searchInput.value = "";
    searchResult.classList.add("opacity-0", "translate-y-5");
    searchResult.classList.remove("opacity-100", "translate-y-0");
    closeBtn.classList.add("scale-0", "opacity-0");
    setTimeout(function () {
      return closeBtn.classList.add("hidden");
    }, 300);
  });
});

/***/ }),

/***/ "./resources/js/home/side-bar.js":
/*!***************************************!*\
  !*** ./resources/js/home/side-bar.js ***!
  \***************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var hbBtn = document.getElementById("hb-btn");
  var sideBar = document.getElementById("side-bar");
  var backDrop = document.getElementById("back-drop");
  if (hbBtn) {
    hbBtn.addEventListener("click", function (event) {
      sideBar.classList.add("translate-x-0");
      sideBar.classList.remove("-translate-x-[260px]");
      backDrop.classList.add("fixed");
      backDrop.classList.remove("hidden");
    });
  }
  backDrop.addEventListener("click", function (event) {
    sideBar.classList.remove("translate-x-0");
    sideBar.classList.add("-translate-x-[260px]");
    backDrop.classList.remove("fixed");
    backDrop.classList.add("hidden");
  });
});

/***/ }),

/***/ "./resources/js/home/slider.js":
/*!*************************************!*\
  !*** ./resources/js/home/slider.js ***!
  \*************************************/
/***/ (() => {

// SELECT ALL SLIDERS AND THEIR ASSOCIATED CONTROLS
var sliders = document.querySelectorAll(".slider");
var prevBtns = document.querySelectorAll(".prevBtn");
var nextBtns = document.querySelectorAll(".nextBtn");
var allIndicators = document.querySelectorAll(".indicator");

// LOOP THROUGH EACH SLIDER INSTANCE
sliders.forEach(function (slider, sliderIndex) {
  var currentIndex = 0;
  var totalSlides = slider.children.length;

  // GET ALL INDICATORS FOR THIS SPECIFIC SLIDER
  var indicators = Array.from(allIndicators).filter(function (indicator) {
    return indicator.closest('.card__swipe') === slider.closest('.card__swipe');
  });

  // UPDATE THE SLIDER POSITION
  function updateSliderPosition() {
    slider.style.transform = "translateX(-".concat(currentIndex * 100, "%)");
    updateIndicators();
  }

  // UPDATE THE INDICATOR STYLES
  function updateIndicators() {
    indicators.forEach(function (indicator, index) {
      indicator.classList.remove("bg-secondary");
      if (index === currentIndex) {
        indicator.classList.add("bg-secondary");
      }
    });
  }

  // AUTO SLIDE EVERY 3 SECONDS
  var autoSlideInterval = setInterval(function () {
    nextSlide();
  }, 3000);

  // FUNCTION TO GO TO THE NEXT SLIDE
  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSliderPosition();
  }

  //  FUNCTION TO GOT TO THE PREVIOUS SLIDE
  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateSliderPosition();
  }

  // ADD EVENT LISTENERS FOR NEXT/PREV BUTTONS
  var nextBtn = nextBtns[sliderIndex];
  var prevBtn = prevBtns[sliderIndex];
  if (nextBtn) {
    nextBtn.addEventListener("click", function () {
      // STOP AUTO SLIDE ON MANUAL NAVIGATION
      clearInterval(autoSlideInterval);
      nextSlide();
      // RESTART AUTO SLIDE
      autoSlideInterval = setInterval(function () {
        return nextSlide();
      }, 3000);
    });
  }
  if (prevBtn) {
    prevBtn.addEventListener("click", function () {
      // STOP AUTO SLIDE ON MANUAL NAVIGATION
      clearInterval(autoSlideInterval);
      prevSlide();
      // RESTART AUTO SLIDE
      autoSlideInterval = setInterval(function () {
        return nextSlide();
      }, 3000);
    });
  }

  //HANDLE INDICATOR CLICKS
  indicators.forEach(function (indicator) {
    indicator.addEventListener("click", function (e) {
      //STOP AUTO SLIDE ON MANUAL NAVIGATION
      clearInterval(autoSlideInterval);
      currentIndex = parseInt(e.target.dataset.index);
      updateSliderPosition();
      //RESTART AUTO SLIDE
      autoSlideInterval = setInterval(function () {
        return nextSlide();
      }, 3000);
    });
  });
});

// FULL CARD SWIPER
document.addEventListener("DOMContentLoaded", function () {
  var animating = false;
  var cardsCounter = 0;
  var numOfCards = 6;
  var decisionVal = 80;
  var pullDeltaX = 0;
  var deg = 0;
  var card, cardReject, cardLike;
  function pullChange() {
    animating = true;
    deg = pullDeltaX / 10;
    card.style.transform = "translateX(".concat(pullDeltaX, "px) rotate(").concat(deg, "deg)");
    var opacity = pullDeltaX / 100;
    var rejectOpacity = opacity >= 0 ? 0 : Math.abs(opacity);
    var likeOpacity = opacity <= 0 ? 0 : opacity;
    //  cardReject.style.opacity = rejectOpacity;
    //cardLike.style.opacity = likeOpacity;
  }
  function release() {
    if (pullDeltaX >= decisionVal) {
      card.classList.add("to-right");
    } else if (pullDeltaX <= -decisionVal) {
      card.classList.add("to-left");
    }
    if (Math.abs(pullDeltaX) >= decisionVal) {
      card.classList.add("inactive");
      setTimeout(function () {
        card.classList.add("below");
        card.classList.remove("inactive", "to-left", "to-right");
        cardsCounter++;
        if (cardsCounter === numOfCards) {
          cardsCounter = 0;
          document.querySelectorAll(".card__swipe").forEach(function (c) {
            return c.classList.remove("below");
          });
        }
      }, 300);
    }
    if (Math.abs(pullDeltaX) < decisionVal) {
      card.classList.add("reset");
    }
    setTimeout(function () {
      card.removeAttribute("style");
      card.classList.remove("reset");
      card.querySelectorAll(".card__swipe__choice").forEach(function (choice) {
        return choice.removeAttribute("style");
      });
      pullDeltaX = 0;
      animating = false;
    }, 300);
  }
  document.addEventListener("mousedown", function (e) {
    if (animating) return;
    if (e.target.closest(".card__swipe:not(.inactive)")) {
      card = e.target.closest(".card__swipe");
      cardReject = card.querySelector(".card__swipe__choice.m--reject");
      cardLike = card.querySelector(".card__swipe__choice.m--like");
      var startX = e.pageX || e.touches[0].pageX;
      var moveHandler = function moveHandler(e) {
        var x = e.pageX || e.touches[0].pageX;
        pullDeltaX = x - startX;
        if (!pullDeltaX) return;
        pullChange();
      };
      var _upHandler = function upHandler() {
        document.removeEventListener("mousemove", moveHandler);
        document.removeEventListener("mouseup", _upHandler);
        document.removeEventListener("touchmove", moveHandler);
        document.removeEventListener("touchend", _upHandler);
        if (!pullDeltaX) return; // prevents rapid click events
        release();
      };
      document.addEventListener("mousemove", moveHandler);
      document.addEventListener("mouseup", _upHandler);
      document.addEventListener("touchmove", moveHandler);
      document.addEventListener("touchend", _upHandler);
    }
  });
});

/***/ }),

/***/ "./resources/js/home/subscribe.js":
/*!****************************************!*\
  !*** ./resources/js/home/subscribe.js ***!
  \****************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var subscribeDialog = document.getElementById("sub-dia");
  var subscribeBackDrop = document.getElementById("sub-dia-back-drop");
  var closeSubscribeDialog = document.getElementById("close-sub-dia");
  var subscribeButtons = document.querySelectorAll(".open-sub-dia");
  var subscribeButton = document.querySelector(".open-sub-dia");
  subscribeButtons.forEach(function (button) {
    button.addEventListener("click", function (event) {
      console.log("acl");
      subscribeBackDrop.classList.remove("hidden");
      subscribeDialog.classList.remove("hidden");
      setTimeout(function () {
        subscribeBackDrop.classList.add("show-backdrop");
        subscribeDialog.classList.add("show-dialog");
      }, 300);
    });
  });
  subscribeButton.addEventListener("click", function (event) {
    console.log("acl");
    subscribeBackDrop.classList.remove("hidden");
    subscribeDialog.classList.remove("hidden");
    setTimeout(function () {
      subscribeBackDrop.classList.add("show-backdrop");
      subscribeDialog.classList.add("show-dialog");
    }, 300);
  });
  subscribeBackDrop.addEventListener("click", function () {
    subscribeBackDrop.classList.remove("show-backdrop");
    subscribeDialog.classList.remove("show-dialog");
    setTimeout(function () {
      subscribeBackDrop.classList.add("hidden");
      subscribeDialog.classList.add("hidden");
    }, 300);
  });
  closeSubscribeDialog.addEventListener("click", function () {
    subscribeBackDrop.classList.remove("show-backdrop");
    subscribeDialog.classList.remove("show-dialog");
    setTimeout(function () {
      subscribeBackDrop.classList.add("hidden");
      subscribeDialog.classList.add("hidden");
    }, 300);
  });
});

/***/ }),

/***/ "./resources/js/home/super-engage.js":
/*!*******************************************!*\
  !*** ./resources/js/home/super-engage.js ***!
  \*******************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var isMobile = window.innerWidth <= 649;
  var feedBackBtn = document.querySelectorAll(".sup-eng-btn");
  var mobileDrawup = document.getElementById("if-mobile-drawup2");
  var backDrop = document.getElementById("back-drop-7");
  var feedBkDialog = document.querySelector(".sup-eng-dialog");
  var cancelEngage = document.getElementById("close-sup-eng-dialog");
  if (isMobile) {
    mobileDrawup.classList.add("mobile-drawup");
    mobileDrawup.classList.remove("overlay-animate");
    mobileDrawup.classList.remove("dialog");
    backDrop.classList.add("hidden");
    mobileDrawup.classList.remove("hidden");
    var currentOverlay = null;
    var startY = null;
    cancelEngage.addEventListener("click", function (e) {
      backDrop.classList.add("hidden");
      feedBkDialog.classList.remove("show");
    });
    feedBackBtn.forEach(function (button) {
      button.addEventListener("click", function (event) {
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
    document.addEventListener("touchstart", function (e) {
      if (backDrop) {
        startY = e.touches[0].clientY;
      }
    });
    document.addEventListener("touchmove", function (e) {
      if (backDrop && backDrop.classList.contains("show")) {
        var moveY = e.touches[0].clientY;
        if (moveY - startY > 50) {
          backDrop.classList.add("hidden");
          feedBkDialog.classList.remove("show");
        }
      }
    });
    backDrop.addEventListener("click", function (e) {
      if (backDrop && backDrop.classList.contains("show")) {
        backDrop.classList.add("hidden");
        feedBkDialog.classList.remove("show");
      }
    });
  } else {
    mobileDrawup.classList.remove("mobile-drawup");
    backDrop.classList.add("hidden");
    mobileDrawup.classList.add("hidden");
    feedBackBtn.forEach(function (button) {
      button.addEventListener("click", function (event) {
        backDrop.classList.remove("hidden");
        mobileDrawup.classList.remove("hidden");
        setTimeout(function () {
          backDrop.classList.add("show-backdrop");
          mobileDrawup.classList.add("show-dialog");
        }, 10);
      });
    });
    backDrop.addEventListener("click", function () {
      backDrop.classList.remove("show-backdrop");
      mobileDrawup.classList.remove("show-dialog");
      setTimeout(function () {
        backDrop.classList.add("hidden");
        mobileDrawup.classList.add("hidden");
      }, 300);
    });
    cancelEngage.addEventListener("click", function () {
      backDrop.classList.remove("show-backdrop");
      mobileDrawup.classList.remove("show-dialog");
      setTimeout(function () {
        backDrop.classList.add("hidden");
        mobileDrawup.classList.add("hidden");
      }, 300);
    });
  }
});

/***/ }),

/***/ "./resources/js/home/welcome-dialog.js":
/*!*********************************************!*\
  !*** ./resources/js/home/welcome-dialog.js ***!
  \*********************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var welcomeDialog = document.getElementById("wel-dia");
  var backDrop = document.getElementById("back-drop-3");
  var doLater = document.getElementById("do-later");
  backDrop.classList.remove('hidden');
  welcomeDialog.classList.remove('hidden');

  // Add show class for animation
  setTimeout(function () {
    console.log("Rannnnn");
    backDrop.classList.add('show-backdrop');
    welcomeDialog.classList.add('show-dialog');
  }, 10);
  backDrop.addEventListener("click", function () {
    backDrop.classList.remove("show-backdrop");
    welcomeDialog.classList.remove("show-dialog");
    setTimeout(function () {
      backDrop.classList.add("hidden");
      welcomeDialog.classList.add("hidden");
    }, 300);
  });
  var notifyDialog = document.getElementById("notify-dia");
  var notificationBackDrop = document.getElementById("back-drop-4");
  doLater.addEventListener("click", function () {
    backDrop.classList.remove("show-backdrop");
    console.log("clicked");
    welcomeDialog.classList.remove("show-dialog");
    setTimeout(function () {
      backDrop.classList.add("hidden");
      welcomeDialog.classList.add("hidden");
      notificationBackDrop.classList.remove("hidden");
      notifyDialog.classList.remove("hidden");
      setTimeout(function () {
        notificationBackDrop.classList.add("show-backdrop");
        notifyDialog.classList.add("show-dialog");
      }, 10);
    }, 300);
  });
});

/***/ }),

/***/ "./resources/js/otp.js":
/*!*****************************!*\
  !*** ./resources/js/otp.js ***!
  \*****************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var inputs = document.querySelectorAll('input[type="number"]');
  var distributePastedValue = function distributePastedValue(input, pastedValue) {
    var valueArray = pastedValue.split("").slice(0, inputs.length);
    valueArray.forEach(function (value, index) {
      if (inputs[index]) {
        inputs[index].value = value;
      }
    });
    inputs[Math.min(valueArray.length, inputs.length) - 1].focus();
  };
  inputs.forEach(function (input, index) {
    input.addEventListener("input", function (event) {
      if (event.target.value.length === 1 && index < inputs.length - 1) {
        inputs[index + 1].focus();
      }
    });
    input.addEventListener("keydown", function (event) {
      if (event.key === "Backspace" && event.target.value.length === 0 && index > 0) {
        inputs[index - 1].focus();
      }
    });
    input.addEventListener("paste", function (event) {
      var pastedValue = event.clipboardData.getData("text");
      distributePastedValue(input, pastedValue);
      event.preventDefault();
    });
  });
});

/***/ }),

/***/ "./resources/js/script.js":
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
/***/ (() => {

function goBack() {
  window.history.back();
}
document.addEventListener("DOMContentLoaded", function () {
  var backButton = document.getElementById("back-button");
  if (backButton) {
    backButton.addEventListener("click", function () {
      goBack();
    });
  }
});

/***/ }),

/***/ "./resources/js/set-up-your-profile.js":
/*!*********************************************!*\
  !*** ./resources/js/set-up-your-profile.js ***!
  \*********************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var uploadButton = document.getElementById("upload-button");
  var imageInput = document.getElementById("image-input");
  var profileImage = document.getElementById("profile-image");
  var removeButton = document.getElementById("remove-button");
  uploadButton.addEventListener("click", function () {
    imageInput.click();
  });
  imageInput.addEventListener("change", function (event) {
    var file = event.target.files[0];
    if (file) {
      var reader = new FileReader();
      reader.onload = function (e) {
        profileImage.src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });
  removeButton.addEventListener("click", function () {
    profileImage.src = "";
    imageInput.value = "";
  });
});

/***/ }),

/***/ "./resources/css/output.css":
/*!**********************************!*\
  !*** ./resources/css/output.css ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/create-username-and-password": 0,
/******/ 			"css/output": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/create-username-and-password.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/attach-image.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/chat.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/community-details.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/community-members.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/create-community.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/create-post.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/enagement-dialog.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/engagement-channel.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/error-dialog.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/feedback-dialog.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/image-preview.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/matches.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/menu-button.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/notification-dialog.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/post.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/report-video-dialog.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/search.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/side-bar.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/slider.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/subscribe.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/super-engage.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/home/welcome-dialog.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/otp.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/script.js")))
/******/ 	__webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/js/set-up-your-profile.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/output"], () => (__webpack_require__("./resources/css/output.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;