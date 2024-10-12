const slider = document.getElementById("slider");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const indicators = document.querySelectorAll(".indicator");

let currentIndex = 0;
const totalSlides = slider.children.length;

function updateSliderPosition() {
  slider.style.transform = `translateX(-${currentIndex * 100}%)`;
  updateIndicators();
}

function updateIndicators() {
  indicators.forEach((indicator, index) => {
    indicator.classList.remove("bg-secondary");
    if (index === currentIndex) {
      indicator.classList.add("bg-secondary");
    }
  });
}

// AUTO SLIDE EVERY THREE SECONS
let autoSlideInterval = setInterval(() => {
  nextSlide();
}, 3000);

function nextSlide() {
  currentIndex = (currentIndex + 1) % totalSlides;
  updateSliderPosition();
}

function prevSlide() {
  currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
  updateSliderPosition();
}

nextBtn.addEventListener("click", () => {
  // STOP AUTO SLIDE ON MANUAL NAVIGATION
  clearInterval(autoSlideInterval);
  nextSlide();
  // RESTART AUTO SLIDE
  autoSlideInterval = setInterval(() => nextSlide(), 3000);
});

prevBtn.addEventListener("click", () => {
  clearInterval(autoSlideInterval);
  prevSlide();
  autoSlideInterval = setInterval(() => nextSlide(), 3000);
});

// HANDLE INDICATOR CLICK
indicators.forEach((indicator) => {
  indicator.addEventListener("click", (e) => {
    clearInterval(autoSlideInterval);
    currentIndex = parseInt(e.target.dataset.index);
    updateSliderPosition();
    autoSlideInterval = setInterval(() => nextSlide(), 3000);
  });
});

// SWIPE FUNCTIONALITY
let touchStartX = 0;
let touchEndX = 0;

slider.addEventListener("touchstart", (e) => {
  touchStartX = e.changedTouches[0].screenX;
});

slider.addEventListener("touchend", (e) => {
  touchEndX = e.changedTouches[0].screenX;
  handleSwipe();
});

function handleSwipe() {
  if (touchEndX < touchStartX) nextSlide();
  if (touchEndX > touchStartX) prevSlide();
}
