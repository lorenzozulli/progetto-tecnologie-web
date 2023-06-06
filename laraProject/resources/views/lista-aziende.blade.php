@extends('layouts.base')
@section('content')
        <!-- lista aziende section start -->
        <div class="mega_container">
        <h1 class="page_title">"Lista Aziende"</h1>
                <div id="lista_aziende">
                    @isset($companies)
                    @foreach ($companies as $company)
                    <div class="card">
                    <div class="card_inner">
                        <a href="{{route('azienda', $company->nome )}}">
                            <img class="card_img" src="{{ asset($company->logo) }}" alt="Immagine Azienda">
                            <div class="info">
                                <h1>{{ $company->nome }}</h1>
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