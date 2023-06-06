<!-- Script per la gestione della sidenav -->
<script src="{{ asset('js/sidenav.js') }}"></script>

<!-- Inizio HTML della sidenav -->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h1 class="sidenav_title">CATEGORIE</h1>
        @forelse($companies as $company)
            <a id ="hidden" class="sidenav_item" href="{{ route('tipologia', $company->tipologia) }}">{{$company->tipologia}}</a>
        @empty
            <p class="sidenav_item">Non ci sono categorie disponibili!</p>
        @endforelse

        <div id="result">
        </div>
</div>
<!-- fine HTML della sidenav -->

<!-- Use any element to open the sidenav -->
<span onclick="openNav(); removeDuplicates();"><img src="{{ asset('images/toggle_icon.png') }}"></span>

<script>
    var url = "{{ route('tipologia', $company->tipologia) }}";
</script>