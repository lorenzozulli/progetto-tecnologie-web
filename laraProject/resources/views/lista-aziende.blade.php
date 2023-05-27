@extends('layouts/base')
@section('content')
        <!-- lista aziende section start -->
        <div class="mega_container">
        <h1 style="text-align:center"> LISTA AZIENDE </h1>
            <!-- inizio searchbar per azienda -->
                <div class="search_menu">
                    {{ Form::text('search','', ['class' => 'search_bar', 'placeholder' => 'Cerca aziende...']) }}
                    {{ Form::button('search', ['class' => 'search_button']) }}
                </div>
            <!-- fine searchbar per azienda -->
                <div id="content">
                    @isset($companies)
                    @foreach ($companies as $company)
                    <div class="prodotto_card">
                    <div class="carousel__item">
                        <a href="{{route('azienda', $company->nome )}}">
                            <img class="img" src="images/loghi-aziende/non_disponibile.png">
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