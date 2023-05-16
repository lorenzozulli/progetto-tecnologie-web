<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>"Scontastic: i migliori codici sconto in Italia"</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <!-- header section start-->
        <div id="menu">
                @include('layouts/_header')
        </div>
        <!-- header section end-->
      <div class="mega_container">
        <!-- banner section start -->
        <div class="banner_bg">
         <div class="frame">
            <h1>INIZIA ORA <br>LO SHOPPING</h1>
            <div class="bt"><a href="https://www.google.com/">Compra adesso</a></div>
         </div>
         </div>
         <!-- banner section end -->
      <!-- banner bg main end -->

        <!-- Aziende section start -->

        <script>
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
        </script>
        <div class="carousel_wrapper">
            <div class="card">
               <a href="#" target="blank">
                  <img class="img" src="images/mock.png">
                  <h3>Test</h3>
               </a>
            </div>

            <div class="card">
               <a href="#" target="blank">
                  <img class="img" src="images/mock.png">
                  <h3>Test</h3>
               </a>
            </div>

            <div class="card">
               <a href="#" target="blank">
                  <img class="img" src="images/mock.png">
                  <h3>Test</h3>
               </a>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
         </div>
         <div class="bt"><a href="https://www.google.com/">Tutte le Aziende</a></div>
      <!-- aziende section end -->

        <!-- codes explanation section start -->
        <div class="codes_explanation">
               <h1 class="title">Cosa sono i codici?</h1>
               <p>Nell'ambito del commercio i codici sconto servono da un lato alle aziende, che vogliono fidelizzare i loro clienti, e ai clienti per usufruire di vantaggi
                  in ambito puramente monetario oppure di sconti di vario genere e tipologia.<br>
                  Un codice sconto è una stringa di caratteri, una sorta di password digitale, che, se inserita nell'apposito campo testuale fornito da ciascun negozio online in genere in fondo al carrello o alla pagina della cassa, ti permette di aggiudicarti certi benefit sulla tua spesa.<br>
                  Questi benefici possono essere o degli sconti in percentuale sul totale del carrello, degli sconti a cifra fissa, un omaggio all'interno del pacco o le spese di spedizione gratuite.</p>
               <h3>Sconto in percentuale:</h3>
               <p>Sono una semplice riduzione di prezzo in percentuale sul costo originario dell'articolo</p>
               <h3>Sconto fisso:</h3>
               <p>Sono una semplice riduzione di prezzo determinata dall'importo monetario sul costo originario dell'articolo</p>
        </div>
        <!-- codes explanation section end -->
      </div>
        <!-- footer section start -->
        <div id="menu">
                @include('layouts/_footer')
        </div>
        <!-- footer section end -->
        <script src="" async defer></script>
    </body>
</html>