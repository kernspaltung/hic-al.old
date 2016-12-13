<?php


// add featured image

add_theme_support('post-thumbnails');



//Sin home top bar
add_filter('show_admin_bar', '__return_false');

// scripts
function dependencias() {

   wp_enqueue_style( 'estilos-base', get_stylesheet_directory_uri() . '/style.css');
   wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/bower_components/slick-carousel/slick/slick.css');
   wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/bower_components/slick-carousel/slick/slick-theme.css');
   wp_enqueue_style( 'js_utils-js', get_stylesheet_directory_uri() . '/recursos/js_utils/dist/stylesheet/js_utils.css');


   wp_enqueue_style( 'leaflet', get_stylesheet_directory_uri() . '/bower_components/leaflet/dist/leaflet.css');
   wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway' );


   wp_enqueue_style( 'jsutils-css', get_stylesheet_directory_uri() . '/recursos/js_utils/dist/stylesheet/js_utils.min.css');
   wp_enqueue_style( 'estilos', get_stylesheet_directory_uri() . '/css/app.css');
   //
   wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.min.js');
   wp_enqueue_script( 'what-js', get_stylesheet_directory_uri() . '/bower_components/what-input/what-input.js',array(),'0.1', true );
   wp_enqueue_script( 'foundation', get_stylesheet_directory_uri() . '/bower_components/foundation-sites/dist/foundation.js',array(),'6', true );
   wp_enqueue_script( 'imgLiquid', get_stylesheet_directory_uri() . '/bower_components/imgLiquid/js/imgLiquid.js',array(),'1', true );
   wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/bower_components/slick-carousel/slick/slick.min.js',array(),'0.1', true );
   wp_enqueue_script( 'leaflet-js', get_stylesheet_directory_uri() . '/bower_components/leaflet/dist/leaflet.js',array('jquery'),'0.1', true );
   wp_enqueue_script( 'frontend-js', get_stylesheet_directory_uri() . '/recursos/js_utils/dist/js/js_utils.js',array('jquery'),'0.99', true );
   wp_enqueue_script( 'app-js', get_stylesheet_directory_uri() . '/js/app.js',array('jquery'),'0', true );
   wp_enqueue_script( 'page-index-js', get_stylesheet_directory_uri() . '/js/page-index.js',array('jquery'),'0', true );


  //  if( get_post_type() == 'galeria' ) {
  //     wp_enqueue_script( 'galeria-js', get_stylesheet_directory_uri() . '/js/galeria.js',array('jquery'),'1.0', true );
  //  }
   //
   //  if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
   //     wp_enqueue_script( 'comment-reply' );
   //  }
}
add_action( 'wp_enqueue_scripts', 'dependencias' );
