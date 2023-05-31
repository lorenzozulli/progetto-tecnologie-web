<header>
    @if(request()->path() === 'lista-aziende')
        @include('layouts._sidenav')
    @endif
    <!-- inizio logo -->
    <a href="{{ route('home') }}"><img src="{{ asset('images/scontastic_draft.png') }}"></a>
    <!-- fine logo -->

    <!-- inizio searchbars -->
    <div class="search_menu">
        <form action="{{ url('cerca-offerte') }}" method="GET">
            <input id="search_offer" type="text" name="search_offer" value="" placeholder="Cerca offerte per nome o descrizione..." class="search_bar"/>
            <input id="search_company" type="text" name="search_company" value="" placeholder="Cerca offerte per azienda..." class="search_bar"/>
            <button type="submit" class="search_button" value="search"/>Search</button>
        </form>
    </div>
    <!-- fine searchbars -->

    <!-- inizio link wrapper -->
    <div class="link_wrapper">
        <ul>
            <li><a href="{{ route('lista-aziende') }}">Aziende</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            @guest
                <li><a href="{{ route('login') }}">Account</a></li>
            @endguest
            @auth
                <li><a href="{{ route('account') }}">Account</a></li>
            <li>
            <li><a href="" class="highlight" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endauth
        </ul>
    </div>
    <!-- fine link wrapper -->
</header>