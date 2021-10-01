function showResponsiveMenu() {
    const menu = document.getElementById("topnav_responsive_menu");
    const icon = document.getElementById("topnav_hamburger_icon");
    const root = document.getElementById("root");
    if (menu.className === "") {
      menu.className = "open";
      icon.className = "open";
      root.style.overflowY = "hidden";
    } else {
      menu.className = "";                    
      icon.className = "";
      root.style.overflowY = "";
    }
  }


  const activity = document.getElementById("activity");
  activity.addEventListener("click",function(){
    const instants = document.getElementsByClassName('instant');
    for (const instant of instants) {
        instant.classList.toggle('d-none');
       
    }

    const arrow = document.getElementById("arrow");
    arrow.classList.toggle('open');

  });




// formulaires
const message =
  "Merci nous avons bien reçu et nous vous répondrons dans les délais les plus brefs.\nL\'équipe Bash-stide";

document.getElementById("myform").addEventListener("submit", function (event) {
  event.preventDefault();
  alert(message);
});



// claire js carou

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
// claire js fin carou

