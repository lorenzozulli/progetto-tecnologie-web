@extends('layouts/base')
@section('content')
     <!-- AJAX script -->
     <script src="{{ asset('js/ajax.js') }}"></script>
        <!-- admin section start -->
        <div class="mega_container">
            <h1 class="page_title">Area Admin</h1>
            <div class="dashboard">
                <p>Benvenut* {{ Auth::user()->username }}</p>
                <h3>Clicca <a href="{{ route('lista-aziende') }}">qui</a> per gestire le aziende</h3>
                <h3>Clicca <a href="{{ route('lista-user') }}">qui</a> per eliminare gli utenti</h3>
                <h3>Clicca <a href="{{ route('lista-staff') }}">qui</a> per gestire i membri dello staff</h3>
                <h3>Clicca <a href="{{ route('tabella-faq') }}">qui</a> per gestire le faq</h3>
                <h3>Statistiche:</h3>
                
                <div> <p id="n_coupon">-</p></div>
            </div>
        </div>
        <!-- admin section end -->
@endsection