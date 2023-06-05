@extends('layouts.base')
@section('content')
        <!-- lista offerte section start -->
            <div class="mega_container">
            <h1 class="page_title">"LISTA OFFERTE"</h1>
            @can('isStaff')
                <h3><a href="{{ route('aggiunta-offerta') }}">Aggiungi Offerta</a></h3>
            @endcan
                <div id="lista_offerte">
                    @isset($offers)
                    @foreach($offers as $offer)
                    <div class="card">
                        <div class="card_inner">
                            <a href="{{route('offerta', $offer->nome)}}">
                            <img class="card_img" src="{{ asset($offer->immagine) }}" alt="Immagine Offerta">
                                    <div class="info">
                                        <h3>{{ $offer->nome }}</h3>
                                        @can('isStaff')
                                            <a href="{{ route('modifica-offerta', $offer->id) }}"><img class="modifiche" src="{{ asset('images/edit.png') }}"></a>
                                        
                                            <form action="{{ route('delete-promo',  $offer['id'])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questa offerta?')" ><img class="modifiche" src="{{ asset('images/delete.png') }}"></button>
                                            </form>
                                        @endcan   
                                    </div>
                            </a>
                        </div>                      
                    </div>
                    @endforeach
                        
                        <!--Paginazione-->
                        @include('pagination.paginator', ['paginator' => $offers])
                    @endisset()                   
                </div>
            </div>
        <!-- lista offerte section end -->
@endsection