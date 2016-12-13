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













function keep_excerpt_tags( $text = '' ) {
   $raw_excerpt = $text;

   if ( '' == $text ) {
      $text = get_the_content( '' );
      $text = strip_shortcodes( $text );
      $text = apply_filters( 'the_content', $text );
      $text = str_replace( ']]>', ']]&gt;', $text );
      $excerpt_length = apply_filters( 'excerpt_length', 55 );
      $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[...]' );

      $allowable = '<br>';
      $text = preg_replace( '@<(script|style)[^>]*?>.*?</\\1>@si', '', $text );
      $text = trim( strip_tags( $text, $allowable ) );

      if ( 'characters' == _x( 'words', 'word count: words or characters?' )
      && preg_match( '/^utf\-?8$/i', get_option( 'blog_charset' ) ) )
      {
         $text = trim( preg_replace( "/[\n\r\t ]+/", ' ', $text ), ' ' );
         preg_match_all( '/./u', $text, $words_array );
         $words_array = array_slice( $words_array[0], 0, $num_words + 1 );
         $sep = '';
      } else {
         $words_array = preg_split( "/[\n\r\t ]+/", $text, $num_words + 1, PREG_SPLIT_NO_EMPTY );
         $sep = ' ';
      }

      if ( count( $words_array ) > $excerpt_length ) {
         array_pop( $words_array );
         $text = implode( $sep, $words_array );
         $text = $text . $excerpt_more;
      } else {
         $text = implode( $sep, $words_array );
      }
   }

   return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}

remove_filter( 'get_the_excerpt', 'wp_trim_excerpt');
add_filter( 'get_the_excerpt', 'keep_excerpt_tags' );




function remove_empty_p( $content ) {
    $content = force_balance_tags( $content );
    $content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
    $content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
    return $content;
}
add_filter('get_the_excerpt', 'remove_empty_p', 20, 1);
add_filter('get_the_content', 'remove_empty_p', 20, 1);
