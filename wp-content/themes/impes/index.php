<?php get_header(); ?>
<?php 
  $pagina_blog = get_option('page_for_posts');
?>

<div class="pg-body">
    <section>
      <article class="content_all">
        <h1 class="tit-section"><?php get_the_title($pagina_blog); ?></h1>
        <br/>
        <ul class="proyects-content">
          <?php 
            $args = array(
              'posts_per_page' => -1,
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
        <div class="paginator">
          <?php echo paginate_links(); ?>
        </div>
      </article>
    </section> 
</div>

<?php get_footer(); ?>