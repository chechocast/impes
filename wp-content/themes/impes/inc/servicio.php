<?php 

  //agregar un contenido exclusivo para producto
  function slide_clientes( $post_object ) {
    if ($post_object->post_name=='servicios') {
      service_add_scripts();
    }
  }
  add_action( 'the_post', 'slide_clientes' );

  function service_add_scripts(){?>
    <script>
      setTimeout(function(){
        var swiper = new Swiper('.swiper-container', {
          pagination: '.swiper-pagination',
          paginationClickable: true,
          spaceBetween: 30,
          autoplay: true,
        });
      },2000);
  </script>
    <?php
  }
 ?>