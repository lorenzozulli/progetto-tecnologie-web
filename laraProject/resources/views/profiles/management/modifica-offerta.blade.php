@extends('layouts.base')
@section('content')

    <!-- modifica offerta section start -->
    <div class="mega_container">
        <div class="container-contact">
            <h1 class="page_title">Modifica Offerta</h1>
            <div class="wrap-contact">
                {{ Form::open(array('route' => ['modifica-offerta', $id], 'class' => 'contact-form')) }}
                

                <!-- Nome -->
                <div  class="wrap-input">
                    {{ Form::label('nome', 'Nome Offerta', ['class' => 'label-input']) }}
                    {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome', 'placeholder' => $id->nome]) }}
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
                    {{ Form::label('oggetto', 'Oggetto Offerta', ['class' => 'label-input']) }}
                    {{ Form::text('oggetto', '', ['class' => 'input', 'id' => 'oggetto', 'placeholder' => $id->oggetto]) }}
                    @if ($errors->first('oggetto'))
                        <ul class="errors">
                        @foreach ($errors->get('oggetto') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                    @endif
                </div>

                <!-- Modalita di Fruizione -->
                <div  class="wrap-input">
                    {{ Form::label('modalitaFruizione', 'Modalita di Fruizione', ['class' => 'label-input']) }}
                    {{ Form::text('modalitaFruizione', '', ['class' => 'input', 'id' => 'modalitaFruizione', 'placeholder' => $id->modalitaFruizione]) }}
                    @if ($errors->first('modalitaFruizione'))
                        <ul class="errors">
                        @foreach ($errors->get('modalitaFruizione') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                    @endif
                </div>

                <!-- Luogo di Fruizione -->
                <div  class="wrap-input">
                    {{ Form::label('luogoFruizione', 'Luogo di Fruizione', ['class' => 'label-input']) }}
                    
                    {{ Form::text('luogoFruizione', '',['class' => 'input', 'id' => 'luogoFruizione', 'placeholder' => $id->luogoFruizione]) }}
                    @if ($errors->first('luogoFruizione'))
                        <ul class="errors">
                        @foreach ($errors->get('luogoFruizione') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                    @endif
                </div>

                <!-- id_azienda-->
                <div class="wrap-input">
                    <label class="label-input" for="id_azienda">Azienda</label>
                        <p class="label-input"><em>Se non selezionato verrà inserita la prima azienda registrata</em></p>
                            <select id="id_azienda" name="id_azienda" required>
                                <option value="NULL">seleziona</option>
                                    @foreach($company as $company)
                                        <option value="{{ $company['id'] }}">{{$company['id']}}: {{ $company['nome'] }}</option>
                                    @endforeach
                            </select>
                </div>

                <!-- dataOraScadenza -->
                <div  class="wrap-input">
                    {{ Form::label('dataOraScadenza', 'Data Ora Scadenza', ['class' => 'label-input']) }}
                    {{ Form::date('dataOraScadenza', '', ['class' => 'input', 'id' => 'dataOraScadenza']) }}
                    @if ($errors->first('dataOraScadenza'))
                        <ul class="errors">
                        @foreach ($errors->get('dataOraScadenza') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                    @endif
                </div>

                <!-- Bottone di modifica -->
                <div class="container-form-btn">                
                    {{ Form::submit('Modifica Offerta', ['class' => 'form-btn1']) }}
                </div>
              
                {{ Form::close() }}
            </div>
        </div>    
    </div>        
    <!-- modifica offerta section end -->
        
@endsection