let currentSlide = 1;

showSlider(currentSlide);

function setSlider(n) {
  showSlider((currentSlide = n));
}

function showSlider(n) {
  let i;
  let slider = document.getElementsByClassName("slider");
  let dots = document.getElementsByClassName("dot");

  if (n > slider.length) {
    currentSlide = 1;
  }

  if (n < 1) {
    currentSlide = slider.length;
  }

  for (i = 0; i < slider.length; i++) {
    slider[i].classList.add("fade");
    slider[i].style.zIndex = 0;
  }

  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  setTimeout(() => {
    slider[currentSlide - 1].classList.remove("fade");
    slider[currentSlide - 1].style.zIndex = 1;
  }, 800);

  dots[currentSlide - 1].className += " active";
}
