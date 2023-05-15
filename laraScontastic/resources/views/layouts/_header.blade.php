<header>
    <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        } 
    </script>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
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