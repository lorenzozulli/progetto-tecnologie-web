@extends('layouts/base')
@section('content')
        <!-- user section start -->
        <div class="mega_container">
            <h3>Area User</h3>
            <p>Benvenuto {{ Auth::user()->nome }} {{ Auth::user()->cognome }}
            {{ Auth::user()->livello }}
            </p>
            <p>Seleziona la funzione da attivare</p>
        </div>
        <!-- user section end -->
@endsection