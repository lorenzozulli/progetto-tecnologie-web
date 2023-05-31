@extends('layouts/base')
@section('content')
        <!-- tabella offerte section start -->
        <div class="mega_container">
            <h2>tabella offerte</h2>
        
        <!-- tabella offerte per il profilo staff -->    
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>oggetto</th>
            <th>modalitaFruizione</th>
            <th>luogoFruizione</th>
            <th>dataOraCreazione</th>
            <th>dataOraScadenza</th>
            <th>azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($offers as $offer)
            <tr>
                <td>{{ $offer->id }}</td>
                <td>{{ $offer->nome}}</td>
                <td>{{ $offer->oggetto }}</td>
                <td>{{ $offer->modalitaFruizione }}</td>
                <td>{{ $offer->dataOraCreazione}}</th>
                <td>{{ $offer->dataOraScadenza}}</th>
                <td>
                    <a href="{{ route('modifica-offerte , $offer ->id) }}">Modifica</a>
                    <form action="{{-- route('delete-promo',$offer ->id) --}}" method="DELETE"> 
                         @csrf
                         {{--@method('DELETE')--}}
                         <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questa offerta?')" ><img class="modifiche" src="{{ asset('images/delete.png') }}"></button>
                   </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

        </div>
        <!-- tabella offerte section end -->
@endsection
