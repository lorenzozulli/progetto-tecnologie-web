@extends('layouts/base')
@section('content')
        <!-- user section start -->
        <div class="mega_container">
            <h1 class="page_title">Area User</h1>
            <div class="dashboard">
                @if(Auth::user()->genere == 'M')
                <h3>Benvenuto</h3><br>
                @endif
                @if(Auth::user()->genere == 'F')
                <h3>Benvenuta</h3><br>
                @endif
                @if(Auth::user()->genere == 'A')
                <h3>Benvenut*</h3><br>
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
                @can('isUser')
                <h3>Clicca <a href="{{ route('modifica-user') }}">qui</a> per modificare il tuo profilo</h3>
                @endcan
            </div>
        </div>
        <!-- user section end -->
@endsection