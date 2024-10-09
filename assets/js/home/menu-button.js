document.addEventListener("DOMContentLoaded", () => {
    const menuButtons = document.querySelectorAll('.menuButton');
    const tooltips = document.querySelectorAll('.tooltip');
  
    menuButtons.forEach((button, index) => {
      const tooltip = tooltips[index];
  
      button.addEventListener('mouseenter', () => {
        tooltip.classList.remove('opacity-0', 'invisible', 'scale-95');
        tooltip.classList.add('opacity-100', 'visible', 'scale-100');
      });
  
      tooltip.addEventListener('mouseenter', () => {
        tooltip.classList.remove('opacity-0', 'invisible', 'scale-95');
        tooltip.classList.add('opacity-100', 'visible', 'scale-100');
      });
  
      button.addEventListener('mouseleave', () => {
        setTimeout(() => {
          if (!tooltip.matches(':hover')) {
            tooltip.classList.remove('opacity-100', 'visible', 'scale-100');
            tooltip.classList.add('opacity-0', 'invisible', 'scale-95');
          }
        }, 200);
      });
  
      tooltip.addEventListener('mouseleave', () => {
        tooltip.classList.remove('opacity-100', 'visible', 'scale-100');
        tooltip.classList.add('opacity-0', 'invisible', 'scale-95');
      });
    });
  })