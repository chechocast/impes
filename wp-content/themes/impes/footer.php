  <footer>
    <article class="content_all">
      <ul>
        <li><?php echo esc_html( get_option('lapizzeria_direccion')); ?></li>
        <li><?php echo esc_html( get_option('lapizzeria_telefono')); ?></li>
        <li><?php echo esc_html( get_option('impes_direccion') ); ?></li>
        <li><?php echo esc_html( get_option('impes_ciudad') ); ?></li>
        <li><?php echo esc_html( get_option('impes_telefono') ); ?></li>
        <li><a href="" target="_blank">Políticas y privacidad</a></li>
      </ul>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo_footer.png">
      <img class="camcologo" src="<?php echo get_template_directory_uri(); ?>/images/camacol_logo.png">
      <br/>
      <div class="copyright">Todos los derechos reservados <?php echo date('Y') ?></div>
    </article>
  </footer>

  <?php wp_footer();  ?>
</body>
</html>
