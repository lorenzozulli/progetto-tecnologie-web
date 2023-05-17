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
            <!-- Aziende carousel section start -->
         <div class="carousel">
            <div class="item_wrapper">
               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3 class="title">Test 1</h3>
                  </a>
               </div>

               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 2</h3>
                  </a>
               </div>

               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 3</h3>
                  </a>
               </div>
            </div>
            <div class="item_wrapper">
               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 4</h3>
                  </a>
               </div>

               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 5</h3>
                  </a>
               </div>

               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 6</h3>
                  </a>
               </div>
            </div>
            <div class="item_wrapper">
               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 7</h3>
                  </a>
               </div>

               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 8</h3>
                  </a>
               </div>

               <div class="carousel__item">
                  <a href="#" target="blank">
                     <img class="img" src="images/mock.png">
                     <h3>Test 9</h3>
                  </a>
               </div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
         </div>
         <div class ="button_wrapper" style="text-align:center">
            <span class="carousel__button" onclick="currentSlide(1)"></span>
            <span class="carousel__button" onclick="currentSlide(2)"></span>
            <span class="carousel__button" onclick="currentSlide(3)"></span>
         </div>

         <script src="js/carousel.js"></script>
        </div>
        <!-- footer section start -->
        <div id="menu">
                @include('layouts/_footer')
        </div>
        <!-- footer section end -->
        <script src="" async defer></script>
    </body>
</html>