<!DOCTYPE html>
<html lang="  " dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title></title>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="header">
      <div class="content_all">
        <div class="logo">
          <a href="<?php echo esc_url( home_url('/') ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="">
            <span>IMPES - Pionera en tecnolog&iacute;a DUOFLEX&reg; en Latinoam&eacute;rica.</span>
          </a>
        </div><!--logo-->
        <nav class="menu-header">
          <div class="main-menu">
            <a href="#"><span class="icon-menu" aria-hidden="true"></span></a>
          </div>
          <div class="navegacion">
            <?php
              $args = array(
                  'theme_location' => 'header-menu',
                  'container' => 'nav',
                  'container_class' => 'menu-sitio',
              );
              wp_nav_menu($args);

             ?>
          </div>
        </nav>
      </div><!--contenedor -->
    </header>