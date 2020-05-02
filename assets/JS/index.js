//new responsiv navigation bar script
function myFunction() {
     var x = document.getElementById("myTopnav");
     if (x.className === "topnav") {
       x.className += " responsive";
     } else {
       x.className = "topnav";
     }
   }

   // automatic image slider
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}



var slideIndex = [1, 1];
var slideId = ["mySlides"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
     showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
     var i;
     var x = document.getElementsByClassName(slideId[no]);
     if (n > x.length) {
          slideIndex[no] = 1
     }
     if (n < 1) {
          slideIndex[no] = x.length
     }
     for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
     }
     x[slideIndex[no] - 1].style.display = "block";
}