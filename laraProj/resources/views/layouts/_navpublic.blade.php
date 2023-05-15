<div class="wrapper">
            <div class="header">
                     <div class="logo"><a href="index.html"><img src="images/scontastic_draft.png"></a></div>
            </div>
</div>

<div class="containt_main">
                  <div class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="#">Home</a>
                     <a href="#">Fashion</a>
                     <a href="#">Electronic</a>
                     <a href="#">Jewellery</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()">
                     <img src="images/toggle-icon.png">
                  </span>
                  <div class="header_box">
                        <ul>
                           <li><a href="#">Aziende</a></li>
                           <li><a href="{{ route('faq') }}">FAQ</a></li>
                           @guest
                           <li><a href="{{ route('login') }}">Account</a></li>
                           @endguest
                        </ul>
                  </div>
</div>
<ul>
    <li><a href="{{ route('catalog1') }}" title="Home">Catalogo</a></li>
    <li><a href="{{ route('who') }}" title="Il nostro profilo aziendale">Chi siamo</a></li>
    <li><a href="{{ route('where') }}" title="Dove trovarci">Dove Siamo</a></li>
    <li><a href="mailto:info@acme.it" title="Mandaci un messaggio">Contattaci</a></li>
    @can('isAdmin')
        <li><a href="{{ route('admin') }}" class="highlight" title="Home Admin">Home Admin</a></li>
    @endcan
    @can('isUser')
        <li><a href="{{ route('user') }}" class="highlight" title="Home User">Home User</a></li>
    @endcan
    @auth
        <li><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endauth    
    @guest
        <li><a href="{{ route('login') }}" class="highlight" title="Accedi all'area riservata del sito">Accedi</a></li>  
    @endguest
</ul>
