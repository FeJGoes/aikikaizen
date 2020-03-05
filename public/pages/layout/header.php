<header id="header-navbar-main" class="uk-navbar-container uk-navbar-transparent" uk-navbar>
    <!--LOGO-->
    <div class="uk-navbar-left uk-margin-large-left uk-margin-xlarge-left@s" uk-navbar>
        <a href="../html/index.html" id="link-logo" class="uk-logo">
            <img src="../assets/" alt="logo" id="nav-logo">
        </a>
    </div>
    <!--MAIN NAV @VISIBLE SMALL TO LARGE-->
    <nav class="uk-navbar-right uk-margin-large-right uk-visible@m" uk-navbar>
        <ul class="uk-navbar-nav">
            <li class="navbar-li-container">
                <a href="../../src/html/index.html" class="navbar-link">Aikido</a>
                <div class="uk-navbar-dropdown bg-black-85">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="navbar-li-container"><a href="#section-sobre-aikido" class="navbar-link-dropdown" uk-scroll>Sobre o Aikido</a> </li>
                        <li class="navbar-li-container"><a href="#section-historia" class="navbar-link-dropdown" uk-scroll>História</a></li>
                        <li class="navbar-li-container"><a href="#section-beneficios" class="navbar-link-dropdown" uk-scroll>Benefícios</a></li>
                    </ul>
                </div>
            </li>
            <li class="navbar-li-container active"><a href="../../src/html/aikikaizen.html" class="navbar-link">Aikikaizen</a></li>
            <li class="navbar-li-container"><a href="../../src/html/dojo.html" class="navbar-link">Dojo</a></li>
            <li class="navbar-li-container"><a href="../../src/html/galeria.html" class="navbar-link">Galeria</a></li>
            <li class="navbar-li-container"><a href="../../src/html/contato.html" class="navbar-link">Contato</a></li>
        </ul>
    </nav>
    <!--NAV OFFCANVAS @MEDIA SMALL-->
    <a href="#offcanvas-nav" id="icon-hamburger" class="uk-navbar-toggle uk-navbar-right uk-margin-small-right uk-hidden@m" uk-toggle uk-navbar-toggle-icon></a>
    <div id="offcanvas-nav" uk-offcanvas="overlay: true; mode: slide">
        <div id="offcanvas-menu" class="uk-offcanvas-bar">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <br><br><br>
            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                <li class="uk-parent">
                    <a href="../../src/html/index.html" class="navbar-link">Aikido</a>
                    <ul class="uk-nav-sub">
                        <li><a href="#section-sobre-aikido" class="navbar-link" uk-scroll>Sobre o Aikido</a></li>
                        <li><a href="#section-historia" class="navbar-link" uk-scroll>História</a></li>
                        <li><a href="#section-beneficios" class="navbar-link" uk-scroll>Benefícios</a></li>
                    </ul>
                </li>
                <li><a href="../../src/html/aikikaizen.html" class="navbar-link">Aikikaizen</a></li>
                <li><a href="../../src/html/dojo.html" class="navbar-link">Dojo</a></li>
                <li><a href="../../src/html/galeria.html" class="navbar-link">Galeria</a></li>
                <li><a href="../../src/html/contato.html" class="navbar-link">Contato</a></li>
            </ul>
        </div>
    </div>
</header>