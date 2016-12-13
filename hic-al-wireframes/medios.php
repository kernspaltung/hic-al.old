<?php

// include_once "secciones/header.php";
wp_header();
//
#include_once "secciones/sidebar-1.php";
?>


<!-- center-->
<div id="central-container" class="columns p-4">

<?php

// include_once "secciones/medios/medios-grid.php";
get_template_part('secciones/medios/medios-grid');

// include_once "secciones/medios/medios-preview.php";
get_template_part('secciones/medios/medios-preview');

?>
</div>
<!-- center end -->


<?php
//
#include_once "secciones/sidebar-2.php";
//

// include_once "secciones/footer.php";
wp_footer();
 ?>
