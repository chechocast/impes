<?php get_header(); ?>
<div class="pg-body">
  <?php while (have_posts()): the_post(); ?>
    <section>
      <article class="content_all">
        <h1 class="tit-section"><?php the_title(); ?></h1>
        <div class="inter-txt">
          <!--<img src="<?php /*echo get_the_post_thumbnail_url();*/ ?>" alt="">-->
          <main>
            <?php the_content(); ?>
          </main>
        </div>
      </article>
    </section>
  <?php endwhile; ?>  
</div>

<?php get_footer(); ?>