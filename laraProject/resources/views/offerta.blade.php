@extends('layouts/base')
@section('content')
        <!-- offerta section start -->
            <div class="mega_container">
                <!-- immagine azienda section start -->
                <div class="image_logo">
                    <img src="../images/loghi_aziende/}}">
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
                    <h1><a href="('lista-offerte')">Acquisici</a> il coupon come</h1>
                    <p> Nome: {{-- Auth::user()->nome --}} </p>
                    <p> Cognome: {{-- Auth::user()->cognome --}} </p>
                    <!-- da mettere il nome e il cognome dell'utente -->
                    <h1>Il coupon scade il: {{$offer->dataOraScadenza}}</h1>
                    <!-- inserire la data di scadenza -->
                    <h1>Descrizione</h1>
                    <p> {{$offer->modalitaFruizione}}
                    <!-- da inserire la descrizione del coupon-->
                </div>
            </div>
        <!-- offerta section end -->
@endsection