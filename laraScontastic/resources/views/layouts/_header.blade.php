<header>
    <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
        document.getElementById("mySidenav").style.width = "500px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        } 
    </script>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <h1 class="category">CATEGORIE</h1>
            <a href="#">Elettronica e informatica</a>
            <a href="#">Abbigliamento e Accessori</a>
            <a href="#">Scarpe</a>
            <a href="#">Voli</a>
            <a href="#">Vacanze e Hotel</a>
            <a href="#">Casa e Giardino</a>
            <a href="#">Videogiochi</a>
            <a href="#">Giocattoli</a>
            <a href="#">Parchi Divertimento</a>
            <a href="#">Spesa Online</a>
            <a href="#">Auto e Moto</a>
            <a href="#">Assicurazioni</a>
            <a href="#">Cosmetici e Profumi</a>
            <a href="#">Salute e Farmacia</a>
            <a href="#">Sport e Fitness</a>
            <a href="#">Energia</a>
            <a href="#">Telefono, Internet e TV</a>
            <a href="#">Animali</a>
            <a href="#">Neonati e Bambini</a>
            <a href="#">Finanza</a>
            <a href="#">Musica, Libri e Film</a>
            <a href="#">Servizi Business e Ufficio</a>
            <a href="#">Concerti, Cinema e Cultura</a>
            <a href="#">Idee Regalo e Gift Card</a>
            <a href="#">Trasporti</a>
            <a href="#">Ristoranti</a>
        </div>

    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()"><img src="images/toggle_icon.png"></span>
    <!-- inizio logo -->
    <img src="images/scontastic_draft.png">
    <!-- fine logo -->

    <!-- inizio searchbar -->
    <input class="search_bar" type="text" placeholder="Cerca qui...">
    <!-- fine searchbar -->

    <!-- inizio link wrapper -->
    <div class="link_wrapper">
        <ul>
            <li><a href="#">Aziende</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            <li><a href="#">Account</a></li>
        </ul>
    </div>
    <!-- fine link wrapper -->
</header>