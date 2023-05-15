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
        <div class="carousel_wrapper">
            <div class="card">
               <a href="#" target="blank">
                  <img class="img" src="#">
                  <h3>Test</h3>
               </a>
            </div>

            <div class="card">
               <a href="#" target="blank">
                  <img class="img" src="#">
                  <h3>Test</h3>
               </a>
            </div>

            <div class="card">
               <a href="#" target="blank">
                  <img class="img" src="#">
                  <h3>Test</h3>
               </a>
            </div>
        </div>
         <div class="bt"><a href="https://www.google.com/">Tutte le Aziende</a></div>
      <!-- aziende section end -->

        <!-- codes explanation section start -->
        <div class="codes_explanation">
               <h1 class="title">Cosa sono i codici?</h1>
               <p>Nell'ambito del commercio i codici sconto servono da un lato alle aziende, che vogliono fidelizzare i loro clienti, e ai clienti per usufruire di vantaggi
                   in ambito puramente monetario oppure di sconti di vario genere e tipologia.</p>
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