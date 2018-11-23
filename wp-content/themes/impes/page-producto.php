<?php
/*
* Template Name: Producto
*/
 get_header(); ?>
<div class="pg-body">
  <?php while (have_posts()): the_post(); ?>
    <section>
      <article class="content_all">
        <h1 class="tit-section"><?php the_title(); ?></h1>
        <div class="video">
          <iframe src="https://www.youtube.com/embed/Ue6ie4cPJG4" frameborder="0" allowfullscreen></iframe>
          <img src="<?php echo get_template_directory_uri(); ?>/images/img-video.png">
        </div>
        <div class="inter-txt">
          <main>
            <?php the_content(); ?>
          </main>
          <ul class="dwl-file">
            <li>
              <a href="files/hoja_tecnica_duoflex_print.pdf" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-pdf.png">
                <span>Descargar la hoja t&eacute;cnica</span>
                <br/>
            </a>
            </li>
          </ul>
        </div>
      </article>
    </section>
    <section class="ventajas-content">
      <article class="content_all">
        <h2 class="tit-section">VENTAJAS</h2>
        <ul class="vent-content">
          <?php the_field('campos_ventajas'); ?>
        </ul>
        <a href="<?php the_field('link_1'); ?>" class="btn-more">VER TODAS <span class="icon-circle-right"></span></a>
      </article>
    </section>
    <section>
      <article class="content_all">
        <h2 class="tit-section">ESPECIFICACIONES</h2>
        <ul class="specs">
          <li>
            <b>Gravedad espec&iacute;fica</b>
            <span><?php the_field('texto_1'); ?></span>
          </li>
          <li>
            <b>Color</b>
            <span><?php the_field('texto_2'); ?></span>
          </li>
          <li>
            <b>Contenido de s&oacute;lidos</b>
            <span><?php the_field('texto_3'); ?></span>
          </li>
          <li>
            <b>Temperatura de aplicaci&oacute;n</b>
            <span><?php the_field('texto_4'); ?></span>
          </li>
          <li>
            <b>Estabilidad al calor</b>
            <span><?php the_field('texto_5'); ?></span>
          </li>
          <li>
            <b>Estabilidad al fr&iacute;o</b>
            <span><?php the_field('texto_6'); ?></span>
          </li>
          <li>
            <b>Elongaci&oacute;n contra rotura</b>
            <span><?php the_field('texto_7'); ?></span>
          </li>
          <li>
            <b>Resistencia al agua estancada</b>
            <span><?php the_field('texto_8'); ?></span>
          </li>
          <li>
            <b>Recuperaci&oacute;n (800% de elongaci&oacute;n)</b>
            <span><?php the_field('texto_9'); ?></span>
          </li>
        </ul>
      </article>
    </section>
  <?php endwhile; ?>  
</div>

<?php get_footer(); ?>
