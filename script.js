let currentIndex = 0;

function showNextSlide() {
  const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');
  currentIndex = (currentIndex + 1) % slides.length;
  slider.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Auto-slide every 3 seconds
setInterval(showNextSlide, 
