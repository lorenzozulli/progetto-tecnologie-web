@extends('layouts/base')
@section('content')
        <!-- lista offerte section start -->
            <div class="mega_container">
            <h1 style="text-align:center"> LISTA OFFERTE </h1>
            @if(Auth::user()->livello == 2)
                <p>Aggiungi offerta<br>
            @endif
                <div id="content">
                    @isset($offers)
                        @foreach ($offers as $offer)
                        <div class="prodotto_card">
                            <div class="carousel__item">
                                <a href="{{route('offerta', $offer->nome )}}">
                                    <img class="img" src="images/loghi-aziende/non_disponibile.png">
                                        <div class="info">
                                            <h3 class="title_carousel_item">{{ $offer->nome }}</h3>                                    
                                        </div>
                                        @if(Auth::user()->livello == 2)
                                            <a href="{{ route('modifica-offerta')}}"> <img src="images/edit.png" style="inline-size:50px;block-size:50px"/></a>
                                            <a href="{{ route('home') }}"><img src="images/delete.png" style="inline-size:50px;block-size:50px"/></a>
                                        @endif
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