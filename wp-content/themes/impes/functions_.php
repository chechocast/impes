<?php

// tablas personalizadas
require get_template_directory() . '/inc/database.php';

//reservaciones
require get_template_directory() . '/inc/reservaciones.php';

//opciones para template
require get_template_directory() . '/inc/opciones.php';

function lapizzeria_setup() {
  add_theme_support('post-thumbnails');

  add_image_size('nosotros', 437, 291, true);
  add_image_size('especialidades', 768, 525, true);
}
add_action('after_setup_theme', 'lapizzeria_setup');

function lapizzeria_styles(){

  //registra los estilos
  wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0');
  wp_register_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700', array(), '1.0' );
  wp_register_style( 'icomoon', get_template_directory_uri() . '/css/icomoon.css', array('normalize'), '1.0');
  wp_register_style( 'fluidboxcss', get_template_directory_uri() . '/css/fluidbox.min.css', array('normalize'), '1.0' );
  wp_register_style( 'style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0' );

  //llama estilos
  wp_enqueue_style( 'normalize' );
  wp_enqueue_style( 'icomoon' );
  wp_enqueue_style( 'fluidboxcss' );
  wp_enqueue_style( 'style' );

  //registrar JS
  wp_register_script( 'fluidbox', get_template_directory_uri() . '/js/jquery.fluidbox.min.js', array(), '1.0.0', true );
  wp_register_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );

  wp_enqueue_script( 'scripts' );
  wp_enqueue_script( 'fluidbox' );
  wp_enqueue_script( 'jquery' );
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');

function lapizzeria_menus(){
  register_nav_menus(array(
    'header-menu' => __('Header Menu', 'lapizzeria'),
    'social-menu' => __('Social Menu', 'lapizzeria'),
  ));
}
add_action('init', 'lapizzeria_menus' );




add_action( 'init', 'lapizzeria_especialidades' );
function lapizzeria_especialidades() {
	$labels = array(
		'name'               => _x( 'Pizzas', 'lapizzeria' ),
		'singular_name'      => _x( 'Pizzas', 'post type singular name', 'lapizzeria' ),
		'menu_name'          => _x( 'Pizzas', 'admin menu', 'lapizzeria' ),
		'name_admin_bar'     => _x( 'Pizzas', 'add new on admin bar', 'lapizzeria' ),
		'add_new'            => _x( 'Add New', 'book', 'lapizzeria' ),
		'add_new_item'       => __( 'Add New Pizza', 'lapizzeria' ),
		'new_item'           => __( 'New Pizzas', 'lapizzeria' ),
		'edit_item'          => __( 'Edit Pizzas', 'lapizzeria' ),
		'view_item'          => __( 'View Pizzas', 'lapizzeria' ),
		'all_items'          => __( 'All Pizzas', 'lapizzeria' ),
		'search_items'       => __( 'Search Pizzas', 'lapizzeria' ),
		'parent_item_colon'  => __( 'Parent Pizzas:', 'lapizzeria' ),
		'not_found'          => __( 'No Pizzases found.', 'lapizzeria' ),
		'not_found_in_trash' => __( 'No Pizzases found in Trash.', 'lapizzeria' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'lapizzeria' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'especialidades' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'especialidades', $args );
}

add_action('widgets_init', 'lapizzeria_widgets');


//widgets

function lapizzeria_widgets(){
    register_sidebar( array(
      'name' => 'Blog Sidebar',
      'id' => 'blog_sidebar',
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
}


?>