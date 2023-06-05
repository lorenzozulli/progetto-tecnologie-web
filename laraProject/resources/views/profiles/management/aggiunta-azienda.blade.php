@extends('layouts/base')
@section('content')
<div class="mega_container">

    <div class="container-contact">
    <h3>Aggiunta Azienda</h3>
        <div class="wrap-contact">
            {{ Form::open(array('route' => 'aggiunta-azienda', 'class' => 'contact-form', 'enctype'=>'multipart/form-data')) }}

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

            <!-- Descrizione -->
            <div  class="wrap-input">
                {{ Form::label('descrizione', 'Descrizione', ['class' => 'label-input']) }}
                {{ Form::text('descrizione', '', ['class' => 'input', 'id' => 'descrizione']) }}
                @if ($errors->first('descrizione'))
                <ul class="errors">
                    @foreach ($errors->get('descrizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <!-- Ragione Sociale -->
            <div  class="wrap-input">
                {{ Form::label('ragioneSociale', 'Ragione Sociale', ['class' => 'label-input']) }}
                {{ Form::text('ragioneSociale', '', ['class' => 'input','id' => 'ragioneSociale']) }}
                @if ($errors->first('ragioneSociale'))
                <ul class="errors">
                    @foreach ($errors->get('ragioneSociale') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Tipologia -->
            <div  class="wrap-input">
                {{ Form::label('tipologia', 'Tipologia', ['class' => 'label-input']) }}
                {{ Form::text('tipologia', '', ['class' => 'input','id' => 'tipologia']) }}
                @if ($errors->first('tipologia'))
                <ul class="errors">
                    @foreach ($errors->get('tipologia') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Logo -->
            <div  class="wrap-input">
                {{ Form::label('logo', 'Logo', ['class' => 'label-input']) }}
                {{ Form::text('logo', '', ['class' => 'input', 'id' => 'logo']) }}
                @if ($errors->first('logo'))
                <ul class="errors">
                    @foreach ($errors->get('logo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <!-- Bottone di aggiunta -->
            <div class="container-form-btn">   
                             
                {{ Form::submit('Aggiunta', ['class' => 'form-btn1'])}}

            </div>
            
            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection