@extends('layouts/base')
@section('content')
        <!-- offerta section start -->
            <div class="mega_container">
                <!-- immagine azienda section start -->
                <div class="image_logo">
                    <img src="#">
                </div>
                <!-- immagine azienda section end -->
                
                <!-- coupon section start -->
                <div class="coupon">
                    @guest
                    <h3>Registrati per scoprire il codice</h3>
                    @endguest
                    <!-- collegamento con il coupon -->
                </div>
                <!-- coupon section end -->

                <div class="the_other_stuff">
                    <h1><a href="#">Acquisici</a> il coupon come</h1>
                    <!-- da mettere il nome e il cognome dell'utente -->
                    <h1>Il coupon scade il..</h1>
                    <!-- inserire la data di scadenza -->
                    <h1>Descrizione</h1>
                    <!-- da inserire la descrizione del coupon-->
                </div>
            </div>
        <!-- offerta section end -->
@endsection