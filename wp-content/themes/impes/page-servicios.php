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
        <!--<h2 class="tit-section">ALGUNOS DE NUESTROS CLIENTES</h2>-->
        <ul class="clients swiper-wrapper">
          <?php 
            $args = array(
              'post_type' => 'clientes',
              'posts_per_page' => -1,
              'orderby' => 'title',
              'order' => 'ASC'
            );
            $clientes = new WP_Query($args);
            $icliente = 0;
            while($clientes->have_posts()): $clientes->the_post();
                if($icliente % 4 == 0){
                  ?>
                    <div class="swiper-slide" data-swiper-autoplay="6000">
                  <?php
                }
           ?>
            
              <li class="<?php echo $icliente ?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
              </li>
              <?php
              $icliente++;
              if($icliente != 0 && $icliente % 4 == 0){
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
