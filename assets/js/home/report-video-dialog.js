document.addEventListener("DOMContentLoaded", () => {
  const reportDialog = document.getElementById("report-dia");
  const reportBackDrop = document.getElementById("back-drop-5");
  const closeReportDialog = document.getElementById("close-repo-dia");
  const reportButtons = document.querySelectorAll(".repo-vid");

  reportButtons.forEach((button) => {
    console.log("acl");
    button.addEventListener("click", (event) => {
      console.log("acl");
      reportBackDrop.classList.remove("hidden");
      reportDialog.classList.remove("hidden");

      setTimeout(() => {
        reportBackDrop.classList.add("show-backdrop");
        reportDialog.classList.add("show-dialog");
      }, 300);
    });
  });

  reportBackDrop.addEventListener("click", () => {
    reportBackDrop.classList.remove("show-backdrop");
    reportDialog.classList.remove("show-dialog");

    setTimeout(() => {
      reportBackDrop.classList.add("hidden");
      reportDialog.classList.add("hidden");
    }, 300);
  });

  closeReportDialog.addEventListener("click", () => {
    reportBackDrop.classList.remove("show-backdrop");
    reportDialog.classList.remove("show-dialog");

    setTimeout(() => {
      reportBackDrop.classList.add("hidden");
      reportDialog.classList.add("hidden");
    }, 300);
  });
});
