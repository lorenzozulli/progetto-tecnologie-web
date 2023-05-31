@extends('layouts.base')
@section('content')
        <!-- lista offerte section start -->
            <div class="mega_container">
                <h1 class="page_title">"Risultati di ricerca"</h1>
                <div id="content">
                    @forelse($Offerte as $offer)
                    <div class="prodotto_card">
                        <div class="carousel__item">
                            <a href="{{route('offerta', $offer->nome )}}">
                                <img class="img" src="images/loghi-aziende/non_disponibile.png">
                                    <div class="info">
                                        <h3 class="title_carousel_item">{{ $offer->nome }}</h3>
                                    </div>
                            </a>
                        </div>                      
                    </div>
                    @empty
                    <h1 class="page_title">Nessuna offerta trovata!</h1>
                    @endforelse          
                </div>
            </div>
        <!-- lista offerte section end -->
@endsection