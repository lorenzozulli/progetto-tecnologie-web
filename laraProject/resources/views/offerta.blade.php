@extends('layouts.base')
@section('content')
<!-- offerta section start -->
<div class="mega_container">
    <div class="mega_container_inner">
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
            <h1><a onclick="event.preventDefault(); document.getElementById('save-cp').submit();" href="">Acquisici</a></h1>
                    <form id="save-cp" action="{{ url('/coupon-acquisito/'.$offer['id'].'/'.Auth::user()->username) }}" method="GET">
                        {{ csrf_field() }}
        </div>
        </form> 
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
            <span style="color: red"> L'OFFERTA È SCADUTA! </span>   
        @endif
             
        <!-- inserire la data di scadenza -->
        
        <h3>Descrizione</h3>
        <p>{{$offer->modalitaFruizione}}</p>
        <h3>Luogo di fruizione</h3>
        <p>{{$offer->luogoFruizione}}</p>
            <!-- da inserire la descrizione del coupon-->
            @error('error')
            <span style="color: red">{{ $message }}</span>
            @enderror

            @can('isAdmin')
                 <p id="coupon_count"> Coupon emessi per questa offerta: <b>{{$coupon_count}}</b>.</p>
            @endcan            
    </div>
</div>
</div>
<!-- offerta section end -->
@endsection