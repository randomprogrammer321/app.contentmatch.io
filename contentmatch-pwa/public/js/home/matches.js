document.addEventListener("DOMContentLoaded", () => {
    const forYouBtn = document.getElementById('matchesBtn');
    const followingBtn = document.getElementById('pstEngage');
    const communitiesBtn = document.getElementById('rqsts');
    
    const contentForYou = document.getElementById('matchSection');
    const contentFollowing = document.getElementById('pstEngaSection');
    const contentCommunities = document.getElementById('rqstSection');
  
    let activeButton = forYouBtn;
  
    function hideAllContents() {
      contentForYou.classList.add('hidden', 'opacity-0');
      contentFollowing.classList.add('hidden', 'opacity-0');
      contentCommunities.classList.add('hidden', 'opacity-0');
    }
  
    function updateButtonStyles(button) {
      activeButton.classList.remove('border-b', 'border-custom2', 'text-secondary');
      activeButton.classList.add('text-custom2');
      button.classList.add('border-b', 'border-custom2', 'text-secondary');
      activeButton = button;
    }
  
    forYouBtn.addEventListener('click', () => {
      hideAllContents();
      contentForYou.classList.remove('hidden');
      setTimeout(() => contentForYou.classList.remove('opacity-0'), 0);
      updateButtonStyles(forYouBtn);
    });
  
    followingBtn.addEventListener('click', () => {
      hideAllContents();
      contentFollowing.classList.remove('hidden');
      setTimeout(() => contentFollowing.classList.remove('opacity-0'), 0);
      updateButtonStyles(followingBtn);
    });
  
    communitiesBtn.addEventListener('click', () => {
      hideAllContents();
      contentCommunities.classList.remove('hidden');
      setTimeout(() => contentCommunities.classList.remove('opacity-0'), 0);
      updateButtonStyles(communitiesBtn);
    });
  });
  
  