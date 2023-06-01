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
        <div id="header">
            @include('layouts/_header')
        </div>
        <!-- header section end-->

        <!-- Content section start -->
        <div id="content">
            @yield('content')
        </div>
        <!-- Content section end -->

        <!-- footer section start -->
        <div id="footer">
            @include('layouts/_footer')
        </div>
        <!-- footer section end -->
    </body>
</html>