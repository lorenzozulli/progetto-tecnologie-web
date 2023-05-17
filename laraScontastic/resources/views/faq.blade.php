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

        <!-- lista domande section start -->
            <div class="mega_container">
                <div class="domanda_card">
                    <h2>Domanda 1?</h2>
                    <p>Lorem ipsum dolor sid amet...</p>
                </div>

                <div class="domanda_card">
                    <h2>Domanda 2?</h2>
                    <p>Lorem ipsum dolor sid amet...</p>
                </div>

                <div class="domanda_card">
                    <h2>Domanda 3?</h2>
                    <p>Lorem ipsum dolor sid amet...</p>
                </div>

                <div class="domanda_card">
                    <h2>Domanda 4?</h2>
                    <p>Lorem ipsum dolor sid amet...</p>
                </div>
            </div>
        <!-- lista domande section end -->
        
        <!-- footer section start -->
        <div id="menu">
                @include('layouts/_footer')
        </div>
        <!-- footer section end -->
        <script src="" async defer></script>
    </body>
</html>