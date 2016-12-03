<?php

include_once 'logica/hide_hero.php';
include_once 'secciones/header.php';


$colorList = [

"color-background",
"color-background",
"color-background",
"color-background",
"color-background",
"color-text",
"color-text",
"color-text",
"color-text",
"color-text",
"color-primary-0",
"color-primary-1",
"color-primary-2",
"color-primary-3",
"color-primary-4",
"color-secondary-1-0",
"color-secondary-1-1",
"color-secondary-1-2",
"color-secondary-1-3",
"color-secondary-1-4",
"color-secondary-2-0",
"color-secondary-2-1",
"color-secondary-2-2",
"color-secondary-2-3",
"color-secondary-2-4",
"color-tertiary-1-0",
"color-tertiary-1-1",
"color-tertiary-1-2",
"color-tertiary-1-3",
"color-tertiary-1-4",
"color-tertiary-2-0",
"color-tertiary-2-1",
"color-tertiary-2-2",
"color-tertiary-2-3",
"color-tertiary-2-4",
"color-complement-0",
"color-complement-1",
"color-complement-2",
"color-complement-3",
"color-complement-4",
"color-neutral-0",
"color-neutral-1",
"color-neutral-2",
"color-neutral-3",
"color-neutral-4",
"color-accent-0",
"color-accent-1",
"color-accent-2",
"color-accent-3",
"color-accent-4",

];

?>

<link rel="stylesheet" href="css/micrositio/micrositio-1.css" media="screen" title="no title">

<?php

foreach($colorList as $color) {

   for ($i=0; $i < ( floor(count($colorList)/5)); $i++) {

?>

<div class="columns w-20 h-a p-0-1">
   <div class="w-100 h-15-v squareH v-center <?php echo $color . "-bg"; ?>">

<?php

      for ($j=0; $j < 5; $j++) {
   ?>
<span class="columns text-center <?php echo $colorList[($i*5)+$j]; ?>">NAHUAL</span>
<?php
      }

?>
   </div>
</div>
<?php
   }

}


include_once 'secciones/footer.php';

?>
