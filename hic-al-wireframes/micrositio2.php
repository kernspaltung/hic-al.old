<?php


// include_once "secciones/header-micrositio.php";
get_header('micrositio');
?>
<!-- estilos custom -->
<!-- <link rel="stylesheet" href="css/micrositio/micrositio-1.css" media="screen" title="Micrositio Hic-al"> -->
<link rel="stylesheet" href="<?php get_stylesheet_directory_uri(); ?>/css/micrositio/micrositio-2.css" media="screen" title="Micrositio Hic-al">
<!-- <link rel="stylesheet" href="css/micrositio/micrositio-3.css" media="screen" title="Micrositio Hic-al"> -->

<?php

//
//
get_template_part('secciones/micrositios/portada-micrositio');
//modulos
//
get_template_part('secciones/micrositios/modulo-1-micrositio');

//
// get_template_part('secciones/micrositios/modulo-2-micrositio');

//
get_template_part('secciones/micrositios/modulo-3-micrositio');

//
// get_template_part('secciones/micrositios/modulo-4-micrositio');

//
// get_template_part('secciones/micrositios/modulo-5-micrositio');


//
get_template_part('secciones/micrositios/modulo-6-micrositio');




// include_once "secciones/footer-micrositio.php";
get_footer('micrositio');
