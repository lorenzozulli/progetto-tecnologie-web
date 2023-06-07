@extends('layouts.base')
@section('content')
        <!-- modifica Staff section start -->
        <div class="mega_container">
            <div class="container-contact">
            <h3>Modifica</h3>
                <div class="wrap-contact">
                    {{ Form::open(array('route' => ['modifica-staff', $username,  $livello->livello], 'class' => 'contact-form')) }}

                    

                    @if($livello->livello == 2)

                    <!-- Nome -->
                    <div  class="wrap-input">
                        {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                        {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome', 'placeholder' => $username->nome]) }}
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
                        {{ Form::text('cognome', '', ['class' => 'input', 'id' => 'cognome', 'placeholder' => $username->cognome]) }}
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
                    @endif

                    @if($livello->livello == 3)

                    <!-- Nome -->
                    <div  class="wrap-input">
                        {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                        {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome', 'placeholder' => $username->nome]) }}
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
                        {{ Form::text('cognome', '', ['class' => 'input', 'id' => 'cognome', 'placeholder' => $username->cognome]) }}
                        @if ($errors->first('cognome'))
                        <ul class="errors">
                            @foreach ($errors->get('cognome') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    <!-- Sesso -->
                    <div  class="wrap-input">
                        {{ Form::label('genere', 'Genere', ['class' => 'label-input']) }}
                        <br> 
                        {{ Form::select('genere', array('M' => 'Maschio', 'F' => 'Femmina', 'O' => 'Altro')) }}
                    </div>
                
                    <!-- Età -->
                    <div  class="wrap-input">
                        {{ Form::label('eta', 'Età', ['class' => 'label-input']) }}
                        {{ Form::text('eta', '', ['class' => 'input','id' => 'eta', 'placeholder' => $username->eta]) }}
                        @if ($errors->first('eta'))
                        <ul class="errors">
                            @foreach ($errors->get('eta') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    <!-- Email -->
                    <div  class="wrap-input">
                        {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                        {{ Form::text('email', '', ['class' => 'input','id' => 'email', 'placeholder' => $username->email]) }}
                        @if ($errors->first('email'))
                        <ul class="errors">
                            @foreach ($errors->get('email') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    <!-- Telefono -->
                    <div  class="wrap-input">
                        {{ Form::label('telefono', 'Telefono', ['class' => 'label-input']) }}
                        {{ Form::text('telefono', '', ['class' => 'input', 'id' => 'telefono', 'placeholder' => $username->telefono]) }}
                        @if ($errors->first('telefono'))
                        <ul class="errors">
                            @foreach ($errors->get('telefono') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>

                    <!-- Username -->
                    <div  class="wrap-input">
                        {{ Form::label('username', 'username', ['class' => 'label-input']) }}
                        {{ Form::text('username', '', ['class' => 'input','id' => 'username', 'placeholder' => $username->username]) }}
                        @if ($errors->first('username'))
                        <ul class="errors">
                            @foreach ($errors->get('username') as $message)
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
                    @endif

                    <!-- Bottone di modifica -->
                    <div class="container-form-btn">                
                        {{ Form::submit('Modifica Dati', ['class' => 'form-btn1']) }}
                    </div>
            
                
                    {{ Form::close() }}
                </div>
            </div>        
            <!-- modifica Staff section end -->
        </div>
@endsection