<nav id="offcanvas-nav" uk-offcanvas="overlay: true; mode: slide">
    <div id="offcanvas-menu" class="uk-offcanvas-bar uk-flex uk-flex-column">

        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <br><br><br>
        <ul class="uk-nav uk-nav-default">
            <li <?= strstr($_SERVER['REQUEST_URI'],'/aikido') ? "class='active-link'": "" ?>><a href="<?=HOST.'aikido'?>" class="navbar-link">Aikido</a></li>
            <!-- <li <?= strstr($_SERVER['REQUEST_URI'],'/aikikaizen') ? "class='active-link'": "" ?>><a href="<?=HOST.'aikikaizen'?>" class="navbar-link">Aikikaizen</a></li> -->
            <li <?= strstr($_SERVER['REQUEST_URI'],'/dojo') ? "class='active-link'": "" ?>><a href="<?=HOST.'dojo'?>" class="navbar-link">Dojo</a></li>
            <li <?= strstr($_SERVER['REQUEST_URI'],'/sobre-nos') ? "class='active-link'": "" ?>><a href="<?=HOST.'sobre-nos'?>" class="navbar-link">Sobre nós</a></li>
            <li <?= strstr($_SERVER['REQUEST_URI'],'/contato') ? "class='active-link'": "" ?>><a href="<?=HOST.'contato'?>" class="navbar-link">Contato</a></li>
        </ul>
    </div>
</nav>