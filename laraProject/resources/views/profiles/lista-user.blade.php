@extends('layouts.base')
@section('content')
        <!-- lista utenti 1 section start -->
        <div class="mega_container">
        <h1 class="page_title">Lista Utenti di Livello 1</h1>
           
                <div id="content">
                    @isset($users)
                    @foreach ($users as $user)
                    @if($user->livello == 1)
                    <div class="prodotto_card">
                        <div class="carousel__item">

                            <!-- <a href="{{route('contaCoupon', $user->username)}}"> -->
                        
                            <div class="info">
                                <h1 class="title_carousel_item">{{ $user->username }}</h1>
                            </div>
                            @if(Auth::user()->livello == 3)
                            
                            <form action="{{ route('elimina-utente',  $user['username'])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo utente?')" ><img  class="modifiche" src="{{ asset('images/delete.png') }}"></button>
                            </form>
                            @endif
                            </a>
                        </div>                    
                    </div>
                    @endif
                    @endforeach

                    <!--Paginazione-->
                    @include('pagination.paginator', ['paginator' => $users])

                    @endisset()
                </div>
        </div>
        <!-- lista utenti 1 section end -->
@endsection