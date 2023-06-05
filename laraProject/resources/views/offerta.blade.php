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

        @can('isUser')
        <div class="bt">
            <h1><a onclick="event.preventDefault(); document.getElementById('save-cp').submit();" href="">Acquisici
                    <form id="save-cp" action="{{ url('/coupon-acquisito/'.$offer['id'].'/'.Auth::user()->username) }}" method="GET">
                        {{ csrf_field() }}
        </div>
        </form></a> il coupon come</h1>
        @endcan
        @auth
        <p> Nome: {{ Auth::user()->nome }} </p>
        <p> Cognome: {{ Auth::user()->cognome }} </p>
        @endauth
        <!-- da mettere il nome e il cognome dell'utente -->
        <h1>Il coupon scade il: {{$offer->dataOraScadenza}}</h1>
        <!-- inserire la data di scadenza -->
        <h1>Descrizione</h1>
        <p> {{$offer->modalitaFruizione}}
            <!-- da inserire la descrizione del coupon-->
            @error('error')
            <span style="color: red">{{ $message }}</span>
            @enderror
    </div>
</div>
<!-- offerta section end -->
@endsection