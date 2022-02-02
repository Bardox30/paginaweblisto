<?php get_header(); ?>

    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/monitor-2.jpg') ?>)"></div>
    <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">¡Bienvenido!</h1>
    <h2 class="headline headline--medium">¿Y tu página web? ¡Nosotros te ayudamos a tenerla lista!</h2>
    <h3 class="headline headline--small">¿Por qué no revisas una página web que se adapte a ti?</h3>
    <a href="#" class="btn btn--large btn--dark-purple">Cotiza Ahora</a>
    </div>
    </div>
    

    <div class="hero-slider">
        <div data-glide-el="track" class="glide__track">
            <div class="glide__slides">
                <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/trabajando-encaja.jpg') ?>)">
                    <div class="hero-slider__interior container">
                        <div class="hero-slider__overlay">
                            <h2 class="headline headline--medium t-center">Plan Estandar</h2>
                            <p class="t-center">En el Plan Standar tú podrás acceder a un dominio con el nombre de tu marca, y...</p>
                            <p class="t-center no-margin"><a href="#" class="btn btn--dark-purple">Conoce más</a></p>
                        </div>
                    </div>
                </div>
                <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/discoteca-03.jpg') ?>)">
                    <div class="hero-slider__interior container">
                        <div class="hero-slider__overlay">
                            <h2 class="headline headline--medium t-center">Plan Premium</h2>
                            <p class="t-center">Mayor soporte para tráfico online y funciones adicionales...</p>
                            <p class="t-center no-margin"><a href="#" class="btn btn--dark-purple">Conoce más</a></p>
                        </div>
                    </div>
                </div>
                <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/corporativo.jpg') ?>)">
                    <div class="hero-slider__interior container">
                        <div class="hero-slider__overlay">
                            <h2 class="headline headline--medium t-center">Plan Corporativo</h2>
                            <p class="t-center">Una web con los máximos requerimientos para abarcar tus demandas...</p>
                            <p class="t-center no-margin"><a href="#" class="btn btn--dark-purple">Conoce más</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
        </div>
    </div>

<?php get_footer(); ?>