@extends('layouts/base')
@section('content')
        <!-- staff section start -->
        <div class="mega_container">
            <h3>Area Staff</h3>
            <p>Benvenuto {{ Auth::user()->nome }} {{ Auth::user()->cognome }}</p>
            <p>Seleziona la funzione da attivare</p>
        </div>
        <!-- staff section end -->
@endsection