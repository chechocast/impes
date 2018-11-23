<?php get_header(); ?>
<div class="pg-body">
  <?php while (have_posts()): the_post(); ?>
    <div class="apli-img">
      <?php the_post_thumbnail(); ?>
    </div>
    <section>
      <article class="content_all">
        <h1 class="tit-section"><?php the_title(); ?></h1>
        <div class="inter-txt">
          <main>
            <form method="post">
              <div>
                <input type="text" placeholder="Nombre y Apellidos" name="nombre" required />
                <span class="error"></span>
              </div>
              <div>
                <input type="text" placeholder="Empresa"  name="empresa" required/>
                <span class="error"></span>
              </div>
              <div>
                <input type="email" placeholder="Email" name="email"  required />
                <span class="error"></span>
              </div>
              <div>
                <input type="tel" placeholder="Tel&eacute;fono" name="telefono" required>
                <span class="error"></span>
              </div>
              <div>
                <input type="tel" placeholder="Celular (opcional)" name="celular">
                <span class="error"></span>
              </div>
              <div>
                <input type="text" placeholder="Direcci&oacute;n (opcional)" name="direccion">
                <span class="error"></span>
              </div>
              <br/>
              <textarea placeholder="Comentario" name="comentario" required></textarea>
              <button type="submit" class="btn-cotiza" name="enviar">Enviar</button>
              <input type="hidden" name="oculto" value="1">
            </form>
            <a href="files/POLITICA_DE TRATAMIENTO_DE_DATOS_PERSONALES.pdf" target="_blank" style="text-align: center; display: block;">Políticas de datos</a>
          </main>
        </div>
      </article>
    </section>
    <div class="box-contact">
      <?php echo esc_html( get_option('impes_direccion') ); ?><br/>
      <?php echo esc_html( get_option('impes_telefono') ); ?><br/>
      <?php echo esc_html( get_option('impes_ciudad') ); ?>
    </div>
    <div class="map">
    </div>
  <?php endwhile; ?>  
</div>

<?php get_footer(); ?>
