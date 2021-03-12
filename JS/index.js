var slideIndex = 0; // La variable "slideIndex" est égale à 0 //
showSlides();

function showSlides() {
  var i; // On déclare la variable "i" //
  var slides = document.getElementsByClassName("mySlides"); // var slides est égale à document.getElementsByClassName(mySlides) ce qui veux dire qu'on prend l'élément par sa classe nommée mySlides//

  var dots = document.getElementsByClassName("dot"); // var dots est égale à document.getElementsByClassName(dot) ce qui veux dire qu'on prend l'élément par sa classe nommée dot//

  for (i = 0; i < slides.length; i++) { // Quand i est égale à 0 alors i est infèrieur à slides.length et on rajoute un élément à i //

    slides[i].style.display = "none";   // On enlève slides[i].style.display avec "none" //
  }
  slideIndex++; // Et on ajoute un élément à slideIndex //
 
  if (slideIndex > slides.length) {slideIndex = 1} //Si slideIndex est supérieur à slides.lenght alors slideIndex est égale à 1 //   
  for (i = 0; i < dots.length; i++) { // Quand i est égale à 0, que i est infèrieur à dots.lenght et on rajoute un élément à i //
    dots[i].className = dots[i].className.replace(" active", ""); // Alors dots[i].className est égale à dots[i].className.replace(" active", "") //
  }
  slides[slideIndex-1].style.display = "block";  // slides[slideIndex-1].style.display est égale à "block" //
  dots[slideIndex-1].className += " active"; // dots[slideIndex-1].className est supérieur ou égale à "active" //
  setTimeout(showSlides, 5000); // Change les images toutes les 5 secondes //
}
// Pour le bouton... //
mybutton = document.getElementById("myBtn"); // mybutton est égale à document.getElementById("myBtn") ou bien encore:"On prend l'élément par son id "myBtn" //

// Scrolling user... //
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) { // Si les utilisateurs scrollent de 20px depuis le haut de la page vers le bas, alors on affiche le bouton //
    mybutton.style.display = "block"; // mybutton.style.display est égale à "block" //
  } else { // Sinon... //
    mybutton.style.display = "none"; // On le fait disparaitre! //
  }
}

// Quand les utilisateurs clicks sur le bouton... //
function topFunction() {
  document.body.scrollTop = 0; // Pour Safari
  document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE and Opera
} 