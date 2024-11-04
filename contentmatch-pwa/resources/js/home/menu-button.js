document.addEventListener("DOMContentLoaded", () => {
  const menuButtons = document.querySelectorAll(".menuButton");
  const tooltips = document.querySelectorAll(".tooltip");
  const closeMenuButton = document.querySelector(".closeMenuButton"); // Single close button
  const isMobile = window.innerWidth <= 649;

  // Function to close the menu (hide tooltip)
  const closeMenu = (tooltip) => {
    console.log(tooltip)
    tooltip.classList.remove("opacity-100", "visible", "scale-100");
    tooltip.classList.add("opacity-0", "invisible", "scale-95");
  };

  // Function to open the menu (show tooltip)
  const openMenu = (tooltip) => {
    console.log(tooltip)
    tooltip.classList.remove("opacity-0", "invisible", "scale-95");
    tooltip.classList.add("opacity-100", "visible", "scale-100");
  };

  // Add event listeners for menu buttons (for mobile)
  menuButtons.forEach((button, index) => {
    const tooltip = tooltips[index];

    if (isMobile) {
      // Show tooltip on button click for mobile
      button.addEventListener("click", () => {
        if (!tooltip.classList.contains("visible")) {
          openMenu(tooltip);
        } else {
          closeMenu(tooltip);
        }
      });

      // document.addEventListener("click", () => {
      //   if (tooltip.classList.contains("visible")) {
      //   closeMenu(tooltip); }
      // });
    } else {
      // For desktop behavior (using hover)
      button.addEventListener("mouseenter", () => {
        openMenu(tooltip);
      });

      button.addEventListener("mouseleave", () => {
        setTimeout(() => {
          if (!tooltip.matches(":hover")) {
            closeMenu(tooltip);
          }
        }, 200);
      });

      tooltip.addEventListener("mouseenter", () => {
        openMenu(tooltip);
      });

      tooltip.addEventListener("mouseleave", () => {
        closeMenu(tooltip);
      });
    }
  });

  // Handle closeMenuButton click to hide tooltips on mobile
  if (closeMenuButton) {
    closeMenuButton.addEventListener("click", (event) => {
      event.stopPropagation();
      tooltips.forEach((tooltip) => {
        closeMenu(tooltip);  // Close all tooltips
      });
    });
  }
});
