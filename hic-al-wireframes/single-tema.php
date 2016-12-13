<?php

include_once "logica/hide_hero.php";
get_header();

if( have_posts() ) :
   while ( have_posts() ) :
      the_post();

      get_template_part('secciones/temas/tema-portada');

      // include_once "secciones/temas/tema-noticias.php";
      get_template_part('secciones/temas/tema-noticias');

      // include_once "secciones/temas/tema-documentos.php";
      get_template_part('secciones/temas/tema-documentos');

      // include_once "secciones/temas/tema-actividades.php";
      get_template_part('secciones/temas/tema-actividades');

   endwhile;
endif;



// include_once "secciones/footer-sin-sidebar.php";
get_footer();
