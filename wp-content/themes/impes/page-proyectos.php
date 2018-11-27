<?php
/*
* Template Name: Proyectos
*/
 get_header(); ?>
<div class="pg-body">
  <?php while (have_posts()): the_post(); ?>
    <section>
      <article class="content_all">
        <h1 class="tit-section"><?php the_title(); ?></h1>
        <br/>
        <ul class="proyects-content">
          <?php 
            $args = array(
              'post_type' => 'proyectos',
              'posts_per_page' => -1,
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
      </article>
    </section>
  <?php endwhile; ?>  
</div>

<?php get_footer(); ?>
