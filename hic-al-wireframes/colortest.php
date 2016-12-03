<?php

include_once 'logica/hide_hero.php';
include_once 'secciones/header.php';


$colorList = [

"color-background-bg",
"color-text-bg",
"color-primary-0-bg",
"color-primary-1-bg",
"color-primary-2-bg",
"color-primary-3-bg",
"color-primary-4-bg",
"color-secondary-1-0-bg",
"color-secondary-1-1-bg",
"color-secondary-1-2-bg",
"color-secondary-1-3-bg",
"color-secondary-1-4-bg",
"color-secondary-2-0-bg",
"color-secondary-2-1-bg",
"color-secondary-2-2-bg",
"color-secondary-2-3-bg",
"color-secondary-2-4-bg",
"color-tertiary-1-0-bg",
"color-tertiary-1-1-bg",
"color-tertiary-1-2-bg",
"color-tertiary-1-3-bg",
"color-tertiary-1-4-bg",
"color-tertiary-2-0-bg",
"color-tertiary-2-1-bg",
"color-tertiary-2-2-bg",
"color-tertiary-2-3-bg",
"color-tertiary-2-4-bg",
"color-complement-0-bg",
"color-complement-1-bg",
"color-complement-2-bg",
"color-complement-3-bg",
"color-complement-4-bg",
"color-neutral-0-bg",
"color-neutral-1-bg",
"color-neutral-2-bg",
"color-neutral-3-bg",
"color-neutral-4-bg",
"color-accent-0-bg",
"color-accent-1-bg",
"color-accent-2-bg",
"color-accent-3-bg",
"color-accent-4-bg",

];

?>

<link rel="stylesheet" href="css/micrositio/micrositio-1.css" media="screen" title="no title">

<?php

foreach($colorList as $color) {

?>

<div class="columns small-3 medium-2 h-a p-0-1">
   <div class="w-100 h-15-v squareH <?php echo $color; ?>">

   </div>


</div>


<?php

}


include_once 'secciones/footer.php';

?>
