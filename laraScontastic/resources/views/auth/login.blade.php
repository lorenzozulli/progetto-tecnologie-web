
        <meta charset="utf-8">
        <title>"Scontastic: i migliori codici sconto in Italia</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="static">

    <div class="container-contact">
        <h3>Login</h3>
            <div class="wrap-contact">
                {{ Form::open(array('route' => 'login', 'class' => 'contact-form')) }}
                        
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
                
                <div class="container-form-btn">                
                    {{ Form::submit('Login', ['class' => 'form-btn1']) }}
                </div>

                <div  class="wrap-input">
                    <a  href="{{ route('register') }}">Non hai un account? registrati</a>
                </div> 
                
                {{ Form::close() }}
            </div>
    </div>

</div>
