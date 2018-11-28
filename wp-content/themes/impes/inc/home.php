<?php 

  //agregar un contenido exclusivo para home
  function home_post_called( $post_object ) {
    if ($post_object->post_name=='inicio') {
      home_add_scripts();
    }
  }
  add_action( 'the_post', 'home_post_called' );

  function home_add_scripts(){
    //registra los estilos
    wp_register_style( 'fullPage', get_template_directory_uri() . '/css/jquery.fullPage.css', array('style'), '1.0' );

    wp_enqueue_style( 'fullPage' );
    
    //registrar JS
    wp_register_script( 'home', get_template_directory_uri() . '/js/home.js', array('jquery'), '1.0.0', true );
    wp_register_script( 'fullPage', get_template_directory_uri() . '/js/jquery.fullPage.min.js', array('jquery'), '1.0.0', true );

    wp_enqueue_script( 'fullPage' );
    wp_enqueue_script( 'home' );
  }
 ?>