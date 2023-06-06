@extends('layouts.base')
@section('content')
<!-- offerta section start -->
<div class="mega_container">

    <!-- immagine azienda section start -->
    
    <img class="card_img" src="{{asset($offer->immagine)}}">
    
    <!-- immagine azienda section end -->
    <!-- coupon section start -->
    <div class="coupon">
        @guest
        <h3><a href="{{route('login')}}"> Registrati o accedi</a> per scoprire il codice</h3>
        @endguest
        <!-- collegamento con il coupon -->
    </div>
    <!-- coupon section end -->
    <div class="the_other_stuff">
        @if ($offer->dataOraScadenza > date('Y-m-d H:i:s'))
        @can('isUser')
       
        <div class="bt">
            <h1><a onclick="event.preventDefault(); document.getElementById('save-cp').submit();" href="">Acquisici
                    <form id="save-cp" action="{{ url('/coupon-acquisito/'.$offer['id'].'/'.Auth::user()->username) }}" method="GET">
                        {{ csrf_field() }}
        </div>
        </form></a> il coupon come</h1>
        
        @endcan
        @endif
        @auth
        <p> Nome: {{ Auth::user()->nome }} </p>
        <p> Cognome: {{ Auth::user()->cognome }} </p>
        @endauth
        <!-- da mettere il nome e il cognome dell'utente -->
        @if ($offer->dataOraScadenza > date('Y-m-d H:i:s'))
        <h1>Il coupon scade il: {{$offer->dataOraScadenza}}</h1>
        @else 
            <span style="color: red"> IL CODICE è SCADUTO </span>
        @endif
        <!-- inserire la data di scadenza -->
        <h1>Descrizione</h1>
        <p> {{$offer->modalitaFruizione}}
            <!-- da inserire la descrizione del coupon-->
            @error('error')
            <span style="color: red">{{ $message }}</span>
            @enderror

            @can('isAdmin')
                 <p id="coupon_count"> Per questa  offerta sono stati emessi {{$coupon_count}} coupon.</p>
            @endcan
         
            
    </div>
</div>
<!-- offerta section end -->
@endsection