function toggleClasses(button) {
  button.classList.toggle("bg-secondary");
  button.classList.toggle("text-custom9");

  button.classList.toggle("text-custom2");
  button.classList.toggle("border");
  button.classList.toggle("border-custom1");
}

document.addEventListener("DOMContentLoaded", () => {
  const tags = document.querySelectorAll(".tags");
  const tagCountElement = document.getElementById("tag-count");
  let tagCount = 0;

  tags.forEach((button) => {
    button.addEventListener("click", () => {
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

  let currentStep = 1;
  const totalSteps = 5;
  const progressBar = document.getElementById("progress-bar");
  const progressText = document.getElementById("progress-text");
  const nextBtn = document.getElementById("cc-nxt-btn");
  const backBtn = document.getElementById("cc-bk-btn");
  const animatedDialog = document.querySelector(".animatedDialog");
  const communityCreatedSuccessDialog = document.getElementById(
    "create-com-dia-succ"
  );
  const createCommunityDialog = document.getElementById("create-com-dia");
  const createCommBackDrop = document.getElementById("create-com-back-drop");
  const closeCrteateDialogBtn = document.getElementById("close-create-com-dia");
  const openCreateCommDialogBtns = document.querySelectorAll(
    ".open-create-com-dia"
  );
  const openCreateCommDialogBtn = document.querySelector(
    ".open-create-com-dia"
  );
  let endOfSteps = false;

  const steps = [...Array(totalSteps).keys()].map((i) =>
    document.getElementById(`step-${i + 1}`)
  );

  const updateStep = () => {
    steps.forEach((step, index) => {
      step.classList.toggle("hidden", index !== currentStep - 1);
    });

    progressBar.value = (currentStep / totalSteps) * 100;
    progressText.textContent = `Step ${currentStep} of ${totalSteps}`;

    backBtn.classList.toggle("hidden", currentStep === 1);
    // nextBtn.classList.toggle('hidden', currentStep === totalSteps);
  };

  nextBtn.addEventListener("click", () => {
    if (currentStep < totalSteps) {
      currentStep += 1;
      updateStep();
    }

    console.log(currentStep);

    animatedDialog.style.height = "auto";
    const height = animatedDialog.clientHeight;
    animatedDialog.style.height = "0px";
    requestAnimationFrame(() => {
      animatedDialog.style.height = `${height}px`;
    });

    if (endOfSteps) {
      endOfSteps = false;
      currentStep = 1;
      updateStep();
      createCommunityDialog.classList.remove("show-dialog");

      setTimeout(() => {
        createCommunityDialog.classList.add("hidden");

        communityCreatedSuccessDialog.classList.remove("hidden");

        setTimeout(() => {
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

  backBtn.addEventListener("click", () => {
    if (currentStep > 1) {
      currentStep -= 1;
      updateStep();
    }
    animatedDialog.style.height = "auto";
    const height = animatedDialog.clientHeight;
    animatedDialog.style.height = "0px";
    requestAnimationFrame(() => {
      animatedDialog.style.height = `${height}px`;
    });
    if (currentStep === 4) {
      nextBtn.innerText = "Next";
    }
  });

  updateStep();

  //////////// DIVIDER////////////

  openCreateCommDialogBtns.forEach((button) => {
   
    button.addEventListener("click", (event) => {
        if(nextBtn.innerText !== "Next") {
            nextBtn.innerText = "Next"
        }
      createCommBackDrop.classList.remove("hidden");
      createCommunityDialog.classList.remove("hidden");

      setTimeout(() => {
        createCommBackDrop.classList.add("show-backdrop");
        createCommunityDialog.classList.add("show-dialog");
      }, 300);
    });
  });

  openCreateCommDialogBtn.addEventListener("click", (event) => {
    if(nextBtn.innerText !== "Next") {
        nextBtn.innerText = "Next"
    }
    animatedDialog.style.height = "max-content";

    createCommBackDrop.classList.remove("hidden");
    createCommunityDialog.classList.remove("hidden");

    setTimeout(() => {
      createCommBackDrop.classList.add("show-backdrop");
      createCommunityDialog.classList.add("show-dialog");
    }, 300);
  });

  createCommBackDrop.addEventListener("click", () => {
    createCommBackDrop.classList.remove("show-backdrop");
    createCommunityDialog.classList.remove("show-dialog");
    communityCreatedSuccessDialog.classList.remove("show-dialog");

    setTimeout(() => {
      createCommBackDrop.classList.add("hidden");
      createCommunityDialog.classList.add("hidden");
      communityCreatedSuccessDialog.classList.add("hidden");
    }, 300);
  });

  closeCrteateDialogBtn.addEventListener("click", () => {
    currentStep = 1;
    updateStep();
    createCommBackDrop.classList.remove("show-backdrop");
    createCommunityDialog.classList.remove("show-dialog");

    setTimeout(() => {
      createCommBackDrop.classList.add("hidden");
      createCommunityDialog.classList.add("hidden");
    }, 300);
  });
});
