@extends('layouts.base')
@section('content')
    <!-- visualizza a schermo i dati dello user selezionato-->
    <div class="mega_container">
        <h1 class="page_title">Dati Utente</h1>
        <div class="dashboard">
            <p>Username: {{$datiUtente->username}}</p>
            <p>Nome: {{$datiUtente->nome}}</p>
            <p>Cognome: {{$datiUtente->cognome}}</p>
            <p>Età: {{$datiUtente->eta}}</p>
            <p>Genere: {{$datiUtente->genere}}</p>
            <p>Telefono: {{$datiUtente->telefono}}</p>
            <p>E-mail: {{$datiUtente->email}}</p>
            <h3>Statistiche: {{$datiUtente->username}} ha acquisito {{$coupon_user}} coupon.</h3>
        </div>

@endsection