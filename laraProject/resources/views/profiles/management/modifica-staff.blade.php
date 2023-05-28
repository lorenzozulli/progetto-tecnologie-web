@extends('layouts/base')
@section('content')
        <!-- modifica Staff section start -->
        <div class="mega_container">
            <p>ciao sono la pagina di modifica di un utente dello staff</p>
        </div>
        <div class="container-contact">
        <h3>Modifica</h3>
            <div class="wrap-contact">
                {{ Form::open(array('route' => 'modifica-staff', 'class' => 'contact-form')) }}
                <!-- Nome -->
                <div  class="wrap-input">
                    {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                    {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome', 'placeholder' => Auth::user()->nome]) }}
                    @if ($errors->first('nome'))
                    <ul class="errors">
                        @foreach ($errors->get('nome') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <!-- Cognome -->
                <div  class="wrap-input">   
                    {{ Form::label('cognome', 'Cognome', ['class' => 'label-input']) }}
                    {{ Form::text('cognome', '', ['class' => 'input', 'id' => 'cognome', 'placeholder' => Auth::user()->cognome]) }}
                    @if ($errors->first('cognome'))
                    <ul class="errors">
                        @foreach ($errors->get('cognome') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <!-- Password -->
                <div  class="wrap-input">
                    {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                    {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                    @if ($errors->first('password'))
                    <ul class="errors">
                        @foreach ($errors->get('password') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <!-- Conferma Password -->
                <div  class="wrap-input">
                    {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                    {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
                </div>

                <!-- Bottone di modifica -->
                <div class="container-form-btn">                
                    {{ Form::submit('Modifica Dati', ['class' => 'form-btn1']) }}
                </div>
        
            
                {{ Form::close() }}
            </div>
        </div>        
        <!-- modifica Staff section end -->
@endsection