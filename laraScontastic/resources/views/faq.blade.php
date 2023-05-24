@extends('layouts/base')
@section('content')
        <!-- lista domande section start -->
            <div style="min-height:100px" class="mega_container">
                <p>test1</p>
             @isset($faqs)
                <p>test2</p>
                @foreach($faqs as $faq)
                <div class="domanda_card">
                    <h2 class="domanda">Domanda: {{$faq->domanda}}</h2>
                    <p class="risposta">Risposta: {{$faq->risposta}}</p>
                </div>
                @endforeach
              @endisset()
            </div>
        <!-- lista domande section end -->
@endsection