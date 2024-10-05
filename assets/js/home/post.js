document.addEventListener("DOMContentLoaded", () => {
    const forYouBtn = document.getElementById('forYouBtn');
    const followingBtn = document.getElementById('followingBtn');
    const communitiesBtn = document.getElementById('communitiesBtn');
    
    const contentForYou = document.getElementById('contentForYou');
    const contentFollowing = document.getElementById('contentFollowing');
    const contentCommunities = document.getElementById('contentCommunities');
  
    let activeButton = forYouBtn;
  
    function hideAllContents() {
      contentForYou.classList.add('hidden', 'opacity-0');
      contentFollowing.classList.add('hidden', 'opacity-0');
      contentCommunities.classList.add('hidden', 'opacity-0');
    }
  
    function updateButtonStyles(button) {
      activeButton.classList.remove('border-b-2', 'border-custom2', 'text-secondary');
      activeButton.classList.add('text-custom2'); // Set previously active button's text color
      button.classList.add('border-b-2', 'border-custom2', 'text-secondary');
      activeButton = button; // Update active button reference
    }
  
    // Add event listeners to buttons
    forYouBtn.addEventListener('click', () => {
      hideAllContents();
      contentForYou.classList.remove('hidden');
      setTimeout(() => contentForYou.classList.remove('opacity-0'), 0); // Fade-in
      updateButtonStyles(forYouBtn);
    });
  
    followingBtn.addEventListener('click', () => {
      hideAllContents();
      contentFollowing.classList.remove('hidden');
      setTimeout(() => contentFollowing.classList.remove('opacity-0'), 0); // Fade-in
      updateButtonStyles(followingBtn);
    });
  
    communitiesBtn.addEventListener('click', () => {
      hideAllContents();
      contentCommunities.classList.remove('hidden');
      setTimeout(() => contentCommunities.classList.remove('opacity-0'), 0); // Fade-in
      updateButtonStyles(communitiesBtn);
    });
  });
  
  