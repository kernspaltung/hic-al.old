<?php

// include_once "secciones/header-micrositio.php";
get_header('micrositio');
?>
<!-- estilos custom -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/micrositio/micrositio-1.css" media="screen" title="Micrositio Hic-al">
<!-- <link rel="stylesheet" href="css/micrositio/micrositio-2.css" media="screen" title="Micrositio Hic-al"> -->
<!-- <link rel="stylesheet" href="css/micrositio/micrositio-3.css" media="screen" title="Micrositio Hic-al"> -->

<?php

//
// include_once "secciones/micrositios/portada-micrositio.php";
get_template_part('secciones/micrositios/portada-micrositio');
//modulos
// include_once "secciones/micrositios/modulo-1-micrositio.php";
get_template_part('secciones/micrositios/modulo-1-micrositio');

// include_once "secciones/micrositios/modulo-2-micrositio.php";
get_template_part('secciones/micrositios/modulo-2-micrositio');

?>

<div id="home-mapa" class="columns row expanded h-60-v"></div>


<?php
// include_once "secciones/micrositios/modulo-3-micrositio.php";
get_template_part('secciones/micrositios/modulo-3-micrositio');

// include_once "secciones/micrositios/modulo-4-micrositio.php";
get_template_part('secciones/micrositios/modulo-4-micrositio');

// include_once "secciones/micrositios/modulo-5-micrositio.php";
get_template_part('secciones/micrositios/modulo-5-micrositio');


// include_once "secciones/micrositios/modulo-6-micrositio.php";
get_template_part('secciones/micrositios/modulo-6-micrositio');




// include_once "secciones/footer-micrositio.php";
get_footer('micrositio');
