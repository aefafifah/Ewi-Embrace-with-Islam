<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<nav>
    <div class="wrapper">
        <div class="logo"><a href="{{ asset('Assets/Ewi Logo Fix.png') }}"><img src="{{ asset('Assets/Ewi Logo Fix.png') }}" alt="Logo"></a></div>
        <div class="menu" id="menu">
            <div id="menu-toggle">&#9776;</div> <!-- Burger menu icon -->
            <ul>
                <li><a href="/" class="nav-home">Home</a></li>
                <li class="dropdown nav-qurdistime">
                    <a href="#">Qurdistime</a>
                    <ul class="dropdown-menu">
                        <li><a href="/quran" class="nav-quran">Al-Quran</a></li>
                        <li><a href="/hadist" class="nav-hadist">Hadist</a></li>
                    </ul>
                </li>
                <li><a href="/issolution" class="nav-issolution">Issolution</a></li>
                <li class="dropdown nav-zakatime">
                    <a href="#">Zakatime</a>
                    <ul class="dropdown-menu">
                        <li><a href="/kalkulatormal" class="nav-zakatmal">Zakat Mal</a></li>
                        <li><a href="/kalkulatorfitrah" class="nav-zakatfitrah">Zakat Fitrah</a></li>
                    </ul>
                </li>
                <li><a href="/memorizinspire" class="nav-memorizinspire">Memorizinspire</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Toggle menu for mobile view
    var menuToggle = document.getElementById('menu-toggle');
    var menu = document.getElementById('menu');

    menuToggle.addEventListener('click', function() {
        menu.classList.toggle('show');
        // Toggle the 'show' class on the menu ul element
        var menuUl = menu.querySelector('ul');
        if (menuUl) {
            menuUl.classList.toggle('show');
        }
    });

    // Get the current path
    var path = window.location.pathname;

    // Define a mapping between paths and menu item classes
    var pathToClassMap = {
        "/": "nav-home",
        "/quran": "nav-quran",
        "/hadist": "nav-hadist",
        "/issolution": "nav-issolution",
        "/kalkulatormal": "nav-zakatmal",
        "/kalkulatorfitrah": "nav-zakatfitrah",
        "/memorizinspire": "nav-memorizinspire"
    };

    // Get the corresponding menu item class
    var activeClass = pathToClassMap[path];

    // If there is a corresponding class, add the tbl-biru class to that element
    if (activeClass) {
        var activeElement = document.querySelector("." + activeClass);
        if (activeElement) {
            activeElement.classList.add("tbl-biru");

            // If the active element is a submenu item, also add the tbl-biru class to the parent item
            if (["nav-quran", "nav-hadist"].includes(activeClass)) {
                var parentElement = document.querySelector(".nav-qurdistime > a");
                if (parentElement) {
                    parentElement.classList.add("tbl-biru");
                }
            } else if (["nav-zakatmal", "nav-zakatfitrah"].includes(activeClass)) {
                var parentElement = document.querySelector(".nav-zakatime > a");
                if (parentElement) {
                    parentElement.classList.add("tbl-biru");
                }
            }
        }
    }
});


</script>

