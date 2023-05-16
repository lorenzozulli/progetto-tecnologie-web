<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Scontastic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"">
    </head>
    <body>
    @section('title', 'Registrazione')

        @section('content')
        <div class="static">
            <h3>Login</h3>

            <div class="container-contact">
                <div class="wrap-contact1">
                    {{ Form::open(array('route' => 'login', 'class' => 'contact-form')) }}

                    <!-- Username -->           
                    <div  class="wrap-input">
                        {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
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
                    
                    <!-- Bottone di login -->
                    <div class="container-form-btn">                
                        {{ Form::submit('Login', ['class' => 'form-btn1']) }}
                    </div>

                    <!-- Link di eventuale registrazione -->
                    <div  class="wrap-input">
                        <a  href="{{ route('register') }}">Se non hai già un account registrati</a>
                    </div> 
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>
