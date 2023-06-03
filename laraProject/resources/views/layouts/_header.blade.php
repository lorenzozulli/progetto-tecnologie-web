<header>
    @if(request()->path() === 'lista-aziende')
    @include('layouts._sidenav')
    @endif

    <!-- script Javascript -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
     <script src="{{ asset('js/ajax.js') }}"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  
    <!-- inizio logo -->
    <a href="{{ route('home') }}"><img src="{{ asset('images/scontastic_draft.png') }}"></a>
    <!-- fine logo -->

    <!-- inizio searchbars -->
    <div class="search_menu">
        <form action="{{ url('cerca-offerte') }}" method="GET" class="search_form">
            <input id="search_offer" type="text" name="search_offer" value="" placeholder="Cerca offerte per nome o descrizione..." class="search_bar" />
            <span class="input-group-text" id="basic-addon1">_</span>
            <input id="search_company" type="text" name="search_company" value="" placeholder="Cerca offerte per azienda..." class="search_bar" />
            <span class="input-group-text" id="basic-addon1">_</span>
            <button type="submit" class="search_button" value="search">Cerca</button>
        </form>
    </div>

    <!-- Contenuto dei risultati di ricerca qui -->

    <!-- fine searchbars -->

    <!-- inizio link wrapper -->
    <div class="link_wrapper">
        <ul>
            <li><a href="{{ route('lista-aziende') }}">Aziende</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            @guest
            <li><a href="{{ route('login') }}">Account</a></li>
            @endguest
            @can('isUser')
            <li><a href="{{ route('user') }}">Account</a></li>
            @elsecan('isStaff')
            <li><a href="{{ route('staff') }}">Account</a></li>
            @elsecan('isAdmin')
            <li><a href="{{ route('admin') }}">Account</a></li>
            @endcan
            @auth
            <li><a href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @endauth
        </ul>
    </div>
    <!-- fine link wrapper -->
</header>