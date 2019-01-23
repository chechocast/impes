<?php get_header(); ?>
<div class="pg-body">
  <?php while (have_posts()): the_post(); ?>
    <section>
      <article class="content_all">
        <h1 class="tit-section"><?php the_title(); ?></h1>
        <div class="inter-txt">

            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

            <div class="video">
              <iframe src="https://www.youtube.com/embed/Ue6ie4cPJG4" frameborder="0" allowfullscreen></iframe>
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