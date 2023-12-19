document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll(".slide");
    let slideIndex = 0;
  
    function showSlide(index) {
      if (index >= slides.length) {
        slideIndex = 0;
      } else if (index < 0) {
        slideIndex = slides.length - 1;
      }
  
      const offset = -slideIndex * slides[0].offsetWidth;
      slider.style.transform = `translateX(${offset}px)`;
    }
  
    function changeSlide(n) {
      slideIndex += n;
      showSlide(slideIndex);
    }
  
    setInterval(function() {
      slideIndex++;
      showSlide(slideIndex);
    }, 5000); // Change slide every 5 seconds
  });


  

