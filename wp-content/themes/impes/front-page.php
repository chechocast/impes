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
    <section class="purple-content">
      <article class="content_all">
        <h2 class="tit-section">NUESTROS PROYECTOS</h2>
        <br/>
        <ul class="proyects-content">
          <?php 
            $args = array(
              'post_type' => 'proyectos',
              'posts_per_page' => 9,
              'orderby' => 'title',
              'order' => 'ASC'
            );
            $proyectos = new WP_Query($args);
            $inews = 0;
            $ipage = 0;
            while($proyectos->have_posts()): $proyectos->the_post();
              if($inews > 0 && $inews % 3 == 0){
                $ipage++;
              }
              $inews++;

           ?>
          <li class="linews animated" for="page<?php echo $ipage; ?>" style="display:none">
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
         <br/>
        </ul>
        <a class="btn-more" href="nuestros-proyectos" title="ver todos los proyectos de impermeabilizaci&oacute;n">VER TODOS <span class="icon-circle-right"></span></a>
      </article>
    </section>
    <section>
      <article class="content_all">
        <h2 class="tit-section">NOTICIAS</h2>
        <br/>
        <ul class="proyects-content">
          <?php 
            $args = array(
              'posts_per_page' => 3,
              'orderby' => 'title',
              'order' => 'ASC'
            );
            $blog = new WP_Query($args);
            while($blog->have_posts()): $blog->the_post();

           ?>
          <li>
            <article>
              <div class="proyect-prev">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('mini-proyecto');  ?></a>
              </div>
              <div class="text-box">
                <h4>
                  <time>
                    <?php echo the_time('d'); ?>
                    <span><?php the_time('M') ?></span>
                  </time>
                </h4>
                <h3 class="tit-blog"><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Leer más <span class="icon-circle-right"></span></a>
              </div>
            </article>
          </li>
         <?php endwhile; wp_reset_postdata(); ?>
         <br/>
        </ul>
        <a class="btn-more" href="blog" title="ver todas las niticias de impermeabilizaci&oacute;n">VER TODOS <span class="icon-circle-right"></span></a>
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
    <section class="content_all">
      <article class="swiper-container">
        <h2 class="tit-section">APLICADORES AUTORIZADOS</h2>
        <ul class="clients swiper-wrapper">
          <?php 
            $args = array(
              'post_type' => 'aplicadores',
              'posts_per_page' => -1,
              'orderby' => 'title',
              'order' => 'DESC'
            );
            $aplicadores = new WP_Query($args);
            $iaplicadores = 0;
            while($aplicadores->have_posts()): $aplicadores->the_post();
                if($iaplicadores % 4 == 0){
                  ?>
                    <div class="swiper-slide" data-swiper-autoplay="6000">
                  <?php
                }
           ?>
            
              <li class="<?php echo $iaplicadores ?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </li>
              <?php
              $iaplicadores++;
              if($iaplicadores != 0 && $iaplicadores % 4 == 0){
                ?>
                </div>
                <?php
              }
            ?>
          <?php 
              
              endwhile; wp_reset_postdata(); ?>
        </ul>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </article>
    </section>

  <?php endwhile; ?>  
</div>

<?php get_footer(); ?>

<script>
  $(document).on('ready', function(){
    var i = 0;
    nextPage()
    setInterval(nextPage, 10000);

    function nextPage(){
      var selector = 'li[for="page'+i+'"]';
      if($(selector).length){
        $('.linews').removeClass('fadeInDown');
        $('.linews').addClass('fadeOutDown');
        
        
        setTimeout(function(){
          $('.linews').hide();
          $('.linews').removeClass('fadeOutDown');
          $(selector).show();
          $(selector).addClass('fadeInDown');

        }, 400);

        i++;
      }
      else{
        i = 0;
        nextPage();
      }
    }
  });
</script>
