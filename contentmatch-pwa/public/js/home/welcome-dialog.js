document.addEventListener("DOMContentLoaded", () => {
    const welcomeDialog = document.getElementById("wel-dia");
    const backDrop = document.getElementById("back-drop-3");
    const doLater = document.getElementById("do-later");
    backDrop.classList.remove('hidden');
    welcomeDialog.classList.remove('hidden');
    
    // Add show class for animation
    setTimeout(() => {
      console.log("Rannnnn")
      backDrop.classList.add('show-backdrop');
      welcomeDialog.classList.add('show-dialog');
    }, 10);
  
    backDrop.addEventListener("click", () => {
      backDrop.classList.remove("show-backdrop");
      welcomeDialog.classList.remove("show-dialog");
  
      setTimeout(() => {
        backDrop.classList.add("hidden");
        welcomeDialog.classList.add("hidden");
      }, 300);
    });
  
    const notifyDialog = document.getElementById("notify-dia");
    const notificationBackDrop = document.getElementById("back-drop-4");
  
    doLater.addEventListener("click", () => {
      backDrop.classList.remove("show-backdrop");
  
      console.log("clicked")
      welcomeDialog.classList.remove("show-dialog");
    
      setTimeout(() => {
        backDrop.classList.add("hidden");
        welcomeDialog.classList.add("hidden");
    
        notificationBackDrop.classList.remove("hidden");
        notifyDialog.classList.remove("hidden");
    
        setTimeout(() => {
          notificationBackDrop.classList.add("show-backdrop");
          notifyDialog.classList.add("show-dialog");
        }, 10);
      }, 300);
    });
  });
  