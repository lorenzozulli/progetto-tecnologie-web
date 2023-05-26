@extends('layouts/base')
@section('content')
        <!-- lista aziende section start -->
        <div class="mega_container">
            <!-- inizio searchbar per azienda -->
                <div class="search_menu">
                    {{ Form::text('search','', ['class' => 'search_bar', 'placeholder' => 'Cerca aziende...']) }}
                    {{ Form::button('search', ['class' => 'search_button']) }}
                </div>
            <!-- fine searchbar per azienda -->
                <div id="content">
                    @isset($companies)
                    @foreach ($companies as $company)
                    <div class="lista_prodotti">
                    <div class="carousel__item">
                        <a href="{{route('azienda', $company->nome )}}">
                            <img class="img" src="images/loghi-aziende/non_disponibile.png">
                                <div class="info">
                                    <h1 class="title">{{ $company->nome }}</h1>
                                </div>
                        </a>
                        </div>                    
                    </div>
                    @endforeach
                    @endisset()
                </div>
        </div>
        <!-- lista aziende section end -->
@endsection