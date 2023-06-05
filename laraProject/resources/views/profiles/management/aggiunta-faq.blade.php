@extends('layouts/base')
@section('content')

    <!-- modifica Faq section start -->
    <div class="mega_container">
    <div class="container-contact">
    <h3>Aggiunta</h3>
        <div class="wrap-contact">
            
            {{ Form::open(['route' => 'aggiunta-faq']) }}

            <!-- Domanda -->
            <div  class="wrap-input">
                {{ Form::label('domanda', 'Domanda', ['class' => 'label-input']) }}
                {{ Form::text('domanda', '', ['class' => 'input', 'id' => 'domanda']) }}
                @if ($errors->first('domanda'))
                <ul class="errors">
                    @foreach ($errors->get('domanda') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Risposta -->
            <div  class="wrap-input">   
                {{ Form::label('risposta', 'Risposta', ['class' => 'label-input']) }}
                {{ Form::text('risposta', '', ['class' => 'input', 'id' => 'oggetto']) }}
                @if ($errors->first('risposta'))
                <ul class="errors">
                    @foreach ($errors->get('risposta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
             
            <!-- Bottone di aggiunta -->
            <div class="container-form-btn">    
           

           {{ Form::submit('Aggiungi', ['class' => 'form-btn1']) }}
           </div>
       
           {{ Form::close() }}
           
            
        </div>
    <!-- modifica User section end -->
    </div>
@endsection