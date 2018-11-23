<?php 
  function impes_database(){
    global $wpdb;
    global $impes_dbversion;
    $impes_dbversion = '0.1';

    $tabla = $wpdb->prefix . 'contactanos';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $tabla (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            nombre varchar(50) NOT NULL,
            empresa varchar(50) NOT NULL,
            email varchar(50) DEFAULT '' NOT NULL,
            telefono varchar(10) NOT NULL,
            celular varchar(10) NOT NULL,
            direccion varchar(50) NOT NULL,
            mensaje longtext NOT NULL,
            PRIMARY KEY (id)

    ) $charset_collate; ";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    dbDelta($sql);

    add_option('impes_dbversion', $impes_dbversion);

    // ACTUALIZAR EN CASO DE SER NECESARIO
    $version_actual = get_option('impes_version');

    if($impes_dbversion != $version_actual){
      $tabla = $wpdb->prefix . 'contactanos';

      $charset_collate = $wpdb->get_charset_collate();

      $sql = "CREATE TABLE $tabla (
              id mediumint(9) NOT NULL AUTO_INCREMENT,
              nombre varchar(50) NOT NULL,
              empresa varchar(50) NOT NULL,
              email varchar(50) DEFAULT '' NOT NULL,
              telefono varchar(10) NOT NULL,
              celular varchar(10) NOT NULL,
              direccion varchar(50) NOT NULL,
              mensaje longtext NOT NULL,
              PRIMARY KEY (id)

      ) $charset_collate; ";
      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      dbDelta($sql);
      update_option('impes_dbversion', $impes_dbversion);
    }
  }

  add_action('after_setup_theme', 'impes_database');
  function impes_revisar(){
    global $impes_dbversion;
    if(get_site_option('impes_dbversion') != $impes_dbversion) {
      impes_database();
    }
  }

  add_action('plugins_loaded', 'impes_revisar');

 ?>