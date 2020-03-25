<header id="header-navbar-main" class="uk-navbar-container uk-navbar-transparent" uk-navbar>
    <!--LOGO-->
    <div class="uk-navbar-left uk-margin-large-left uk-margin-xlarge-left@s" uk-navbar>
        <!-- < href="/aikikaizen/" id="link-logo"> -->
        <a ref="/aikikaizen/" id="container-logomarca">
                <div id="logo">
                    <span>改善</span>
                </div>
                <div id="text-logo">
                    <h2>AIKIDO</h2>
                    <div>
                        <small>Aiki Kaizen</small>
                        <small>Rio Claro</small>
                    </div>
                </div>
            </a>

    </div>
    <!--MAIN NAV @VISIBLE SMALL TO LARGE-->
    <nav class="uk-navbar-right uk-margin-large-right uk-visible@m" uk-navbar>
        <ul class="uk-navbar-nav">
            <li class="navbar-li-container">
                <div class="uk-navbar-dropdown bg-black-85">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="navbar-li-container"><a href="#section-sobre-aikido" class="navbar-link-dropdown" uk-scroll>Sobre o Aikido</a> </li>
                        <li class="navbar-li-container"><a href="#section-historia" class="navbar-link-dropdown" uk-scroll>História</a></li>
                        <li class="navbar-li-container"><a href="#section-beneficios" class="navbar-link-dropdown" uk-scroll>Benefícios</a></li>
                    </ul>
                </div>
            </li>
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
                    <ul class="uk-nav-sub">
                        <li><a href="#section-sobre-aikido" class="navbar-link" uk-scroll>Sobre o Aikido</a></li>
                        <li><a href="#section-historia" class="navbar-link" uk-scroll>História</a></li>
                        <li><a href="#section-beneficios" class="navbar-link" uk-scroll>Benefícios</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>