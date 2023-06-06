@extends('layouts.base')
@section('content')
        <!-- lista offerte section start -->

            
            <div class="mega_container">
                <h1 class="page_title">"LISTA OFFERTE"</h1>
                <!-- permette allo staff di aggiungere delle offerte -->
                @can('isStaff')
                    <h3><a href="{{ route('aggiunta-offerta') }}">Aggiungi Offerta</a></h3>
                @endcan
                @foreach ($allCompanies as $company) <!-- prende tutte le aziende -->
                <div id="content">
                    <div>
                        <!-- creo una condizione che inizialmente è sempre vera da passare nel while -->
                        @php
                            $condition = true; 
                        @endphp

                        @foreach ($activeOffers as $offer) <!-- prende tutte le offerte -->

                            @if ($offer->id_azienda == $company->id) <!-- prendo tuute le offerte relative ad una detrminata azienda -->
                                @while($condition)

                                    <!-- definisco la condizione -->
                                    @php
                                        $condition = $offer->id_azienda != $company->id;
                                    @endphp

                                    <h3>{{ $company->nome }}</h3> <!-- stampo il nome dell'azienda -->

                                    @if(!$condition) <!-- se la condizione è errata esce dal while -->
                                        @break
                                    @endif

                                @endwhile
                                <div class="card">
                                    <div class="card_inner">
                                        <a href="{{route('offerta', $offer->id)}}">
                                        <img class="card_img" src="{{ asset($offer->immagine) }}" alt="Immagine Offerta">
                                        <div class="info">
                                            <h3>{{ $offer->nome }}</h3>
                                        </div>
                                        </a>
                                    </div>                      
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                @endforeach 
            </div>
                        <!--Paginazione-->
                        @include('pagination.paginator', ['paginator' => $activeOffers])
                                    
        <!-- lista offerte section end -->
@endsection