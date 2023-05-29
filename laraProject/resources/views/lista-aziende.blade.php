@extends('layouts/base')
@section('content')
        <!-- lista aziende section start -->
        <div class="mega_container">
        <h1 style="text-align:center"> LISTA AZIENDE </h1>
                <div id="content">
                    @isset($companies)
                    @foreach ($companies as $company)
                    <div class="prodotto_card">
                    <div class="carousel__item">
                        <a href="{{route('azienda', $company->nome )}}">
                            @if($company->logo == NULL)
                            <img class="img" src="{{ asset('images/loghi-aziende/non_disponibile.png') }}">
                            @else
                            <img class="img" src="{{ asset('images/loghi-aziende'. base64_decode($logo)) }}">
                            @endif
                            <div class="info">
                                <h1 class="title_carousel_item">{{ $company->nome }}</h1>
                            </div>
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