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
                {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Cognome -->
            <div  class="wrap-input">
                {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }}
                {{ Form::text('surname', '', ['class' => 'input', 'id' => 'surname']) }}
                @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <!-- Sesso -->
            <div  class="wrap-input">
                {{ Form::label('sex', 'Sesso', ['class' => 'label-input']) }}
                <br> 
                {{ Form::select('Sesso', array('M' => 'Maschio', 'F' => 'Femmina', 'O' => 'Altro')) }}
            </div>
            
            <!-- Età -->
            <div  class="wrap-input">
                {{ Form::label('eta', 'Età', ['class' => 'label-input']) }}
                {{ Form::text('eta', '', ['class' => 'input','id' => 'eta']) }}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
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
                {{ Form::label('cellphone', 'Telefono', ['class' => 'label-input']) }}
                {{ Form::text('cellphone', '', ['class' => 'input', 'id' => 'cellphone']) }}
                @if ($errors->first('cellphone'))
                <ul class="errors">
                    @foreach ($errors->get('cellphone') as $message)
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