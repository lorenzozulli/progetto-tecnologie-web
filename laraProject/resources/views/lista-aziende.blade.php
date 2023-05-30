@extends('layouts/base')
@section('content')
        <!-- lista aziende section start -->
        <div class="mega_container">
        <h1 style="text-align:center"> LISTA AZIENDE </h1>
            {{--@if(Auth::user()->livello == 3)--}}
                <h3><a href="{{ route('aggiunta-azienda') }}">Aggiungi Azienda</a></h3>
            {{--@endif--}}
                <div id="content">
                    @isset($companies)
                    @foreach ($companies as $company)
                    <div class="prodotto_card">
                    <div class="carousel__item">
                        <a href="{{route('azienda', $company->nome )}}">

                            @if($company->logo == $company->logo)
                            <img src="{{ asset($company->logo) }}" alt="Immagine Azienda">
                            @else
                            <img class="img" src="{{ asset('images/loghi-aziende/non_disponibile.png') }}">
                            @endif

                            <div class="info">
                                <h1 class="title_carousel_item">{{ $company->nome }}</h1>
                            </div>
                            @if(Auth::user()->livello == 3)                               
                                <form action="{{ route('delete-azienda',  $company['id'])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questa azienda?')" ><img  class="modifiche" src="{{ asset('images/delete.png') }}"></button>
                                </form>
                            @endif
                        </a>
                        </div>                    
                    </div>
                    @endforeach

                    <!--Paginazione-->
                    @include('pagination.paginator', ['paginator' => $companies])

                    @endisset()
                </div>
        </div>
        <!-- lista aziende section end -->
@endsection