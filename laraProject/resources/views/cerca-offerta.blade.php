@extends('layouts.base')
@section('content')
        <!-- lista offerte section start -->
            <div class="mega_container">
                <h1 class="page_title">"Risultati di ricerca"</h1>
                <div id="content">
                    @forelse($Offerte as $offer)
                    <div class="card">
                        <div class="card_inner">
                            <a href="{{route('offerta', $offer->nome )}}">
                            <img class="card_img" src="{{ asset($offer->immagine) }}" alt="Immagine Offerta">
                                    <div class="info">
                                        <h3>{{ $offer->nome }}</h3>
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