@extends('layouts.base')
@section('content')
    <!-- staff section start -->
        <div class="mega_container">
            <h1 class="page_title">Area Staff</h1>
            <div class="dashboard">
                @if(Auth::user()->genere == 'M')
                <h3>Benvenuto</h3><br>
                @endif
                @if(Auth::user()->genere == 'F')
                <h3>Benvenuta</h3><br>
                @endif
                @if(Auth::user()->genere == 'O')
                <h3>Benvenut*</h3><br>
                @endif
                <p>
                    Username: {{ Auth::user()->username}}<br>
                    Nome: {{ Auth::user()->nome }}<br>
                    Cognome: {{ Auth::user()->cognome }}<br>
                    Eta: {{ Auth::user()->eta }}<br>
                    Genere: {{ Auth::user()->genere }}<br>
                    Livello: {{ Auth::user()->livello }}<br>
                    Telefono: {{ Auth::user()->telefono }}<br>
                    E-mail: {{ Auth::user()->email }}<br>
                </p>
                <h3>Clicca <a href="{{ url('/modifica-staff/'.Auth::user()->username.'/'.Auth::user()->livello)}}">qui</a> per modificare il tuo profilo</h3>
                <h3>Clicca <a href="{{ route('tabella-offerte') }}">qui</a> per gestire le promozioni</h3>
              
            </div>
        </div>
    <!-- staff section end -->
@endsection