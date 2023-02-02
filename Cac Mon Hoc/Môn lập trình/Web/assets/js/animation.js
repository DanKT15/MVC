
showSlides();

function showSlides() {

  let i;
  let slideIndex = 0;
  
  let slides = document.getElementsByClassName("mySlides");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slideIndex++;
  console.log(slideIndex);
  if (slideIndex > slides.length) {
    slideIndex = 1
  }
  // slides[slideIndex-1].style.display = "block";
  // setTimeout(showSlides, 2000); // Change image every 2 seconds
}
