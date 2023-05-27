@extends('layouts/base')
@section('content')
        <!-- lista offerte section start -->
            <div class="mega_container">
                <div id="content">
                    @isset($offers)
                    @foreach ($offers as $offer)
                    <div class="lista_prodotti">
                         <a href="{{route('offerta', $offer->nome )}}">
                            <img class="img" src="images/loghi-aziende/non_disponibile.png">
                                <div class="info">
                                    <h1 class="title">{{ $offer->nome }}</h1>
                                </div>
                        </a>
                        </div>                    
                    </div>
                    @endforeach
                    @endisset()
                </div>
            </div>
        <!-- lista offerte section end -->
@endsection