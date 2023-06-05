@extends('layouts.base')
@section('content')
        <!-- lista domande section start -->
            <div class="mega_container">
             <h1 class="page_title">"FAQ"</h1>
             @isset($faqs)
                @foreach($faqs as $faq)
                <div class="domanda_card">
                    <h2 class="domanda">{{$faq->domanda}}</h2>
                    <p class="risposta">{{$faq->risposta}}</p>
                </div>
                @endforeach
              @endisset()
            </div>
        <!-- lista domande section end -->
@endsection