function imagePreview(previewImgId, imageInputId) {
  const photoInput = document.getElementById(imageInputId);
  const photoPreview = document.getElementById(previewImgId);

  photoInput.click();

  photoInput.addEventListener("change", function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        photoPreview.src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });
}
