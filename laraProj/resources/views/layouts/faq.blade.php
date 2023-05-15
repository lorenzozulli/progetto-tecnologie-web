<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >     
        <title>"Scontastic: i migliori codici sconto in Italia"</title>
    </head>
    <body>
        <!-- header section start-->
        <div id="menu">
                @include('layouts/_navpublic')
        </div>
        <!-- header section end-->

        <!-- lista domande -->
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

        <!-- footer section start -->
        <div id="menu">
                @include('layouts/_footer')
        </div>
        <!-- footer section end -->
    </body>
</html>