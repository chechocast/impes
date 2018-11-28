<?php get_header(); ?>
<div>
  <?php while (have_posts()): the_post(); ?>
    <div class="slide_home" id="fullpage">
      <ul class="section intro" id="section0">
        <li class="slide">
          <h2>IMPES - Pionera en tecnolog&iacute;a DUOFLEX<span>&reg;</span> en Latinoam&eacute;rica.</h2>
          <!--<a href="">Conoce m&aacute;s</a>-->
        </li>
        <div id="myVideo"></div>
      </ul>
    </div>
    <section class="content_all">
      <div class="intro-img">
      <?php 
        $id_imagen = get_field('imagen_destacado');
        $imagen = wp_get_attachment_image_src($id_imagen, '');
      ?>
        <img src="<?php echo $imagen[0]; ?>" alt="">
      </div>
      <div class="intro-text">
        <h2><?php the_field('titulo_destacado'); ?></h2>
        <?php the_field('texto_destacado'); ?>

        <a class="btn-more" href="<?php the_field('link_boton'); ?>" style="text-align:left; margin: 0;"><?php the_field('texto_boton'); ?></a>
      </div>
      <br />
    </section>
    <section class="service-content">
      <article class="content_all">
        <h2 class="tit-section"><?php the_field('titulo_productos'); ?></h2>
        <br/>
        <div class="box-pro">
          <div class="product-box" style="background-image: url(<?php the_field('imagen_pro1'); ?>);">
            <div class="product-text">
              <h3><?php the_field('titulo_pro1'); ?></h3>
              <p><?php the_field('texto_pro1'); ?></p>
              <a class="btn" href="<?php the_field('link_pro1'); ?>">VER MÁS <span class="icon-circle-right"></span></a>
            </div>
          </div>
          <div class="product-box" style="background-image: url(<?php the_field('imagen_pro2'); ?>);">
            <div class="product-text">
              <h3><?php the_field('titulo_pro2'); ?></h3>
              <p><?php the_field('texto_pro2'); ?></p>
              <div class="btn"></div>
            </div>
          </div>
          <div class="product-box" style="background-image: url(<?php the_field('imagen_pro3'); ?>);">
            <div class="product-text">
              <h3><?php the_field('titulo_pro3'); ?></h3>
              <p><?php the_field('texto_pro3'); ?></p>
              <div class="btn"></div>
            </div>
          </div>
          <br/>
        </div>
      </article>
    </section>
    <section>
      <article class="content_all">
        <h2 class="tit-section">NUESTROS PROYECTOS</h2>
        <br/>
        <ul class="proyects-content">
          <?php 
            $args = array(
              'post_type' => 'proyectos',
              'posts_per_page' => 4,
              'orderby' => 'title',
              'order' => 'ASC'
            );
            $proyectos = new WP_Query($args);
            while($proyectos->have_posts()): $proyectos->the_post();

           ?>
          <li>
            <div class="proyect-prev">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('mini-proyecto');  ?></a>
            </div>
            <div class="text-box">
              <h4><?php the_field('ciudad'); ?></h4>
              <h3><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>">Ver más <span class="icon-circle-right"></span></a>
            </div>
          </li>
         <?php endwhile; wp_reset_postdata(); ?>
        </ul>
        <a class="btn-more" href="proyectos" title="ver todos los proyectos de impermeabilizaci&oacute;n">VER TODOS <span class="icon-circle-right"></span></a>
      </article>
    </section>
    <section class="ventajas-content">
      <article class="content_all">
        <h2 class="tit-section">VENTAJAS</h2>
        <ul class="vent-content">
          <main>
            <?php the_content(); ?>
          </main>
          <br/>
        </ul>
        <a href="ventajas" class="btn-more" title="ver todas las ventajas de la impermeabilizaci&oacute;n">VER TODAS <span class="icon-circle-right"></span></a>
      </article>
    </section>

  <?php endwhile; ?>  
</div>

<?php get_footer(); ?>
