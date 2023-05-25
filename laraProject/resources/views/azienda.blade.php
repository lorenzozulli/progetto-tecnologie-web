@extends('layouts.base')
@section('content')
        <!-- pagina azienda section start -->
            <div class="mega_container">
                <p>ciao sono {{$company['nome']}} 
                    

                La mia descrizione è {{$company['descrizione']}}

La mia tipologie è {{$company['tipologia']}}
                </p>
            </div>
        <!-- pagina azienda section end -->
@endsection