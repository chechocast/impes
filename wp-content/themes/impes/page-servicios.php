<?php get_header(); ?>
<div class="pg-body">
  <?php while (have_posts()): the_post(); ?>
    <section>
      <article class="content_all">
        <h1 class="tit-section"><?php the_title(); ?></h1>
        <div class="inter-txt">
          <main>
            <?php the_content(); ?>
          </main>
        </div>
      </article>
    </section>
    <div class="apli-img">
      <?php the_post_thumbnail(); ?>
    </div>
    <section class="content_all">
      <article class="swiper-container">
        <h2 class="tit-section">ALGUNOS DE NUESTROS CLIENTES</h2>
        <ul class="clients swiper-wrapper">
          <div class="swiper-slide" data-swiper-autoplay="6000">
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/logo-alcabama.png" title="cliente Inversiones Alcabama" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/logo-bolivar.png" title="cliente Constructora Boliva" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/logo-construsar.png" title="cliente Construsar S.A" /></li>
          </div>
          <div class="swiper-slide" data-swiper-autoplay="6000">
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/logo-prourbe.png" title="cliente Prourbe SA" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/logo-sl.png" title="cliente Constructora S&L S.A.S" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/logo-ayc.png" title="cliente arquitectura & concreto" /></li>
          </div>
          <div class="swiper-slide" data-swiper-autoplay="6000">
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/logo-coala.png" title="cliente coala" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/logo-colsanitas.png" title="cliente colsanitas" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/logo-cusezar.png" title="cliente cusezar" /></li>
          </div>
          <div class="swiper-slide" data-swiper-autoplay="6000">
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/logo-santafe.png" title="cliente santafe" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/logo-santoto.png" title="cliente santo tomas" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/logo-praxa.png" title="cliente praxa" /></li>
          </div>
          <div class="swiper-slide" data-swiper-autoplay="6000">
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/logo-vertice.png" title="cliente vertice" /></li>
          <br/>
          </div>
        </ul>
        <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
      </article>
    </section>
  <?php endwhile; ?>  
</div>

<?php get_footer(); ?>
