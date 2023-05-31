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