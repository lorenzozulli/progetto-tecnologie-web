@extends('layouts/base')
@section('content')
        <!-- admin section start -->
        <div class="mega_container">
            <h3>Area Admin</h3>
            <p>Benvenuto {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
            <p>Seleziona la funzione da attivare</p>
        </div>
        <!-- admin section end -->
@endsection