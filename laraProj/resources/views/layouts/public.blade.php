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

         <!-- end #menu -->
         <div id="page">
                <div id="page-bgtop">
                    <div id="page-bgbtm">
                        @yield('content')
                        <div style="clear: both;">&nbsp;</div>
                    </div>
                </div>
            </div>

        <!-- footer section start -->
        <div id="menu">
                @include('layouts/_footer')
        </div>
        <!-- footer section end -->
    </body>
</html>