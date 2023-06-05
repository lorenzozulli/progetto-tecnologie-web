@extends('layouts.base')
@section('content')
        <!-- lista offerte section start -->
            <div class="mega_container">
            <h1 class="page_title">"LISTA OFFERTE"</h1>
            @can('isStaff')
                <h3><a href="{{ route('aggiunta-offerta') }}">Aggiungi Offerta</a></h3>
            @endcan
                <div id="content">
                   
                    @foreach ($activeOffers as $offer)
                    <div class="card">
                        <div class="card_inner">
                        @can('isUser')
                            <a href="{{route('offerta', $offer->nome)}}">
                        @endcan
                        @can('isAdmin')
                            <a href="{{route('couponOfferta', $offer->id)}}">
                        @endcan
                            <img class="card_img" src="{{ asset($offer->immagine) }}" alt="Immagine Offerta">
                                    <div class="info">
                                        <h3>{{ $offer->nome }}</h3> 
                                    </div>
                            </a>
                        </div>                      
                    </div>
                    @endforeach
                    </div>    
                        <!--Paginazione-->
                        @include('pagination.paginator', ['paginator' => $activeOffers])
                                    
                </div>
            </div>
        <!-- lista offerte section end -->
@endsection