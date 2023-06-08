@extends('layouts.app')
@section('content')
    <!-- controllo scadenza offerte section start -->
        <h1 class="page_title">Offerte Attive</h1>
            <div class="offers">
                @if ($activeOffers->count() > 0)
                    @foreach ($activeOffers as $offer)
                        <div class="offer">
                            <h3>{{ $offer->id }}</h3>
                            <p>{{ $offer->nome }}</p>
                            <p>{{ $offer->oggetto }}</p>
                            <p>{{ $offer->modalitaFruizione }}</p>
                            <p>{{ $offer->luogoFruizione }}</p>
                            <p>{{ $offer->dataOraCreazione }}</p>
                            <p>{{ $offer->dataOraScadenza }}</p>
                            <p>Scade il: {{ $offer->dataOraScadenza->format('d/m/Y') }}</p>
                        </div>
                    @endforeach
                @else
                    <p>Nessuna offerta attiva al momento.</p>
                @endif
            </div>
    <!-- controllo scadenza offerte section end -->
@endsection
