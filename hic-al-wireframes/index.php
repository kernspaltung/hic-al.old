<?php

// include_once "logica/show_hero.php";
get_template_part('logica/show_hero');

// include_once "secciones/header.php";
// get_template_part('secciones/header');
get_header();



// include_once ".php";
get_template_part('secciones/home/ultimas-noticias');

// include_once "secciones/home/mapa.php";
get_template_part('secciones/home/mapa');

// include_once "secciones/home/documentos.php";
get_template_part('secciones/home/documentos');

// include_once "secciones/home/actividades.php";
get_template_part('secciones/home/actividades');

// include_once "secciones/home/slider-medios.php";
get_template_part('secciones/home/slider-medios');


get_footer();
