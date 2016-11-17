<?php
function cargar_recursos() {
   wp_enqueue_style('astillero-estilos', get_stylesheet_directory_uri() . "/assets/css/r4m4z4.min.css" );
   wp_enqueue_script('astillero-scripts', get_stylesheet_directory_uri() . "/assets/js/r4m4z4.min.js" );
}
add_action( 'wp_enqueue_scripts', 'cargar_recursos' );
