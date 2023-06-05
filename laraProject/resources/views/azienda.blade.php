@extends('layouts.base')
@section('content')
        <!-- pagina azienda section start -->
            <div class="mega_container">
                <div class="azienda_card">
                    <img class="card_img" src="{{$company->logo}}">
                    <h1>{{$company->nome}}</h1>
                    <h3>{{$company->ragioneSociale}}</h3>
                    <h3>{{$company->tipologia}}</h3>
                    <p>{{$company->descrizione}}</p>
                </div>
            </div>
        <!-- pagina azienda section end -->
@endsection