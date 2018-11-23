<?php  get_header(); ?>
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
        <div class="apli-img">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="img-us">
          <?php 
              $id_imagen = get_field('imagen_1');
              $imagen = wp_get_attachment_image_src($id_imagen, 'nosotros');
           ?>
           <img src="<?php echo $imagen[0]; ?>" alt="">
          <article class="inter-txt">
            <?php the_field('descripcion_1'); ?>
          </article>
          <br/>
        </div>
        <div class="expocamacol">
          <?php 
            $id_imagen = get_field('imagen_expocamacol');
            $imagen = wp_get_attachment_image_src($id_imagen, 'expocamacol');
          ?>
          <img src="<?php echo $imagen[0]; ?>" alt="">
          <div class="box-expocamacol">
            <?php the_field('descripcion_camacol'); ?>
          </div>
          <br/>
        </div>
      </article>
    </section>
  <?php endwhile; ?>  
</div>

<?php get_footer(); ?>
