document.addEventListener("DOMContentLoaded", () => {
  const uploadButton = document.getElementById("upload-button");
  const imageInput = document.getElementById("image-input");
  const profileImage = document.getElementById("profile-image");
  const removeButton = document.getElementById("remove-button");

  uploadButton.addEventListener("click", () => {
    imageInput.click();
  });

  imageInput.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (e) => {
        profileImage.src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });

  removeButton.addEventListener("click", () => {
    profileImage.src = "";
    imageInput.value = "";
  });
});
