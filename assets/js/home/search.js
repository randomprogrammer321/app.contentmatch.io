document.addEventListener("DOMContentLoaded", () => {
  const searchInput = document.getElementById("search-input");
  const searchResult = document.getElementById("search-result");
  const closeBtn = document.getElementById("close-btn");

  searchInput.addEventListener("input", () => {
    if (searchInput.value.trim() !== "") {
      searchResult.classList.remove("hidden", "opacity-0", "translate-y-5");
      searchResult.classList.add("opacity-100", "translate-y-0");

      closeBtn.classList.remove("hidden", "scale-0", "opacity-0");
      closeBtn.classList.add("scale-100", "opacity-100", "flex");
    } else {
      searchResult.classList.add("opacity-0", "translate-y-5");
      searchResult.classList.remove("opacity-100", "translate-y-0");

      closeBtn.classList.add("scale-0", "opacity-0");
      setTimeout(() => closeBtn.classList.add("hidden"), 300);
    }
  });

  searchInput.addEventListener("blur", () => {
    setTimeout(() => {
      searchResult.classList.add("opacity-0", "translate-y-5");
      searchResult.classList.remove("opacity-100", "translate-y-0");

      closeBtn.classList.add("scale-0", "opacity-0");
      setTimeout(() => closeBtn.classList.add("hidden"), 300);
    }, 200);
  });

  closeBtn.addEventListener("click", () => {
    searchInput.value = "";
    searchResult.classList.add("opacity-0", "translate-y-5");
    searchResult.classList.remove("opacity-100", "translate-y-0");

    closeBtn.classList.add("scale-0", "opacity-0");
    setTimeout(() => closeBtn.classList.add("hidden"), 300);
  });
});
