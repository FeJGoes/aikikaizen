<header>
    <div id="nav-banner">
        <a id="nav-logo" href="<?=HOST?>">
            <img src="<?=HOST.IMGS_DIR?>kaizen-preto.png" alt="aikikaizenrc_logo">
        </a>
        <div id="nav-title">
            <h5>AIKIDO</h5>
            <h6>AikiKaizen Rio Claro</h6>
        </div>
    </div>
    
    <nav class="uk-visible@s">
        <ul>  
            <li <?= strstr($_SERVER['REQUEST_URI'],'/aikido') ?'class="active-link"': "" ?>>
                <a class="navlink" href="<?=HOST.'aikido'?>">aikido</a>
            </li>
            <li <?= strstr($_SERVER['REQUEST_URI'],'/aikikaizen') ?'class="active-link"': "" ?>>
                <a class="navlink" href="<?=HOST.'aikikaizen'?>">aikikaizen</a>
            </li>
            <li <?= strstr($_SERVER['REQUEST_URI'],'/dojo') ?'class="active-link"': "" ?>>
                <a class="navlink" href="<?=HOST.'dojo'?>">dojo</a>
            </li>
            <li <?= strstr($_SERVER['REQUEST_URI'],'/sobre-nos') ?'class="active-link"': "" ?>>
                <a class="navlink" href="<?=HOST.'sobre-nos'?>">sobre nós</a>
            </li>
            <li <?= strstr($_SERVER['REQUEST_URI'],'/contato') ?'class="active-link"': "" ?>>
                <a class="navlink" href="<?=HOST.'contato'?>">contato</a>
            </li>
        </ul>
    </nav>
    <div id="hamburger-menu" class="uk-hidden@s">
        <div class="burger three" uk-toggle="target: #offcanvas-nav" onclick="this.classList.toggle('activated'); setTimeout(()=>{this.classList.toggle('activated')},1000)">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    
</header>