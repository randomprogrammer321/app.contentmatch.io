function toggleDropdown() {
  var dropdown = document.getElementById("dropdown");

  if (dropdown.classList.contains("hidden")) {
    dropdown.classList.remove("hidden");
    setTimeout(() => {
      dropdown.classList.remove("opacity-0", "scale-95");
      dropdown.classList.add("opacity-100", "scale-100");
    }, 10);
  } else {
    dropdown.classList.add("opacity-0", "scale-95");
    dropdown.classList.remove("opacity-100", "scale-100");
    setTimeout(() => {
      dropdown.classList.add("hidden");
    }, 300);
  }
}
function toggleDropdown2() {
  var dropdown = document.getElementById("dropdown2");

  if (dropdown.classList.contains("hidden")) {
    dropdown.classList.remove("hidden");
    setTimeout(() => {
      dropdown.classList.remove("opacity-0", "scale-95");
      dropdown.classList.add("opacity-100", "scale-100");
    }, 10);
  } else {
    dropdown.classList.add("opacity-0", "scale-95");
    dropdown.classList.remove("opacity-100", "scale-100");
    setTimeout(() => {
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
      setTimeout(() => {
        dropdown.classList.remove("opacity-0", "scale-95");
        dropdown.classList.add("opacity-100", "scale-100");
      }, 10);
    } else {
      dropdown.classList.add("opacity-0", "scale-95");
      dropdown.classList.remove("opacity-100", "scale-100");
      setTimeout(() => {
        dropdown.classList.add("hidden");
      }, 300);
    }
  }
  
  function selectOptionTwo(optionText) {
    var menuButton = document.getElementById("menu-button2");
    menuButton.firstChild.textContent = optionText;
  
    toggleDropdown2();
  }


  const buttons = document.querySelectorAll(".social-btn");
  const inputContainer = document.getElementById("input-container");
  const socialImg = document.getElementById("social-img");

  const socialImageMap = {
    "instagram-btn": "/assets/icon/socials/instagram.svg",
    "youtube-btn": "/assets/icon/socials/youtube.svg",
    "tiktok-btn": "/assets/icon/socials/tiktok.svg",
  };

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      buttons.forEach((btn) =>
        btn.classList.remove("bg-white", "border-custom3", "text-custom9")
      );

      button.classList.add("bg-white", "border-custom3", "text-custom9");

      inputContainer.classList.remove("hidden");
      inputContainer.classList.add("show");

      const clickedButtonId = button.id;
      socialImg.src = socialImageMap[clickedButtonId];
    });
  });

document.addEventListener("DOMContentLoaded", () => {
//CREATE POST DIALOG ONE
  const createPostDialogStepOne = document.getElementById("create-post-stp1-dialog");
  const createPostStepOneBackDrop = document.getElementById("create-post-backdrop-one");
  const closeCreatePostStepOneDialog = document.querySelectorAll(
    ".close-create-post-dialog-step1"
  );
  const openCreatePostDialog = document.getElementById(
    "open-create-post-dialog"
  );

  openCreatePostDialog.addEventListener("click", (event) => {
    createPostStepOneBackDrop.classList.remove("hidden");
    createPostDialogStepOne.classList.remove("hidden");

    setTimeout(() => {
      createPostStepOneBackDrop.classList.add("show-backdrop");
      createPostDialogStepOne.classList.add("show-dialog");
    }, 300);
  });

  createPostStepOneBackDrop.addEventListener("click", () => {
    createPostStepOneBackDrop.classList.remove("show-backdrop");
    createPostDialogStepOne.classList.remove("show-dialog");

    setTimeout(() => {
      createPostStepOneBackDrop.classList.add("hidden");
      createPostDialogStepOne.classList.add("hidden");
    }, 300);
  });
  closeCreatePostStepOneDialog.forEach((button) => {
    
    button.addEventListener("click", () => {
        console.log("coool")
        createPostStepOneBackDrop.classList.remove("show-backdrop");
        createPostDialogStepOne.classList.remove("show-dialog");
    
        setTimeout(() => {
          createPostStepOneBackDrop.classList.add("hidden");
          createPostDialogStepOne.classList.add("hidden");
        }, 300);
      });
  })



  //CREATE POST DIALOG TWO
  const createPostDialogStepTwo = document.getElementById("create-post-stp2-dialog");
  const createPostStepTwoBackDrop = document.getElementById("create-post-backdrop-two");
  const closeCreatePostStepTwoDialog = document.querySelectorAll(
    ".close-create-post-dialog-step2"
  );
  const openCreatePostDialogTwo = document.getElementById(
    "open-create-post-dialog-two"
  );

  openCreatePostDialogTwo.addEventListener("click", (event) => {

    createPostStepOneBackDrop.classList.remove("show-backdrop");
        createPostDialogStepOne.classList.remove("show-dialog");
    
        setTimeout(() => {
          createPostStepOneBackDrop.classList.add("hidden");
          createPostDialogStepOne.classList.add("hidden");

              createPostStepTwoBackDrop.classList.remove("hidden");
    createPostDialogStepTwo.classList.remove("hidden");

    setTimeout(() => {
      createPostStepTwoBackDrop.classList.add("show-backdrop");
      createPostDialogStepTwo.classList.add("show-dialog");
      
    }, 10);
        }, 300);


    
  });

  createPostStepTwoBackDrop.addEventListener("click", () => {
    createPostStepTwoBackDrop.classList.remove("show-backdrop");
    createPostDialogStepTwo.classList.remove("show-dialog");

    setTimeout(() => {
      createPostStepTwoBackDrop.classList.add("hidden");
      createPostDialogStepTwo.classList.add("hidden");
    }, 300);
  });
  closeCreatePostStepTwoDialog.forEach((button) => {
    
    button.addEventListener("click", () => {
        console.log("coool")
        createPostStepTwoBackDrop.classList.remove("show-backdrop");
        createPostDialogStepTwo.classList.remove("show-dialog");
    
        setTimeout(() => {
          createPostStepTwoBackDrop.classList.add("hidden");
          createPostDialogStepTwo.classList.add("hidden");
        }, 300);
      });
  })
  
});
