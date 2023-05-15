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

        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_title">Start <br>Shopping NOW</h1>
                           </div>
                        </div>
                     </div>
                     <div class="buynow_bt"><a href="https://www.google.com/">Buy Now</a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->

        <!-- Aziende section start -->
        <div class="carousel_wrapper">
            <div class="card">
               <a href="#" target="blank">
               <img class="img" src="#">
               <h1>Test</h1>
               </a>
            </div>
        </div>
         <div class="buynow_bt"><a href="https://www.google.com/">Tutte le Aziende</a></div>
      </div>
      <!-- aziende section end -->

        <!-- codes explanation section start -->
        <div class="codes_explanation">
            <article class="explanation">
               <h1 class="aziende_title">Cosa sono i codici?</h1>
               <p class="prova">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>
                  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </article>
        </div>
        <!-- codes explanation section end -->

        <!-- footer section start -->
        <div id="menu">
                @include('layouts/_footer')
        </div>
        <!-- footer section end -->
        <script src="" async defer></script>
    </body>
</html>