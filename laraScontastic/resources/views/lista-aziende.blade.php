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
                    <div class="prod">
                       
                       <!-- <div class="prod-bgtop">
                            <div class="prod-bgbtm">
                                <div class="oneitem">
                                    <div class="image">
                                       
                                    </div>
                                    <div class="info">
                                        <h1 class="title">Nome: {{ $company->nome }}</h1>
                                        <p class="meta">Descrizione: {{ $company->descrizione }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="carousel__item">
                        <a href="#" target="blank">
                            <img class="img" src="images/loghi-aziende/non_disponibile.png">
                                <div class="info">
                                    <h1 class="title">Nome: {{ $company->nome }}</h1>
                                    <p class="meta">Descrizione: {{ $company->descrizione }}</p>
                                </div>
                        </a>
                    </div>
                    @endforeach
                    @endisset()
            </div>
        <!-- lista aziende section end -->
@endsection