@extends('layouts/base')
@section('content')
        <!-- lista aziende section start -->
        <div class="mega_container">
        <h1 class="page_title">Risultati di ricerca</h1>
            {{--@if(Auth::user()->livello == 3)--}}
                <!--<h3><a href="{{ route('aggiunta-azienda') }}">Aggiungi Azienda</a></h3>-->
            {{--@endif--}}
                <div id="content">
                    @foreach ($searchProducts as $company)
                    <div class="prodotto_card">
                    <div class="carousel__item">
                        <a href="{{route('azienda', $company->nome )}}">
                            @if($company->logo == NULL)
                            <img class="img" src="{{ asset('images/loghi-aziende/non_disponibile.png') }}">
                            {{--@else--}}
                            <!-- <img src="data:image/png/jpeg;base64,{{-- base64_encode($tuple['logo']) --}}" alt="Immagine Azienda"> -->
                            @endif
                            <div class="info">
                                <h1 class="title_carousel_item">{{ $company->nome }}</h1>
                            </div>
                        </a>
                        </div>                    
                    </div>
                    @endforeach
                </div>
        </div>
        <!-- lista aziende section end -->
@endsection