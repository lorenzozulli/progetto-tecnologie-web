<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
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

            <p>prova testuale</p>

        <script src="" async defer></script>
    </body>
</html>

