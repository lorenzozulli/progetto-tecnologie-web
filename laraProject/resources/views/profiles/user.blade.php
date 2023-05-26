@extends('layouts/base')
@section('content')
        <!-- user section start -->
        <div class="mega_container">
            <h3>Area User</h3>
            <div class="page">
                <p>Benvenuto<br>
                    Username: {{ Auth::user()->username}}<br>
                    Nome: {{ Auth::user()->nome }}<br>
                    Cognome: {{ Auth::user()->cognome }}<br>
                    Eta: {{ Auth::user()->eta }}<br>
                    Genere: {{ Auth::user()->genere }}<br>
                    Livello: {{ Auth::user()->livello }}<br>
                    Telefono: {{ Auth::user()->telefono }}<br>
                    E-mail: {{ Auth::user()->email }}<br>
                </p>
                <h3>Clicca <a href="{{ route('modifica-user') }}">qui</a> per modificare il tuo profilo</h3>
            </div>
        </div>
        <!-- user section end -->
@endsection