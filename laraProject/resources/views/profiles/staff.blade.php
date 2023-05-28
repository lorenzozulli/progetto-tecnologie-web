@extends('layouts/base')
@section('content')
        <!-- staff section start -->
        <div class="mega_container">
            <h3>Area Staff</h3>
            <div class="page">
                @if(Auth::user()->genere == 'M')
                <p>Benvenuto<br>
                @endif
                @if(Auth::user()->genere == 'F')
                <p>Benvenuta<br>
                @endif
                @if(Auth::user()->genere == 'A')
                <p>Benvenut*<br>
                @endif
                Username: {{ Auth::user()->username}}<br>
                Nome: {{ Auth::user()->nome }}<br>
                Cognome: {{ Auth::user()->cognome }}<br>
                Eta: {{ Auth::user()->eta }}<br>
                Genere: {{ Auth::user()->genere }}<br>
                Livello: {{ Auth::user()->livello }}<br>
                Telefono: {{ Auth::user()->telefono }}<br>
                E-mail: {{ Auth::user()->email }}<br>
                </p>
                <h3>Clicca <a href="{{ route('modifica-staff') }}">qui</a> per modificare il tuo profilo</h3>
            </div>
        </div>
        <!-- staff section end -->
@endsection