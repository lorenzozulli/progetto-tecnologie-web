@extends('layouts/base')
@section('content')
        <!-- lista aziende section start -->
        <div class="mega_container">
        <h1 class="page_title">Lista Aziende</h1>
            {{--@if(Auth::user()->livello == 3)--}}
                <h3><a href="{{ route('aggiunta-azienda') }}">Aggiungi Azienda</a></h3>
            {{--@endif--}}
                <div id="content">
                    @isset($companies)
                    @foreach ($companies as $company)
                    <div class="prodotto_card">
                    <div class="carousel__item">
                        <a href="{{route('azienda', $company->nome )}}">

                            
                            
                            <img src="{{ asset($company->logo) }}" alt="Immagine Azienda">
                            

                            <div class="info">
                                <h1 class="title_carousel_item">{{ $company->nome }}</h1>
                            </div>
                            @if(Auth::user()->livello == 3)

                                <a href="{{ route('modifica-azienda', $company->id) }}"><img class="modifiche" src="{{ asset('images/edit.png') }}"></a>
                            
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