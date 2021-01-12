let currentSlide = 1;

showSlider(currentSlide);

function nextSlide() { showSlider(currentSlide++); }
function previousSlide() { showSlider(currentSlide--); }
function setSlider(n) { showSlider(currentSlide = n); }

function showSlider(n) {
  let i;
  let slider = document.getElementsByClassName("slider");
  let dots = document.getElementsByClassName("dot");

  if (n > slider.length) {currentSlide = 1}    
  if (n < 1) {currentSlide = slider.length}
  for (i = 0; i < slider.length; i++) {
      slider[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slider[currentSlide-1].style.display = "flex";  
  dots[currentSlide-1].className += " active";
}