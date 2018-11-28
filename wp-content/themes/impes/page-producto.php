<?php
/*
* Template Name: Producto
*/
 get_header(); ?>
<div class="pg-body">
  <?php while (have_posts()): the_post(); ?>
    <section>
      <article class="content_all">
        <h1 class="tit-section"><?php the_title(); ?></h1>
        <div class="video">
          <iframe src="https://www.youtube.com/embed/Ue6ie4cPJG4" frameborder="0" allowfullscreen></iframe>
          <img src="<?php echo get_template_directory_uri(); ?>/images/img-video.png">
        </div>
        <div class="inter-txt">
          <main>
            <?php the_content(); ?>
          </main>
          <ul class="dwl-file">
            <li>
              <a href="files/hoja_tecnica_duoflex_print.pdf" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-pdf.png">
                <span>Descargar la hoja t&eacute;cnica</span>
                <br/>
            </a>
            </li>
          </ul>
        </div>
      </article>
    </section>
    <section class="solution">
      <article class="content_all">
        <h2 class="tit-section">SOLUCIONES</h2>
        <div class="box-solution" id="tab-1" style="display:block;">
          <h3>Impermeabilizaci&oacute;n de plataformas</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/impermeabilizacion_plataformas.jpg" alt="impermeabilizacion de plataformas">
          <ol>
            <li>
              <span>Superficie</span>
            </li>
            <li>
              <span>Sistema avanzado de Impermeabilizacion DuoFlex&reg;</span>
            </li>
            <li>
              <span>Tela geotextil no tejida de proteccion</span>
            </li>
            <li>
              <span>Mortero de protecci&oacute;n</span>
            </li>
            <li>
              <span>Acabado final</span>
            </li>
          </ol>
        </div>
        <div class="box-solution" id="tab-2">
          <h3>Impermeabilizaci&oacute;n de balcones y terrazas</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/impermeabilizacion_balcones.jpg" alt="Impermeabilizaci&oacute;n de balcones y terrazas">
          <ol>
            <li>
              <span>Superficie</span>
            </li>
            <li>
              <span>Sistema avanzado de Impermeabilizacion DuoFlex&reg;</span>
            </li>
            <li>
              <span>Tela geotextil no tejida de proteccion</span>
            </li>
            <li>
              <span>Mortero de protecci&oacute;n</span>
            </li>
            <li>
              <span>Acabado final</span>
            </li>
          </ol>
        </div>
        <div class="box-solution" id="tab-3">
          <h3>Impermeabilizaci&oacute;n de cubiertas expuestas</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/impermeabilizacion_plataformas.jpg" alt="Impermeabilizaci&oacute;n de cubiertas expuestas">
          <ol>
            <li>
              <span>Superficie</span>
            </li>
            <li>
              <span>Sistema avanzado de Impermeabilizacion DuoFlex&reg;</span>
            </li>
            <li>
              <span>Tela geotextil no tejida de proteccion</span>
            </li>
            <li>
              <span>Mortero de protecci&oacute;n</span>
            </li>
            <li>
              <span>Acabado final</span>
            </li>
          </ol>
        </div>
        <div class="box-solution" id="tab-4">
          <h3>Impermeabilizacion piso flotante</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/piso_flotante.jpg" alt="Impermeabilizacion piso flotante">
          <ol>
            <li>
              <span>Superficie</span>
            </li>
            <li>
              <span>Sistema avanzado de Impermeabilizacion DuoFlex&reg;</span>
            </li>
            <li>
              <span>Tela geotextil no tejida de proteccion</span>
            </li>
            <li>
              <span>Mortero de protecci&oacute;n</span>
            </li>
            <li>
              <span>Acabado final</span>
            </li>
          </ol>
        </div>
        <div class="box-solution" id="tab-5">
          <h3>Impermeabilizaci&oacute;n de muros de contenci&oacute;n – negativo</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/impermeabilizacion_muros_contencion.jpg" alt="Impermeabilizaci&oacute;n de muros de contenci&oacute;n – negativo">
          <ol>
            <li>
              <span>Suelo natural</span>
            </li>
            <li>
              <span>Placa cimentaci&oacute;n</span>
            </li>
            <li>
              <span>Muro de contenci&oacute;n, pantalla o pilote</span>
            </li>
            <li>
              <span>Sistema avanzado de Impermeabilizacion DuoFlex&reg;</span>
            </li>
            <li>
              <span>Talla Geotextil no tejida de protecci&oacute;n</span>
            </li>
            <li>
              <span>Placa de piso</span>
            </li>
            <li>
              <span>Muro de presion hydrostatica</span>
            </li>
          </ol>
        </div>
        <div class="box-solution" id="tab-6">
          <h3>Impermeabilizaci&oacute;n de paredes en s&oacute;tano – positivo</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/impermeabilizacion_sotano_positivo.jpg" alt="Impermeabilizaci&oacute;n de paredes en s&oacute;tano – positivo">
          <ol>
            <li>
              <span>Muro de contenci&oacute;n</span>
            </li>
            <li>
              <span>Sistema avanzado de Impermeabilizacion DuoFlex&reg;</span>
            </li>
            <li>
              <span>Tela geotextil no tejida de protecci&oacute;n polietileno de alta densidad (PEAD) para drenaje de muros y soleras y protecci&oacute;n de la impermeabilizaci&oacute;n.</span>
            </li>
            <li>
              <span>Tierra o suelo natural</span>
            </li>
          </ol>
        </div>
        <div class="box-solution" id="tab-7">
          <h3>Impermeabilizaci&oacute;n espejo de agua</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/espejo_agua.jpg" alt="Impermeabilizaci&oacute;n espejo de agua">
          <ol>
            <li>
              <span>Superficie</span>
            </li>
            <li>
              <span>Sistema avanzado de Impermeabilizacion DuoFlex&reg;</span>
            </li>
            <li>
              <span>Tela geotextil no tejida de protecci&oacute;n</span>
            </li>
            <li>
              <span>Mortero de protecci&oacute;n</span>
            </li>
            <li>
              <span>Acabado final</span>
            </li>
          </ol>
        </div>
        <div class="box-solution" id="tab-8">
          <h3>Impermeabilizaci&oacute;n de canales</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/impermeabilizacion_canales.jpg" alt="Impermeabilizaci&oacute;n de canales">
          <ol>
            <li>
              <span>Superficie</span>
            </li>
            <li>
              <span>Sistema avanzado de Impermeabilizacion DuoFlex&reg;</span>
            </li>
            <li>
              <span>Tela geotextil no tejida de protecci&oacute;n</span>
            </li>
            <li>
              <span>Mortero de protecci&oacute;n</span>
            </li>
            <li>
              <span>Acabado final</span>
            </li>
          </ol>
        </div>
        <div class="box-solution" id="tab-9">
          <h3>Impermeabilizaci&oacute;n de tuneles</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/impermeabilizacion_tuneles.jpg" alt="Impermeabilizaci&oacute;n de tuneles">
          <ol>
            <li>
              <span>Concreto</span>
            </li>
            <li>
              <span>Sistema avanzado de Impermeabilizacion DuoFlex&reg;</span>
            </li>
            <li>
              <span>Tela geotextil no tejida de proteccion</span>
            </li>
            <li>
              <span>Mortero de protecci&oacute;n</span>
            </li>
          </ol>
        </div>
        <div class="box-solution" id="tab-10">
          <h3>Impermeabilizaci&oacute;n de piscina</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/images/piscina.jpg" alt="Impermeabilizaci&oacute;n de piscina">
          <ol>
            <li>
              <span>Superficie</span>
            </li>
            <li>
              <span>Sistema avanzado de Impermeabilizacion DuoFlex&reg;</span>
            </li>
            <li>
              <span>Tela geotextil no tejida de protecci&oacute;n</span>
            </li>
            <li>
              <span>Mortero de protecci&oacute;n</span>
            </li>
            <li>
              <span>Acabado final</span>
            </li>
          </ol>
        </div>
        <aside>
          <li><a id="LINK-1" class="active" href="javascript:;" onClick="oculta('tab-1','LINK-1');">Impermeabilizaci&oacute;n de plataformas</a></li>
          <li><a id="LINK-2" href="javascript:;" onClick="oculta('tab-2','LINK-2');">Impermeabilizaci&oacute;n de balcones y terrazas</a></li>
          <li><a id="LINK-3" href="javascript:;" onClick="oculta('tab-3','LINK-3');">Impermeabilizaci&oacute;n de cubiertas expuestas</a></li>
          <li><a id="LINK-4" href="javascript:;" onClick="oculta('tab-4','LINK-4');">Impermeabilizacion piso flotante</a></li>
          <li><a id="LINK-5" href="javascript:;" onClick="oculta('tab-5','LINK-5');">Impermeabilizaci&oacute;n de muros de contenci&oacute;n – negativo</a></li>
          <li><a id="LINK-6" href="javascript:;" onClick="oculta('tab-6','LINK-6');">Impermeabilizaci&oacute;n de paredes en s&oacute;tano – positivo</a></li>
          <li><a id="LINK-7" href="javascript:;" onClick="oculta('tab-7','LINK-7');">Impermeabilizaci&oacute;n espejo de agua</a></li>
          <li><a id="LINK-8" href="javascript:;" onClick="oculta('tab-8','LINK-8');">Impermeabilizaci&oacute;n de canales</a></li>
          <li><a id="LINK-9" href="javascript:;" onClick="oculta('tab-9','LINK-9');">Impermeabilizaci&oacute;n de tuneles</a></li>
          <li><a id="LINK-10" href="javascript:;" onClick="oculta('tab-10','LINK-10');">Impermeabilizaci&oacute;n de piscina</a></li>
        </aside>
        <br/>
      </article>
    </section>
    <section>
      <article class="content_all">
        <h2 class="tit-section">ESPECIFICACIONES</h2>
        <ul class="specs">
          <li>
            <b>Gravedad espec&iacute;fica</b>
            <span><?php the_field('texto_1'); ?></span>
          </li>
          <li>
            <b>Color</b>
            <span><?php the_field('texto_2'); ?></span>
          </li>
          <li>
            <b>Contenido de s&oacute;lidos</b>
            <span><?php the_field('texto_3'); ?></span>
          </li>
          <li>
            <b>Temperatura de aplicaci&oacute;n</b>
            <span><?php the_field('texto_4'); ?></span>
          </li>
          <li>
            <b>Estabilidad al calor</b>
            <span><?php the_field('texto_5'); ?></span>
          </li>
          <li>
            <b>Estabilidad al fr&iacute;o</b>
            <span><?php the_field('texto_6'); ?></span>
          </li>
          <li>
            <b>Elongaci&oacute;n contra rotura</b>
            <span><?php the_field('texto_7'); ?></span>
          </li>
          <li>
            <b>Resistencia al agua estancada</b>
            <span><?php the_field('texto_8'); ?></span>
          </li>
          <li>
            <b>Recuperaci&oacute;n (800% de elongaci&oacute;n)</b>
            <span><?php the_field('texto_9'); ?></span>
          </li>
        </ul>
      </article>
    </section>
    <section class="ventajas-content">
      <article class="content_all">
        <h2 class="tit-section">VENTAJAS</h2>
        <ul class="vent-content">
          <?php the_field('campos_ventajas'); ?>
        </ul>
        <a href="<?php the_field('link_1'); ?>" class="btn-more">VER TODAS <span class="icon-circle-right"></span></a>
      </article>
    </section>
  <?php endwhile; ?>  
</div>

<?php get_footer(); ?>
