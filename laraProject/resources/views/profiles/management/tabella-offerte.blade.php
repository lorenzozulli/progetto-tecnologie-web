@extends('layouts.base')
@section('content')
        <!-- tabella offerte section start -->
        <div class="mega_container">
            <h1 class="page_title">Tabella Offerte</h1>
            <h3><a href="{{ route('aggiunta-offerta') }}">Aggiungi Offerta</a></h3>
        <!-- tabella offerte per il profilo staff -->    
        <table class="tabella">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Azienda</th>
                        <th>Nome</th>
                        <th>Oggetto</th>
                        <th>Modalità fruizione</th>
                        <th>Luogo fruizione</th>
                        <th>Data Ora Creazione</th>
                        <th>Data Ora Scadenza</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>               
                @foreach($activeOffers as $offer)
                    <tr>
                        <td>{{$offer['id']}}</td>
                        <td>{{$offer['id_azienda']}}</td>
                        <td>{{$offer['nome']}}</td>
                        <td>{{$offer['oggetto']}}</td>
                        <td>{{$offer['modalitaFruizione']}}</td>
                        <td>{{$offer['luogoFruizione']}}</td>
                        <td>{{$offer['dataOraCreazione']}}</td>
                        <td>{{$offer['dataOraScadenza']}}</td>
                        <td><a class="btn-table-update" href="{{ route('modifica-offerta', $offer->id) }}"><img class="modifiche" src="{{ asset('images/edit.png') }}"></a>
                            <form class="delete-form" action="{{ route('delete-promo',  $offer['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-table-delete" onclick="return confirm('Sei sicuro di voler eliminare questa offerta?')"><img class="modifiche" src="{{ asset('images/delete.png') }}"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach              
            </tbody>
        </table>

        </div>
        <!-- tabella offerte section end -->
@endsection
