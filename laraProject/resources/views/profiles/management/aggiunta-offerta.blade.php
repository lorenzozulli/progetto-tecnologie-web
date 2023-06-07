@extends('layouts.base')
@section('content')

    <!-- modifica User section start -->
    <div class="mega_container">
    <div class="container-contact">
    <h3>Aggiunta</h3>
        <div class="wrap-contact">
            
            {{ Form::open(['route' => 'aggiunta-offerta']) }}

            <!-- Nome -->
            <div  class="wrap-input">
                {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome']) }}
                @if ($errors->first('nome'))
                <ul class="errors">
                    @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Oggetto -->
            <div  class="wrap-input">   
                {{ Form::label('oggetto', 'Oggetto', ['class' => 'label-input']) }}
                {{ Form::text('oggetto', '', ['class' => 'input', 'id' => 'oggetto']) }}
                @if ($errors->first('oggetto'))
                <ul class="errors">
                    @foreach ($errors->get('oggetto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Id Azienda -->
            <div  class="wrap-input">
                {{ Form::label('id_azienda', 'ID Azienda', ['class' => 'label-input']) }}
                {{ Form::text('id_azienda', '', ['class' => 'input','id' => 'id_azienda']) }}
                
            </div>
            
            <!-- modalitaFruizione -->
            <div  class="wrap-input">
                {{ Form::label('modalitaFruizione', 'Modalità Fruizione', ['class' => 'label-input']) }}
                {{ Form::text('modalitaFruizione', '', ['class' => 'input','id' => 'modalitaFruizione']) }}
                @if ($errors->first('modalitaFruizione'))
                <ul class="errors">
                    @foreach ($errors->get('modalitaFruizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- luogoFruizione -->
            <div  class="wrap-input">
                {{ Form::label('luogoFruizione', 'Luogo Fruizione', ['class' => 'label-input']) }}
                {{ Form::text('luogoFruizione', '', ['class' => 'input','id' => 'luogoFruizione']) }}
                @if ($errors->first('luogoFruizione'))
                <ul class="errors">
                    @foreach ($errors->get('luogoFruizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- dataOraScadenza -->
            <div  class="wrap-input">
                {{ Form::label('dataOraScadenza', 'Data Ora Scadenza (dd-mm-aaaa)', ['class' => 'label-input']) }}
                {{ Form::text('dataOraScadenza', '', ['class' => 'input', 'id' => 'dataOraScadenza']) }}
                @if ($errors->first('dataOraScadenza'))
                <ul class="errors">
                    @foreach ($errors->get('dataOraScadenza') as $message)
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
    </div>
    <!-- modifica User section end -->
    </div>
@endsection