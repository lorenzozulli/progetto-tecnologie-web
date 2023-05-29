@extends('layouts/base')
@section('content')

        <!-- modifica offerta section start -->
        <div class="mega_container">
            <p>ciao sono la pagina di modifica di una offerta</p>
        </div>
        <div class="container-contact">
        <h3>Modifica Offerta</h3>
            <div class="wrap-contact">
                {{ Form::open(array('route' => 'modifica-offerta', 'class' => 'contact-form')) }}

                <!-- Nome -->
                <div  class="wrap-input">
                    {{ Form::label('nome', 'Nome Offerta', ['class' => 'label-input']) }}
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
                    {{ Form::label('oggetto', 'Oggetto Offerta', ['class' => 'label-input']) }}
                    {{ Form::text('oggetto', '', ['class' => 'input', 'id' => 'oggetto']) }}
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
                    {{ Form::text('modalitaFruizione', '', ['class' => 'input', 'id' => 'modalitaFruizione']) }}
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
                    
                    {{ Form::text('luogoFruizione', '',['class' => 'input', 'id' => 'luogoFruizione']) }}
                    @if ($errors->first('luogoFruizione'))
                    <ul class="errors">
                        @foreach ($errors->get('luogoFruizione') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <!-- id azienda -->
                <div  class="wrap-input">
                    {{ Form::label('id_azienda', 'ID Azienda', ['class' => 'label-input']) }}
                    {{ Form::text('id_azienda', '',['class' => 'input', 'id' => 'id_azienda']) }}
                    @if ($errors->first('id_azienda'))
                    <ul class="errors">
                        @foreach ($errors->get('id_azienda') as $message)
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
        <!-- modifica offerta section end -->
        
@endsection