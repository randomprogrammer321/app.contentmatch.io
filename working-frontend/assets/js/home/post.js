document.addEventListener("DOMContentLoaded", () => {
  const forYouBtn = document.getElementById("forYouBtn");
  const followingBtn = document.getElementById("followingBtn");
  const communitiesBtn = document.getElementById("communitiesBtn");

  const contentForYou = document.getElementById("contentForYou");
  const contentFollowing = document.getElementById("contentFollowing");
  const contentCommunities = document.getElementById("contentCommunities");

  let activeButton = forYouBtn;

  function hideAllContents() {
    contentForYou.classList.add("hidden", "opacity-0");
    contentFollowing.classList.add("hidden", "opacity-0");
    contentCommunities.classList.add("hidden", "opacity-0");
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

  if (forYouBtn) {
    forYouBtn.addEventListener("click", () => {
      hideAllContents();
      contentForYou.classList.remove("hidden");
      setTimeout(() => contentForYou.classList.remove("opacity-0"), 0);
      updateButtonStyles(forYouBtn);
    });
  }

  if (followingBtn) {
    followingBtn.addEventListener("click", () => {
      hideAllContents();
      contentFollowing.classList.remove("hidden");
      setTimeout(() => contentFollowing.classList.remove("opacity-0"), 0);
      updateButtonStyles(followingBtn);
    });
  }

  if (communitiesBtn) {
    communitiesBtn.addEventListener("click", () => {
      hideAllContents();
      contentCommunities.classList.remove("hidden");
      setTimeout(() => contentCommunities.classList.remove("opacity-0"), 0);
      updateButtonStyles(communitiesBtn);
    });
  }
});
