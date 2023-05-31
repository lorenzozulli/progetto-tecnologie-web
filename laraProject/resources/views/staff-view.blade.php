@extends('layouts.base')
@section('content')
        <!-- pagina staff section start -->
            <div class="mega_container">
                <div class="staff_card">
                    <h1>{{$user->username}}</h1>
                    <h3>{{$user->nome}}</h3>
                    <h3>{{$user->cognome}}</h3>
                    <h3>{{$user->eta}}</h3>
                    <h3>{{$user->genere}}</h3>
                    <h3>{{$user->livello}}</h3>
                    <h3>{{$user->password}}</h3>
                    <h3>{{$user->telefono}}</h3>
                    <h3>{{$user->email}}</h3>
                </div>
            </div>
        <!-- pagina azienda section end -->
@endsection