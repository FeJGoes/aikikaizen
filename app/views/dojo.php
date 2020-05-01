<main id="dojo-content">
    <div class="uk-flex uk-flex-wrap uk-flex-center uk-flex-middle">
        <div id="schedule-container">
            <strong id="class-schedule-title">Horários de Treinos</strong>
            <dl id="class-schedule" class="uk-description-list uk-description-list-divider">
                <dt><strong>Segunda-feira</strong></dt>
                <dd>
                    <div>
                        <span uk-icon="clock"></span>
                        <span>18h30min</span>
                        <span> à </span>
                        <span uk-icon="clock"></span>
                        <span>19h20min</span>
                    </div>
                </dd>
                <dt><strong>Terça-feira</strong></dt>
                <dd>
                    <div>
                        <span uk-icon="clock"></span>
                        <span>18h30min</span>
                        <span> à </span>
                        <span uk-icon="clock"></span>
                        <span>19h20min</span>
                    </div>
                </dd>
                <dt><strong>Quarta-feira</strong></dt>
                <dd><em>sem treino</em></dd>
                <dt><strong>Quinta-feira</strong></dt>
                <dd>
                    <div>
                        <span uk-icon="clock"></span>
                        <span>18h30min</span>
                        <span> à </span>
                        <span uk-icon="clock"></span>
                        <span>19h20min</span>
                    </div>
                </dd>
                <dt><strong>Sexta-feira</strong></dt>
                <dd><em>sem treino</em></dd>
                <dt><strong>Sábado</strong></dt>
                <dd>
                    <div>
                        <span uk-icon="clock"></span>
                        <span>09h30min</span>
                        <span> à </span>
                        <span uk-icon="clock"></span>
                        <span>10h20min</span>
                    </div>
                </dd>
            </dl>
        </div>
        <div id="slideshow-dojo">
            <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1" uk-slideshow="autoplay: true; autoplay-interval: 4500; animation: push; pause-on-hover: true">

                <ul class="uk-slideshow-items">
                    <li>
                        <img src="<?=HOST.IMGS_DIR?>aikido10.jpg" img-ajust>
                        <div class="uk-overlay uk-overlay-primary uk-position-right uk-text-center uk-transition-slide-right uk-width-medium">
                            <h3 class="uk-margin-remove">Left</h3>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?=HOST.IMGS_DIR?>aikido12.jpg" img-ajust>
                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                            <h3 class="uk-margin-remove">Bottom</h3>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?=HOST.IMGS_DIR?>aikido11.jpg" img-ajust>
                        <div class="uk-overlay uk-overlay-primary uk-position-left uk-text-center uk-transition-slide-left uk-width-medium">
                            <h3 class="uk-margin-remove">Left</h3>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </li>
                    <li>
                        <img src="<?=HOST.IMGS_DIR?>aikido12.jpg" img-ajust>
                        <div class="uk-overlay uk-overlay-primary uk-position-top uk-text-center uk-transition-slide-top">
                            <h3 class="uk-margin-remove">Top</h3>
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </li>
                </ul>
                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

                <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            </div>
        </div>
    </div>
</main>