@extends('layouts.base')
@section('content')
<!-- offerta section start -->
<div class="mega_container">
    <div class="mega_container_inner">
        <!-- immagine offerta section start -->
            <img class="card_img" src="{{asset($offer->immagine)}}">
        <!-- immagine offerta section end -->

        <div class="coupon">
            <!-- se sei un utente non registato oppure di lv-->
            
            @guest
            <h3><a href="{{route('login')}}"> Registrati o accedi</a> per scoprire il codice</h3>
            @endguest

            @if ($offer->dataOraScadenza > date('Y-m-d H:i:s'))
                @can('isUser')
                    <div class="bt">
                        <h1><a onclick="event.preventDefault(); document.getElementById('save-cp').submit();" href="">Acquisici</a></h1>
                            <form id="save-cp" action="{{ url('/coupon-acquisito/'.$offer['id'].'/'.Auth::user()->username) }}" method="GET">
                                {{ csrf_field() }}
                            </form>
                    </div>
                @endcan
            @endif
        </div>
        <!-- coupon section end -->
        <div class="the_other_stuff">
            <!-- visualizza il nome e il cognome dell'utente -->
            @auth
                <p>Nome: {{ Auth::user()->nome }}</p>
                <p>Cognome: {{ Auth::user()->cognome }}</p>
            @endauth
            
            <!-- Se l'offerta è scaduta mostra il messaggio nell'else, altrimenti mostra la data e l'ora di scadenza -->
            @if ($offer->dataOraScadenza > date('Y-m-d H:i:s'))
                <h1>Il coupon scade il: {{$offer->dataOraScadenza}}</h1>
            @else
                <span style="color: red"> L'OFFERTA È SCADUTA! </span>   
            @endif
            
            <!-- Visualizza la modalità di fruizione -->
            <h3>Modalità di fruizione</h3>
            <p>{{$offer->modalitaFruizione}}</p>

            <!-- Visualizza il luogo di fruizione -->
            <h3>Luogo di fruizione</h3>
            <p>{{$offer->luogoFruizione}}</p>
            
            <!-- Nel caso di errori visualizza il messaggio in rosso -->
            @error('error')
            <span style="color: red">{{ $message }}</span>
            @enderror
            
            <!-- Nel caso si è admin fa vedere la statistica del totale dei coupon emessi per la determinata offerta -->
            @can('isAdmin')
            <p id="coupon_count"> Coupon emessi per questa offerta: <b>{{$coupon_count}}</b>.</p>
            @endcan            
        </div>
    </div>
</div>
<!-- offerta section end -->
@endsection