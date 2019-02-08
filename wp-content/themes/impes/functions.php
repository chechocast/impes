<?php 

// tablas personalizadas
require get_template_directory() . '/inc/database.php';

//funciones para contactamos
require get_template_directory() . '/inc/contactanos.php';

//opciones para template
require get_template_directory() . '/inc/opciones.php';

//funciones para home
require get_template_directory() . '/inc/home.php';

//funciones para productos
require get_template_directory() . '/inc/producto.php';

//funciones para servicios
require get_template_directory() . '/inc/servicio.php';

function impes_setup() {
  add_theme_support('post-thumbnails');

  add_image_size('mini-proyecto', 360, 203, true);
  add_image_size('nosotros', 491, 331, true);
  add_image_size('expocamacol', 663, 395, true);
  add_image_size('desta-producto', 321, 214, true);
}
add_action('after_setup_theme', 'impes_setup');

function impes_styles(){

    //registra los estilos
    wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0');
    wp_register_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(), '1.0' );
    wp_register_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.css', array('normalize'), '1.0' );
    wp_register_style( 'style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );
    wp_register_style( 'main', get_template_directory_uri() . '/css/styles.css', array('style'), '1.0' );
    wp_register_style( 'swiper', get_template_directory_uri() . '/css/swiper.min.css', array('style'), '1.0' );

    //llama estilos
    wp_enqueue_style( 'normalize' );
    wp_enqueue_style( 'icomoon' );
    wp_enqueue_style( 'style' );
    wp_enqueue_style( 'main' );
    wp_enqueue_style( 'swiper' );

    //registrar JS
    $apikey = esc_html(get_option('impes_gmap_apikey'));
    wp_register_script( 'maps', 'https://maps.googleapis.com/maps/api/js?key=' . $apikey . '&callback=initMap', array(), '', true );
    wp_register_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
    wp_register_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), '1.0.0', true );

    wp_enqueue_script( 'maps' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'scripts' );
    wp_enqueue_script( 'swiper' );

    //Pasar  variables de PHP a Javascript
    wp_localize_script(
      'scripts',
      'opciones',
      array(
        'latitud' => get_option('impes_gmap_latitud'),
        'longitud' => get_option('impes_gmap_longitud'),
        'zoom' => get_option('impes_gmap_zoom')
      )
    );
}

add_action('wp_enqueue_scripts', 'impes_styles');

//agregar Async  y Defer
function agregar_async_defer($tag, $handle){
  if('maps' !== $handle)
    return $tag;
  return str_replace(' src', ' async="async" defer="defer" src', $tag);
}
add_filter('script_loader_tag', 'agregar_async_defer', 10, 2 );


//Creacion de menus
function impes_menus(){
  register_nav_menus(array(
    'header-menu' => __('Header Menu', 'Impes'),
    'social-menu' => __('Social Menu', 'Impes'),
  ));
}
add_action('init', 'impes_menus' );

//aqui van los proyectos
add_action( 'init', 'impes_proyectos' );
function impes_proyectos() {
  $labels = array(
    'name'               => _x( 'Proyectos', 'Impes' ),
    'singular_name'      => _x( 'Proyectos', 'post type singular name', 'Impes' ),
    'menu_name'          => _x( 'Proyectos', 'admin menu', 'Impes' ),
    'name_admin_bar'     => _x( 'Proyectos', 'add new on admin bar', 'Impes' ),
    'add_new'            => _x( 'Add New', 'book', 'Impes' ),
    'add_new_item'       => __( 'Add New Proyectos', 'Impes' ),
    'new_item'           => __( 'New Proyectos', 'Impes' ),
    'edit_item'          => __( 'Edit Proyectos', 'Impes' ),
    'view_item'          => __( 'View Proyectos', 'Impes' ),
    'all_items'          => __( 'All Proyectos', 'Impes' ),
    'search_items'       => __( 'Search Proyectos', 'Impes' ),
    'parent_item_colon'  => __( 'Parent Proyectos:', 'Impes' ),
    'not_found'          => __( 'No Proyectos found.', 'Impes' ),
    'not_found_in_trash' => __( 'No Proyectos found in Trash.', 'Impes' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'Impes' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'proyectos' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 6,
    'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
  );

  register_post_type( 'proyectos', $args );
}

 ?>