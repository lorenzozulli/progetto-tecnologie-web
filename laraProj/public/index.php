<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>"Scontastic: scopri i migliori codici sconto in Italia"</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php

            use Illuminate\Contracts\Http\Kernel;
            use Illuminate\Http\Request;

            define('LARAVEL_START', microtime(true));

            /*
            |--------------------------------------------------------------------------
            | Check If The Application Is Under Maintenance
            |--------------------------------------------------------------------------
            |
            | If the application is in maintenance / demo mode via the "down" command
            | we will load this file so that any pre-rendered content can be shown
            | instead of starting the framework, which could cause an exception.
            |
            */

            if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
                require $maintenance;
            }

            /*
            |--------------------------------------------------------------------------
            | Register The Auto Loader
            |--------------------------------------------------------------------------
            |
            | Composer provides a convenient, automatically generated class loader for
            | this application. We just need to utilize it! We'll simply require it
            | into the script here so we don't need to manually load our classes.
            |
            */

            require __DIR__.'/../vendor/autoload.php';

            /*
            |--------------------------------------------------------------------------
            | Run The Application
            |--------------------------------------------------------------------------
            |
            | Once we have the application, we can handle the incoming request using
            | the application's HTTP kernel. Then, we will send the response back
            | to this client's browser, allowing them to enjoy our application.
            |
            */

            $app = require_once __DIR__.'/../bootstrap/app.php';

            $kernel = $app->make(Kernel::class);

            $response = $kernel->handle(
                $request = Request::capture()
            )->send();

            $kernel->terminate($request, $response);?>

            <div id="container">
                <header id="header">
                    <div class="containt_main">
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="index.html">Home</a>
                                <a href="fashion.html">Fashion</a>
                                <a href="electronic.html">Elettronica</a>
                                <a href="jewellery.html">Gioielleria</a>
                            </div>
                        <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                        <div class="header_box">
                            <nav class="navigation">
                                <ul>
                                    <li><a href="#">Aziende</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Account</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </header>
                <div id="content">
                    <div id="banner">
                        <h1 class="banner_title">START<br> SHOPPING NOW</h1>
                        <div class="button"><a href="#">Buy Now</a>
                    </div>
                    <div class="aziende_section">
                        <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container">
                                         <h1 class="aziende_title">Le nostre Aziende</h1>
                                            <div class="aziende_section_2">
                                                <div class="row">
                                                    <div class="box_main">
                                                        <h4 class="shirt_text">Amazon</h4>
                                                        <div class="electronic_img"><img src="images/laptop-img.png"></div>
                                                        <div class="btn_main">
                                                                <div class="seemore_bt"><a href="https://www.amazon.it/">See More</a></div>                                
                                                        </div>
                                                    </div>
                                                    <div class="box_main">
                                                        <h4 class="shirt_text">Nike</h4>
                                                        <div class="electronic_img"><img src="images/mobile-img.png"></div>
                                                        <div class="btn_main">
                                                            <div class="seemore_bt"><a href="https://www.nike.com/it/">See More</a></div>      
                                                    </div>
                                                </div>
                                                    <div class="box_main">
                                                        <h4 class="shirt_text">Steam</h4>
                                                        <div class="electronic_img"><img src="images/computer-img.png"></div>
                                                        <div class="btn_main">
                                                            <div class="seemore_bt"><a href="https://store.steampowered.com/?l=italian">See More</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="buynow_bt"><a href="https://www.google.com/">Tutte le Aziende</a></div>
                                </div>
                        </div>
                <div class="codes_explanation">
                    <article class="explanation">
                        <h1 class="aziende_title">Cosa sono i codici?</h1>
                        <p class="prova">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>
                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </article>
                </div>
                <div class="footer_section layout_padding">
                    <div class="container">
                        <div class="footer_logo"><a href="index.html"><img src="images/scontastic_draft.png"></a></div>
                    </div>
                </div>
                <div class="FAQ_section">
                    <div class="FAQ">
                        <p class="FAQ_text">You have any questions in mind? Click here: <a href="https://html.design">FAQ</a></p>
                    </div>
                </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>

