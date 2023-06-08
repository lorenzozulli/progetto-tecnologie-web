@extends('layouts.base')
@section('content')
    <!-- tabella faqs section start -->
        <div class="mega_container">
        <h1 class="page_title">Tabella FAQ</h1>
            <h3><a href="{{ route('aggiunta-faq') }}">Aggiungi Faqs</a></h3>
        <!-- tabella faqs -->    
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>domanda</th>
                        <th>risposta</th>
                        <th>azioni</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($Faqs as $faq)
                    <tr>
                        <td>{{ $faq->id }}</td>
                        <td>{{ $faq->domanda}}</td>
                        <td>{{ $faq->risposta }}</td>
                        <td>
                            <a href="{{route('modifica-faq', $faq['id'] )}}"><img class="modifiche" src="{{ asset('images/edit.png') }}"></a>
                                <form action="{{route('delete-faq', $faq->id)}}" method="POST"> 
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questa faq?')" ><img class="modifiche" src="{{ asset('images/delete.png') }}"></button>
                                </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    <!-- tabella faqs section end -->
@endsection
