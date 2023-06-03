<meta charset="utf-8">
<title>"Scontastic: i migliori codici sconto in Italia</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="static">

    <div class="container-contact">
    <h3>Statistiche</h3>
        <div class="wrap-contact">
            {{ Form::open(array('route' => 'statistiche', 'class' => 'contact-form')) }}

            <!-- Seleziona Statistica -->
            <div  class="wrap-input">
                <fieldset>
                <legend>Scegli quali coupon visuallizare</legend>
                    <input type="radio" id="tot" name="coupon" value="T">
                    <label for="tot">Totale Coupon</label><br>

                    <input type="radio" id="coUt" name="coupon" value="U">
                    <label for="coUt">Coupon Utente</label><br>

                    <input type="radio" id="cOff" name="coupon" value="O">
                    <label for="cOff">Coupon Offerta</label>
            </fieldset>
            </div>

            <!-- Utenti -->
            <div  class="wrap-input">
                {{ Form::label('utenti', 'Utenti', ['class' => 'label-input']) }}
                <br> 
                {{ Form::select('utenti', array('M' => 'Maschio', 'F' => 'Femmina', 'O' => 'Altro')) }}
            </div>

            <!-- Bottone di ok -->
            <div class="container-form-btn">
                {{ Form::reset('Reset', ['class' => 'form-btn1']) }}             
                {{ Form::submit('Ok', ['class' => 'form-btn1']) }}
            </div>

            
            
            {{ Form::close() }}
        </div>
    </div>

</div>