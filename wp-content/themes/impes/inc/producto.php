<?php 

  //agregar un contenido exclusivo para home
  function tabs_products( $post_object ) {
    if (get_page_template_slug( $post_object->ID )=='page-producto.php') {
      products_add_scripts();
    }
  }
  add_action( 'the_post', 'tabs_products' );

  function products_add_scripts(){?>
    <script type="text/javascript">
      function oculta(elemento,link){
        var div = elemento.split("-"); 
         setTimeout(function(){
           jQuery('div[id|='+div[0]+']').hide();;
           jQuery('#'+elemento).show();
          jQuery('div[id|='+div[0]+']').removeClass('animated fadeOut');  
          jQuery('#'+elemento).addClass('animated fadeIn');
           
        },200);
        if(link){
          var LinkO = link.split("-"); 
          jQuery('a[id|='+LinkO[0]+']').removeClass('active');
          jQuery('#'+link).addClass('active');
        }
      }
    </script>
    <?php
  }
 ?>