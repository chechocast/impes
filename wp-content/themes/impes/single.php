<?php get_header(); ?>
<div class="pg-body">
  <?php while (have_posts()): the_post(); ?>
    <section>
      <article class="content_all">
        <h1 class="tit-section"><?php the_title(); ?></h1>
        <div class="inter-txt">

            <div class="img-post">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="video">
              <iframe src="<?php the_field('link_de_video'); ?>" frameborder="0" allowfullscreen></iframe>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-video.png">
            </div>
          <main>
            <?php the_content(); ?>
          </main>
        </div>
      </article>
    </section>
  <?php endwhile; ?>  
</div>

<?php get_footer(); ?>