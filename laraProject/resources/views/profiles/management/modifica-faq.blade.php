@extends('layouts.base')
@section('content')

    <!-- Modifica FAQ section start -->
    <div class="mega_container">
        <div class="container-contact">
            <h3>Modifica FAQ</h3>
            <div class="wrap-contact">

                {{ Form::open(array('route' => ['modifica-faq', $id], 'class' => 'contact-form')) }}
                @csrf

                <!-- Domanda -->
                <div class="wrap-input">
                    {{ Form::label('domanda', 'Domanda', ['class' => 'label-input']) }}
                    {{ Form::textarea('domanda', '', ['class' => 'input', 'id' => 'domanda']) }}
                    @if ($errors->first('domanda'))
                        <ul class="errors">
                        @foreach ($errors->get('domanda') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                    @endif
                </div>

                <!-- Risposta -->
                <div class="wrap-input">
                    {{ Form::label('risposta', 'Risposta', ['class' => 'label-input']) }}
                    {{ Form::textarea('risposta', '', ['class' => 'input', 'id' => 'risposta']) }}
                    @if ($errors->first('risposta'))
                        <ul class="errors">
                        @foreach ($errors->get('risposta') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                        </ul>
                    @endif
                </div>

                <!-- Bottone di modifica -->
                <div class="container-form-btn">
                    {{ Form::submit('Modifica', ['class' => 'form-btn1']) }}
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
    <!-- Modifica FAQ section end -->
@endsection
