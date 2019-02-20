<?php get_header(); 
  $defaultImageContent = get_the_post_thumbnail_url();
  $videoUrlContent = get_field('link_de_video');
  $hasImage = isset($defaultImageContent) && trim($defaultImageContent) !== '';
  $hasVideo = isset($videoUrlContent) && trim($videoUrlContent) !== '';


?>
<div class="pg-body">
  <?php while (have_posts()): the_post(); ?>
    <section>
      <article class="content_all">
        <h1 class="tit-section"><?php the_title(); ?></h1>
        <div class="inter-txt">
            <?php 
            if($hasImage && !$hasVideo) { ?>
            <div class="img-post">
              <img src="<?php echo $defaultImageContent; ?>" alt="">
            </div>
            <?php } ?>
            <?php if($hasVideo) { ?>
            <div class="video">
              <iframe src="<?php the_field('link_de_video'); ?>" frameborder="0" allowfullscreen></iframe>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-video.png">
            </div>
            <?php } ?>
          <main>
            <?php the_content(); ?>
          </main>
          <?php 
              $id_imagen = get_field('imagen_aplicador');
              $aplicador_proyecto = get_field('aplicador_proyecto');
              $imagen = wp_get_attachment_image_src($id_imagen, 'aplicador');
              if($id_imagen != null && $id_imagen != '' && $aplicador_proyecto != null && $aplicador_proyecto != ''){
                ?>
                <div class="box-aplicador">
                  <img src="<?php echo $imagen[0]; ?>" alt="">
                  <div class="txt-aplicador">
                    <h3>Aplicador autorizado:</h3>
                    <p><?php the_field('aplicador_proyecto'); ?></p>
                  </div>
                  <br/>
                </div>
                <?php
              }
            ?>
          
        </div>
      </article>
    </section>
  <?php endwhile; ?>  
</div>

<?php get_footer(); ?>