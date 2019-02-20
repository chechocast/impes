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
            $inews = 0;
            $ipage = 0;
            $proyectos = new WP_Query($args);
            while($proyectos->have_posts()): $proyectos->the_post();

              if($inews > 0 && $inews % 9 == 0){
                $ipage++;
              }
              $inews++;

           ?>
          <li class="linews animated" for="page<?php echo $ipage; ?>">
            <div class="proyect-prev">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('mini-proyecto');  ?></a>
            </div>
            <div class="text-box">
              <div class="box-aplicador">
                <?php 
                  $id_imagen = get_field('imagen_aplicador');
                  $imagen = wp_get_attachment_image_src($id_imagen, 'aplicador');
                ?>
                <img src="<?php echo $imagen[0]; ?>" alt="">
                <div class="txt-aplicador">
                  <h3>Aplicador autorizado:</h3>
                  <p><?php the_field('aplicador_proyecto'); ?></p>
                </div>
                <br/>
              </div>
              <h4><?php the_field('ciudad'); ?></h4>
              <h3><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>">Ver más <span class="icon-circle-right"></span></a>
            </div>
          </li>
         <?php endwhile; wp_reset_postdata(); ?>
         <br/>
        </ul>
        <div class="paginator">
          <?php echo paginate_links(); ?>
        </div>
      </article>
    </section>
  <?php endwhile; ?>  
</div>

<?php get_footer(); ?>

<script>
  $(document).on('ready', function(){
    var i = 0;
    nextPage()
    setInterval(nextPage, 20000);

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
