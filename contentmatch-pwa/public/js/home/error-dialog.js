document.addEventListener("DOMContentLoaded", () => {
    const errorDialog = document.getElementById("error-dialog");
    const backDrop = document.getElementById("error-back-drop");

    const closeErrorDialog = document.getElementById("close-error-dialog");

    // const openErrorDialog = document.getElementById("open-error-dialog");

    // openErrorDialog.addEventListener("click", () => {
    //     backDrop.classList.remove('hidden');
    //     errorDialog.classList.remove('hidden');
        
    //     setTimeout(() => {
    //       backDrop.classList.add('show-backdrop');
    //       errorDialog.classList.add('show-dialog');
    //     }, 10);
    // })

    
  
    backDrop.addEventListener("click", () => {
      backDrop.classList.remove("show-backdrop");
      errorDialog.classList.remove("show-dialog");
  
      setTimeout(() => {
        backDrop.classList.add("hidden");
        errorDialog.classList.add("hidden");
      }, 300);
    });

  
    closeErrorDialog.addEventListener("click", () => {
      backDrop.classList.remove("show-backdrop");
  
      console.log("clicked")
      errorDialog.classList.remove("show-dialog");
    
      setTimeout(() => {
        backDrop.classList.add("hidden");
        errorDialog.classList.add("hidden");
    
        notificationBackDrop.classList.remove("hidden");
        notifyDialog.classList.remove("hidden");
    
        setTimeout(() => {
          notificationBackDrop.classList.add("show-backdrop");
          notifyDialog.classList.add("show-dialog");
        }, 10);
      }, 300);
    });
  });
  