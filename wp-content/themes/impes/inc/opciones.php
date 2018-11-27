<?php 
  function impes_ajustes(){
    add_menu_page('Impes', 'Impes ajustes', 'administrator', 'impes_ajustes', 'impes_opciones', '', 20);
    add_submenu_page('impes_ajustes', 'Contacto', 'Contacto', 'administrator', 'impes_contacto', 'impes_contacto');

    //llamar al registro de las opciones de nuestro tema
    add_action('admin_init', 'impes_registrar_opciones');
  }

  add_action('admin_menu', 'impes_ajustes');
  
  function impes_registrar_opciones(){
    //registrar opciones, una por campo
    register_setting('impes_opciones_grupo', 'impes_direccion');
    register_setting('impes_opciones_grupo', 'impes_telefono');
    register_setting('impes_opciones_grupo', 'impes_ciudad');
  }

  function impes_opciones(){
    ?>
    <div class="wrap">
      <h1>Ajustes Impes</h1>
      <form action="options.php" method="post">
        <?php settings_fields( 'impes_opciones_grupo' ); ?>
        <?php do_settings_sections( 'impes_opciones_grupo' ); ?>

        <table class="form-table">
          <tr valign="top">
            <th scope="row">Dirección</th>
            <td><input type="text" name="impes_direccion" value="<?php echo esc_attr( get_option('impes_direccion') ); ?>"></td>
          </tr>
          <tr valign="top">
            <th scope="row">Teléfono</th>
            <td><input type="text" name="impes_telefono" value="<?php echo esc_attr( get_option('impes_telefono') ); ?>"></td>
          </tr>
          <tr valign="top">
            <th scope="row">Ciudad</th>
            <td><input type="text" name="impes_ciudad" value="<?php echo esc_attr( get_option('impes_ciudad') ); ?>"></td>
          </tr>
        </table>
        <?php submit_button(); ?>
      </form>
    </div>
    <?php
  }

  function impes_contacto(){
    ?>
    <div class="wrap">
      <h1>Contactos</h1>

      <table class="wp-list-table widefat striped">
        <thead>
          <tr>
            <th class="manage-colum">ID</th>
            <th class="manage-colum">Nombre</th>
            <th class="manage-colum">Empresa</th>
            <th class="manage-colum">Correo</th>
            <th class="manage-colum">Teléfono</th>
            <th class="manage-colum">Celular</th>
            <th class="manage-colum">Dirección</th>
            <th class="manage-colum">Comentario</th>
          </tr>
        </thead>
        <tbody>
          <?php global $wpdb;
            $contactanos = $wpdb->prefix . 'contactanos';
            $registros= $wpdb->get_results(" SELECT * FROM $contactanos", ARRAY_A);
            foreach ($registros as $registro) { ?>
              <tr>
                <td><?php echo $registro['id'] ?></td>
                <td><?php echo $registro['nombre'] ?></td>
                <td><?php echo $registro['empresa'] ?></td>
                <td><?php echo $registro['email'] ?></td>
                <td><?php echo $registro['telefono'] ?></td>
                <td><?php echo $registro['celular'] ?></td>
                <td><?php echo $registro['direccion'] ?></td>
                <td><?php echo $registro['mensaje'] ?></td>
              </tr>  
            <?php } ?>
        </tbody>
      </table>
    </div>
    <?php
  }

 ?>