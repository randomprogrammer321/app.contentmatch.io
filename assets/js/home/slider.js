// SELECT ALL SLIDERS AND THEIR ASSOCIATED CONTROLS
const sliders = document.querySelectorAll(".slider");
const prevBtns = document.querySelectorAll(".prevBtn");
const nextBtns = document.querySelectorAll(".nextBtn");
const allIndicators = document.querySelectorAll(".indicator");

// LOOP THROUGH EACH SLIDER INSTANCE
sliders.forEach((slider, sliderIndex) => {
  let currentIndex = 0;
  const totalSlides = slider.children.length;

  // GET ALL INDICATORS FOR THIS SPECIFIC SLIDER
  const indicators = Array.from(allIndicators).filter(indicator => 
    indicator.closest('.card__swipe') === slider.closest('.card__swipe')
  );

  // UPDATE THE SLIDER POSITION
  function updateSliderPosition() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    updateIndicators();
  }

  // UPDATE THE INDICATOR STYLES
  function updateIndicators() {
    indicators.forEach((indicator, index) => {
      indicator.classList.remove("bg-secondary");
      if (index === currentIndex) {
        indicator.classList.add("bg-secondary");
      }
    });
  }

  // AUTO SLIDE EVERY 3 SECONDS
  let autoSlideInterval = setInterval(() => {
    nextSlide();
  }, 3000);

  // FUNCTION TO GO TO THE NEXT SLIDE
  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSliderPosition();
  }

  //  FUNCTION TO GOT TO THE PREVIOUS SLIDE
  function prevSlide() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateSliderPosition();
  }

  // ADD EVENT LISTENERS FOR NEXT/PREV BUTTONS
  const nextBtn = nextBtns[sliderIndex];
  const prevBtn = prevBtns[sliderIndex];

  if (nextBtn) {
    nextBtn.addEventListener("click", () => {
      // STOP AUTO SLIDE ON MANUAL NAVIGATION
      clearInterval(autoSlideInterval);
      nextSlide();
      // RESTART AUTO SLIDE
      autoSlideInterval = setInterval(() => nextSlide(), 3000);
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener("click", () => {
      // STOP AUTO SLIDE ON MANUAL NAVIGATION
      clearInterval(autoSlideInterval);
      prevSlide();
      // RESTART AUTO SLIDE
      autoSlideInterval = setInterval(() => nextSlide(), 3000); 
    });
  }

  //HANDLE INDICATOR CLICKS
  indicators.forEach((indicator) => {
    indicator.addEventListener("click", (e) => {
      //STOP AUTO SLIDE ON MANUAL NAVIGATION
      clearInterval(autoSlideInterval);
      currentIndex = parseInt(e.target.dataset.index);
      updateSliderPosition();
      //RESTART AUTO SLIDE
      autoSlideInterval = setInterval(() => nextSlide(), 3000);
    });
  });
});


// FULL CARD SWIPER
document.addEventListener("DOMContentLoaded", function () {
  let animating = false;
  let cardsCounter = 0;
  const numOfCards = 6;
  const decisionVal = 80;
  let pullDeltaX = 0;
  let deg = 0;
  let card, cardReject, cardLike;

  function pullChange() {
    animating = true;
    deg = pullDeltaX / 10;
    card.style.transform = `translateX(${pullDeltaX}px) rotate(${deg}deg)`;

    const opacity = pullDeltaX / 100;
    const rejectOpacity = opacity >= 0 ? 0 : Math.abs(opacity);
    const likeOpacity = opacity <= 0 ? 0 : opacity;
    //  cardReject.style.opacity = rejectOpacity;
    //cardLike.style.opacity = likeOpacity;
  }

  function release() {
    if (pullDeltaX >= decisionVal) {
      card.classList.add("to-right");
    } else if (pullDeltaX <= -decisionVal) {
      card.classList.add("to-left");
    }

    if (Math.abs(pullDeltaX) >= decisionVal) {
      card.classList.add("inactive");

      setTimeout(function () {
        card.classList.add("below");
        card.classList.remove("inactive", "to-left", "to-right");
        cardsCounter++;
        if (cardsCounter === numOfCards) {
          cardsCounter = 0;
          document
            .querySelectorAll(".card__swipe")
            .forEach((c) => c.classList.remove("below"));
        }
      }, 300);
    }

    if (Math.abs(pullDeltaX) < decisionVal) {
      card.classList.add("reset");
    }

    setTimeout(function () {
      card.removeAttribute("style");
      card.classList.remove("reset");
      card
        .querySelectorAll(".card__swipe__choice")
        .forEach((choice) => choice.removeAttribute("style"));

      pullDeltaX = 0;
      animating = false;
    }, 300);
  }

  document.addEventListener("mousedown", function (e) {
    if (animating) return;

    if (e.target.closest(".card__swipe:not(.inactive)")) {
      card = e.target.closest(".card__swipe");
      cardReject = card.querySelector(".card__swipe__choice.m--reject");
      cardLike = card.querySelector(".card__swipe__choice.m--like");
      const startX = e.pageX || e.touches[0].pageX;

      const moveHandler = function (e) {
        const x = e.pageX || e.touches[0].pageX;
        pullDeltaX = x - startX;
        if (!pullDeltaX) return;
        pullChange();
      };

      const upHandler = function () {
        document.removeEventListener("mousemove", moveHandler);
        document.removeEventListener("mouseup", upHandler);
        document.removeEventListener("touchmove", moveHandler);
        document.removeEventListener("touchend", upHandler);
        if (!pullDeltaX) return; // prevents rapid click events
        release();
      };

      document.addEventListener("mousemove", moveHandler);
      document.addEventListener("mouseup", upHandler);
      document.addEventListener("touchmove", moveHandler);
      document.addEventListener("touchend", upHandler);
    }
  });
});