@extends('layouts/base')
@section('content')
        <!-- tabella utenti section start -->
        <div class="mega_container">
            <h2>tabella utenti</h2>
        
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
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->nome}}</td>
                <td>{{ $user->cognome }}</td>
                <td>{{ $user->eta }}</td>
                <td>{{ $user->genere }}</th>
                <td>{{ $user->livello }}</th>
                <td>{{ $user->telefono }}</th>
                <td>{{ $user->email }}</th>
                <td>
                    @if ($user->livello === '1')
                    <!-- Per il profilo di livello 1 -->
                    <form action="{{-- --}}" method="POST"> 
                         @csrf
                         @method('DELETE')
                         <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo utente?')" ><img class="modifiche" src="{{ asset('images/delete.png') }}"></button>
                            Elimina
                         </button>
                   </form>
                   @else
                   <!-- Per il profilo di livello 2 -->
                   <a href= "{{-- --)}}">Modifica</a>
                   <a href= "{{route('elimina-utente'), $user->username}}">Cancella</a>
                   @if ($user->livello === '2')
                       <form action="{{-- --}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit">  <button>
                       </form>
                   @endif
                   @endif
                
                </td>
           </tr>
        @endforeach  
    </tbody>
</table>

        </div>
        <!-- tabella utenti section end -->
@endsection
