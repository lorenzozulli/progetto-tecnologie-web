@extends('layouts.base')
@section('content')
<!-- tabella utenti section start -->
<div class="mega_container">
    <h1 class="page_title">Tabella Utenti</h1>

    <h3><a href="{{ route('aggiunta-staff') }}">Aggiungi membro dello Staff</a></h3>

    <!-- tabella utenti-->
    <table>
        <thead>
            <tr>
                <th>username</th>
                <th>nome</th>
                <th>cognome</th>
                <th>eta</th>
                <th>genere</th>
                <th>livello</th>
                <th>telefono</th>
                <th>email</th>
                <th>azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Users as $user)
            <tr>
                <td>
                    @if ($user->livello == '1')
                    <a href="{{route('info-utente', $user->username)}}">
                    @endif
                    {{$user->username}} </a>
                </td>
                <td>{{ $user->nome}}</td>
                <td>{{ $user->cognome }}</td>
                <td>{{ $user->eta }}</td>
                <td>{{ $user->genere }}</th>
                <td>{{ $user->livello }}</th>
                <td>{{ $user->telefono }}</th>
                <td>{{ $user->email }}</th>
                <td>
                    <!-- Per il profilo di livello 1 -->
                    @if ($user->livello == '1')
                    <form action="{{ route('elimina-utente', $user->username) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo utente?')"><img class="modifiche" src="{{ asset('images/delete.png') }}"></button>
                        </button>
                    </form>
                    <!-- Per il profilo di livello 2 -->
                    @elseif($user->livello == '2')
                    <a href="{{ url('/modifica-staff/'.$user->username.'/'.Auth::user()->livello)}}"><img class="modifiche" src="{{ asset('images/edit.png') }}"></a>
                    <form action="{{ route('elimina-utente', $user->username) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo utente?')"><img class="modifiche" src="{{ asset('images/delete.png') }}"></button>
                        </button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<!-- tabella utenti section end -->
@endsection