document.addEventListener("DOMContentLoaded", () => {
  const videoBtn = document.getElementById("vidoBtn");
  const discusionBtn = document.getElementById("discussionBtn");
  const aboutBtn = document.getElementById("abtBtn");

  const videoTab = document.getElementById("videoSection");
  const discussionTab = document.getElementById("discSection");
  const aboutTab = document.getElementById("abtSection");
  const discusInput = document.getElementById("discusInput");

  let activeButton = videoBtn;

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
    activeButton.classList.remove(
      "border-b-2",
      "border-custom2",
      "text-secondary"
    );
    activeButton.classList.add("text-custom2");
    button.classList.add("border-b-2", "border-custom2", "text-secondary");
    activeButton = button;
  }

  videoBtn.addEventListener("click", () => {
    hideAllContents();
    videoTab.classList.remove("hidden");
    setTimeout(() => videoTab.classList.remove("opacity-0"), 0);
    updateButtonStyles(videoBtn);
  });

  discusionBtn.addEventListener("click", () => {
    hideAllContents();
    discussionTab.classList.remove("hidden");

    setTimeout(() => {
      if (discusInput) {
        discusInput.classList.remove("hidden", "opacity-0");
        discusInput.classList.add("flex");
      }

      discussionTab.classList.remove("opacity-0");
    }, 0);
    updateButtonStyles(discusionBtn);
  });

  if (aboutBtn) {
    aboutBtn.addEventListener("click", () => {
      hideAllContents();
      aboutTab.classList.remove("hidden");
      setTimeout(() => aboutTab.classList.remove("opacity-0"), 0);
      updateButtonStyles(aboutBtn);
    });
  }
});
