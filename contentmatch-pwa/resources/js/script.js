function goBack() {
  window.history.back();
}

document.addEventListener("DOMContentLoaded", () => {
  const backButton = document.getElementById("back-button");
  if (backButton) {
    backButton.addEventListener("click", () => {
      goBack();
    });
  }

  
});



