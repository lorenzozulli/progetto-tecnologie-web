@extends('layouts.base')
@section('content')
     <!-- AJAX script -->
     <script src="{{ asset('js/ajax.js') }}"></script>
        <!-- admin section start -->
            <div class="mega_container">
                <h1 class="page_title">Area Admin</h1>
                <div class="dashboard">
                @if(Auth::user()->genere == 'M')
                    <h3>Benvenuto</h3><br>
                    @endif
                    @if(Auth::user()->genere == 'F')
                    <h3>Benvenuta</h3><br>
                    @endif
                    @if(Auth::user()->genere == 'O')
                    <h3>Benvenut*</h3><br>
                    @endif
                    <p>Username: {{ Auth::user()->username}}</p>
                    <h3>Clicca <a href="{{ route('tabella-aziende') }}">qui</a> per gestire le aziende</h3>
                    <h3>Clicca <a href="{{ route('tabella-utenti') }}">qui</a> per gestire gli utenti</h3>
                    <h3>Clicca <a href="{{ route('tabella-faq') }}">qui</a> per gestire le faq</h3>
                    <h3>Statistiche:</h3>
                    <div>
                        <p id="n_coupon">-</p>
                    </div>
                    <script>
                        var couponEmessi = "{{ route('coupon-emessi') }}";
                    </script>
                </div>
            </div>
        <!-- admin section end -->
@endsection