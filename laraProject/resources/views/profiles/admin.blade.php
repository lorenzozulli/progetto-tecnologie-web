@extends('layouts/base')
@section('content')
        <!-- admin section start -->
        <div class="mega_container">
            <h3 class="page_title">Area Admin</h3>
            <div class="page">
                <p>Benvenuto {{ Auth::user()->username }}</p>
                <h3>Clicca <a href="{{ route('modifica-staff') }}">qui</a> per gestire gli utenti</h3>
                <h3>Clicca <a href="{{ route('lista-aziende') }}">qui</a> per gestire le aziende</h3>
            </div>
        </div>
        <!-- admin section end -->
@endsection