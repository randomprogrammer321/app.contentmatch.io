function attachImage(inputId, attachImageContainer) {
    const imageInput = document.getElementById(inputId);
    const engageProofContainer = document.getElementById(attachImageContainer);
  
    imageInput.click();
  
    imageInput.addEventListener("change", (event) => {
      const file = event.target.files[0];
      if (file) {
        const imgUrl = URL.createObjectURL(file);
        const imageName = file.name;
  
        const imageElement = document.createElement("div");
        imageElement.className =
          "flex items-center h-9 rounded-[40px] px-3 border border-custom6 m-1 opacity-0 transition-opacity duration-300 ease-in-out sm:h-10";
  
        imageElement.innerHTML = `
                <div class="h-5 w-5 sm:h-[24px] sm:w-[24px] mr-2 rounded-[4px] overflow-hidden">
                    <img class="object-cover h-full w-full" src="${imgUrl}" />
                </div>
                <p class="text-xs text-custom2 font-normal mx-2 sm:text-sm">${imageName}</p>
                <button class="h-2 w-3 flex items-center justify-center close-button">
                    <img class="h-[9px] w-[9px]" src="/assets/icon/close.svg" alt="">
                </button>
            `;
  
        engageProofContainer.appendChild(imageElement);
  
        setTimeout(() => {
          imageElement.classList.remove("opacity-0");
        }, 10);
  
        const closeButton = imageElement.querySelector(".close-button");
        closeButton.addEventListener("click", () => {
          imageElement.classList.add("opacity-0");
  
          setTimeout(() => {
            engageProofContainer.removeChild(imageElement);
          }, 300);
        });
      }
  
      imageInput.value = "";
    });
  }