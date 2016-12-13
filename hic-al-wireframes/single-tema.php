<?php

include_once "logica/hide_hero.php";
get_header();

if( have_posts() ) :
   while ( have_posts() ) :
      the_post();

      get_template_part('secciones/temas/tema-portada');

      get_template_part('secciones/temas/tema-contenido');

      get_template_part('secciones/temas/tema-noticias');

      get_template_part('secciones/temas/tema-documentos');

      get_template_part('secciones/temas/tema-actividades');

   endwhile;
endif;



// include_once "secciones/footer-sin-sidebar.php";
get_footer();
