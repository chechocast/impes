  <footer>
    <article class="content_all">
      <ul>
        <li><i class="icon-office1"></i> <?php echo esc_html( get_option('impes_direccion') ); ?></li>
        <li><i class="icon-location"></i> <?php echo esc_html( get_option('impes_ciudad') ); ?></li>
        <li><i class="icon-phone1"></i> <?php echo esc_html( get_option('impes_telefono') ); ?></li>
        <li><a href="/politica-privacidad/" target="_blank">Políticas y privacidad</a></li>
      </ul>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo_footer.png">
      <img class="camcologo" src="<?php echo get_template_directory_uri(); ?>/images/camacol_logo.png">
      <div class="redes">
        <p>Siguenos en:</p>
        <?php
          $args = array(
            'theme_location' => 'social-menu',
            'container' => 'nav',
            'container_class' => 'social',
            'container_id' => 'social',
            'link_before' => '<span class="sr-text">',
            'link_after' => '</span>',
          );
          wp_nav_menu($args);

         ?>
      </div><!--redes-->
      <br/>
      <div class="copyright">Todos los derechos reservados <?php echo date('Y') ?></div>
    </article>
  </footer>

  <?php wp_footer();  ?>
</body>
</html>
