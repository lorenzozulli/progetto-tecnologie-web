@extends('layouts.base')
@section('content')
    <!-- pagina azienda section start -->
        <div class="mega_container">
            <div class="mega_container_inner">
                <div class="azienda_card">
                    <img class="card_img" src="{{$company->logo}}">
                        <h1>{{$company->nome}}</h1>
                        <h3>{{$company->ragioneSociale}}</h3>
                        <h3>{{$company->tipologia}}</h3>
                        <p>{{$company->descrizione}}</p>
                </div>
            </div>
            <h1 class="page_title">Offerte di {{$company->nome}}</h1>
                @foreach($offers as $offer)
                    @if($offer->id_azienda == $company->id)
                        <div class="card">
                            <div class="card_inner">
                                <a href="{{route('offerta', $offer->id)}}">
                                    <img class="card_img" src="{{ asset($offer->immagine) }}" alt="Immagine Offerta">
                                        <div class="info">
                                            <h3>{{ $offer->nome }}</h3>
                                        </div>
                                </a>
                            </div>                      
                        </div>
                    @endif
                @endforeach
        </div>
    <br>
    <!-- pagina azienda section end -->
@endsection