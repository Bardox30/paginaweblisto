    <footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url() ?>"><strong>PaginaWeb</strong> Listo</a>
            </h1>
            <p><a class="site-footer__link" href="#">954792850</a></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explora</h3>
              <nav class="nav-list">
                
                <ul>
                  <li><a href="<?php echo site_url('/about-us') ?>">Nosotros</a></li>
                  <li><a href="#">Programas</a></li>
                  <li><a href="#">Eventos</a></li>
                  <li><a href="#">Campuses</a></li>
                </ul>
                
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Aprende</h3>
              <nav class="nav-list">
                
                <ul>
                  <li><a href="#">Legalidad</a></li>
                  <li><a href="<?php echo site_url('/privacy-policy') ?>">Privacidad</a></li>
                  <li><a href="#">Carreras</a></li>
                </ul>
                
              </nav>
            </div>
          </div>

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Conecta con Nosotros</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>