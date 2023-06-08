@extends('layouts.base')
@section('content')
    <!-- tabella aziende section start -->
        <div class="mega_container">
        <h1 class="page_title">Tabella Aziende</h1>

        @can('isAdmin')
            <h3><a href="{{ route('aggiunta-azienda') }}">Aggiungi Azienda</a></h3>
        @endcan
        
        <!-- tabella delle aziende -->    
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>descrizione</th>
                        <th>nome</th>
                        <th>ragioneSociale</th>
                        <th>tipologia</th>
                        <th>azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Companies as $company)
                        <tr>
                            <td>{{ $company->id }}</td>
                            <td>{{ $company->descrizione}}</td>
                            <td>{{ $company->nome }}</td>
                            <td>{{ $company->ragioneSociale }}</td>
                            <td>{{ $company->tipologia}}</th>
                            <td>
                                <a href="{{ route('modifica-azienda', $company->id) }}"><img class="modifiche" src="{{ asset('images/edit.png') }}"></a>
                                <form action="{{route('delete-azienda', $company->id)}}" method="POST"> 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questa azienda?')" ><img class="modifiche" src="{{ asset('images/delete.png') }}"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    <!-- tabella aziende section end -->
@endsection
