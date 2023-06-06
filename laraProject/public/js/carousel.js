let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  clearInterval(timer); // Cancella l'intervallo corrente
  showSlides(slideIndex += n);
  startTimer(); // Avvia un nuovo intervallo dopo aver cambiato manualmente l'immagine
}

// Thumbnail image controls
function currentSlide(n) {
  clearInterval(timer); // Cancella l'intervallo corrente
  showSlides(slideIndex = n);
  startTimer(); // Avvia un nuovo intervallo dopo aver cambiato manualmente l'immagine
}

let timer; // Variabile per memorizzare l'ID dell'intervallo

function startTimer() {
  timer = setInterval(function() {
    plusSlides(1); // Passa al prossimo slide ogni 5 secondi
  }, 5000); // 5000 millisecondi = 5 secondi
}

startTimer(); // Avvia il timer iniziale

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("carousel_image");
  let dots = document.getElementsByClassName("carousel__button");
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