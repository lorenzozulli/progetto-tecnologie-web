@extends('layouts.base')
@section('content')
    <!-- pagina azienda section start -->
        <div class="mega_container">
            <div class="mega_container_inner">
                <h1 class="page_title">La tua offerta</h1>
                    <div class="coupon_acquisito">
                        <h3>Il tuo coupon è : {{$coupon->codice}}</h3>
                            @auth
                                <p> Nome: {{ Auth::user()->nome }} </p>
                                <p> Cognome: {{ Auth::user()->cognome }} </p>
                            @endauth
                                <p>Fai uno screenshot di questa pagina se devi fruirne in negozio!</p>
                                <p>Ricorda che Modalità di fruizione, luogo di fruizione e data di scadenza sono riportati nella pagina dell'offerta stessa!</p>
                                    @error('error')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror   
                    </div>
            </div>
        </div>
    <!-- pagina azienda section end -->
@endsection









