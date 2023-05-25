<meta charset="utf-8">
<title>"Scontastic: i migliori codici sconto in Italia</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="static">

    <div class="container-contact">
    <h3>Registrazione</h3>
        <div class="wrap-contact">
            {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}

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

            <!-- Cognome -->
            <div  class="wrap-input">
                {{ Form::label('cognome', 'Cognome', ['class' => 'label-input']) }}
                {{ Form::text('cognome', '', ['class' => 'input', 'id' => 'cognome']) }}
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
                {{ Form::text('eta', '', ['class' => 'input','id' => 'eta']) }}
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
                {{ Form::text('email', '', ['class' => 'input','id' => 'email']) }}
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
                {{ Form::text('telefono', '', ['class' => 'input', 'id' => 'telefono']) }}
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
                {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
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

            <!-- Conferma Password -->
            <div  class="wrap-input">
                {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
            </div>
            
            <!-- Bottone di registrazione -->
            <div class="container-form-btn">                
                {{ Form::submit('Registra', ['class' => 'form-btn1']) }}
            </div>

            <!-- Link per il login -->
            <div class="wrap-input">
                <a href="{{ route('login') }}">Sei già registrato? clicca qui per loggare</a>
            </div>
            
            {{ Form::close() }}
        </div>
    </div>

</div>