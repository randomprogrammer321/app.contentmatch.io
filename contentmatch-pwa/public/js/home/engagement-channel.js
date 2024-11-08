document.getElementById("toggleButton").addEventListener("click", function () {
  const contentSection = document.getElementById("contentSection");
  const toggleIcon = document.getElementById("toggleIcon");

  if (
    contentSection.style.maxHeight === "0px" ||
    !contentSection.style.maxHeight
  ) {
    contentSection.style.maxHeight = contentSection.scrollHeight + "px";
    contentSection.style.opacity = "1";
  } else {
    contentSection.style.maxHeight = "0px";
    contentSection.style.opacity = "0";
  }

  toggleIcon.classList.toggle("rotate-180");
});
