<?php 
  function impes_guardar(){
    global $wpdb;
    $tabla = $wpdb->prefix . "contactanos";
    if(isset($_POST['enviar']) && $_POST['oculto'] == "1" ):
      $nombre = sanitize_text_field( $_POST['nombre'] );
      $empresa = sanitize_text_field( $_POST['empresa'] );
      $email = sanitize_text_field( $_POST['email'] );
      $telefono = sanitize_text_field( $_POST['telefono'] );
      $celular = sanitize_text_field( $_POST['celular'] );
      $direccion = sanitize_text_field( $_POST['direccion'] );
      $comentario = sanitize_text_field( $_POST['comentario'] );
    
      $datos = array(
        'nombre' => $nombre,
        'empresa' => $empresa,
        'email' => $email,
        'telefono' => $telefono,
        'celular' => $celular,
        'direccion' => $direccion,
        'mensaje' => $comentario
      );

      $formato = array(
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s'
      );

      $wpdb->insert($tabla, $datos, $formato);

      $url = get_page_by_title('¡Muchas gracias!');
      wp_redirect(get_permalink($url->ID) );
      exit();
    endif;
  }

  add_action('init', 'impes_guardar');

 ?>