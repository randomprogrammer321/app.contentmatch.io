document.addEventListener("DOMContentLoaded", () => {
  const notifyDialog = document.getElementById("notify-dia");
  const notificationBackDrop = document.getElementById("back-drop-4");
  const allowNotification = document.getElementById("notify-allow");
  const dntAllowNotification = document.getElementById("notify-dnt-allow");

  notificationBackDrop.addEventListener("click", () => {
    notificationBackDrop.classList.remove("show-backdrop");
    notifyDialog.classList.remove("show-dialog");

    setTimeout(() => {
      notificationBackDrop.classList.add("hidden");
      notifyDialog.classList.add("hidden");
    }, 300);
  });

  dntAllowNotification.addEventListener("click", () => {
    notificationBackDrop.classList.remove("show-backdrop");
    notifyDialog.classList.remove("show-dialog");

    setTimeout(() => {
      notificationBackDrop.classList.add("hidden");
      notifyDialog.classList.add("hidden");
    }, 300);
  });

  allowNotification.addEventListener("click", () => {
    notificationBackDrop.classList.remove("show-backdrop");
    notifyDialog.classList.remove("show-dialog");

    setTimeout(() => {
      notificationBackDrop.classList.add("hidden");
      notifyDialog.classList.add("hidden");
    }, 300);
  });
});
