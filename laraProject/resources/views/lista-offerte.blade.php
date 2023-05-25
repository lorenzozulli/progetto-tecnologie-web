@extends('layouts/base')
@section('content')
        <!-- lista offerte section start -->
            <div class="mega_container">
                <div id="content">
                    @isset($offers)
                    @foreach ($offers as $offer)
                    <div class="prod">
                        <div class="prod-bgtop">
                            <div class="prod-bgbtm">
                                <div class="oneitem">
                                    <div class="image">
                                        @include('helpers/productImg', ['attrs' => 'imagefrm', 'imgFile' => $offer->image])
                                    </div>
                                    <div class="info">
                                        <h1 class="title">Nome: {{ $offer->nome }}</h1>
                                        <p class="meta">Descrizione: {{ $offer->oggetto }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endisset()
            </div>
        <!-- lista offerte section end -->
@endsection