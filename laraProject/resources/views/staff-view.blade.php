@extends('layouts.base')
@section('content')
        <!-- pagina staff section start -->
            <div class="mega_container">
                <div class="staff_card">
                    <h1>Username: {{$user->username}}</h1>
                    <h3>Nome: {{$user->nome}}</h3>
                    <h3>Cognome: {{$user->cognome}}</h3>
                    <h3>Età: {{$user->eta}}</h3>
                    <h3>Genere: {{$user->genere}}</h3>
                    <h3>Livello: {{$user->livello}}</h3>
                    <h3>Password: {{$user->password}}</h3>
                    <h3>Telefono: {{$user->telefono}}</h3>
                    <h3>E-mail: {{$user->email}}</h3>
                </div>
            </div>
        <!-- pagina azienda section end -->
@endsection