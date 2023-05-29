
<header>
    <!-- Script per la gestione della sidenav -->
    <script src="{{ asset('js/sidenav.js') }}"></script>

        <!-- Inizio HTML della sidenav -->
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <h1 class="category">CATEGORIE</h1>
            @isset($companies)
            @foreach($companies as $company)
            <a href="{{ route('tipologia', $company->tipologia) }}">{{$company->tipologia}}</a>
            @endforeach
            @endisset()
        </div>
        <!-- fine HTML della sidenav -->

    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()"><img src="{{ asset('images/toggle_icon.png') }}"></span>
    <!-- inizio logo -->
    <a href="{{ route('home') }}"><img src="{{ asset('images/scontastic_draft.png') }}"></a>
    <!-- fine logo -->

    <!-- inizio searchbars -->
    <div class="search_menu">
    {{ Form::open(array('route' => 'searchOffer', 'class' => 'search_menu')) }}
    @method('GET')
        {{ Form::text('search','', ['class' => 'search_bar', 'placeholder' => 'Cerca offerte...']) }}
        {{ Form::submit('search', ['class' => 'search_button']) }}
    {{ Form::close() }}

    {{ Form::open(array('route' => 'searchCompany', 'class' => 'search_menu')) }}
    @method('GET')
        {{ Form::text('search','', ['class' => 'search_bar', 'placeholder' => 'Cerca aziende...']) }}
        {{ Form::submit('search', ['class' => 'search_button']) }}
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
            </li>
            @endauth
        </ul>
    </div>
    <!-- fine link wrapper -->
</header>