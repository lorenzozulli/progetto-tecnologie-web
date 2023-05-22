@extends('layouts/base')
@section('content')
        <!-- lista aziende section start -->
            <div class="mega_container">
                <!-- inizio searchbar -->
                <div class="search_menu">
                    {{ Form::text('search','', ['class' => 'search_bar', 'placeholder' => 'Cerca aziende...']) }}
                    {{ Form::button('search', ['class' => 'search_button']) }}
                </div>
                <!-- fine searchbar -->
                    <p>Ciao voglio rappresentare la lista delle aziende</p>
            </div>
        <!-- lista aziende section end -->
@endsection