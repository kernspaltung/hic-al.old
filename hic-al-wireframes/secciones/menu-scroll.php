<?php

global $menu;
$menu = array('Últimas Noticias', 'Documentos', 'Actividades');

global $hide_sidebars;


$large_classes = ! $hide_sidebars ? " large-8 large-offset-2 " : "";

?>

<!-- menu en scroll -->
<nav id="menu-scroll" class="columns medium-12 <?php echo $large_classes; ?> fixed top z1k1 text-left h-15-v color-gris-naranja-claro-bg bottom-left-right-corner posicion-inicial p-0-2" >

  <!--  -->

  <div id="logo-scroll" class="columns large-2 h-100 p-0 imgLiquid imgLiquidNoFill">

    <a href="index.php" class="h-100 w-100 p-0-2">

      <img src="img/logo-50-2x.png" alt="">

    </a>

  </div>

  <!--  -->




  <div id="menu-scroll-sitio" class="columns h-50 large-10 p-0">

    <!-- aqui se incrusta el menu principal del sitio en escritorio-->

  </div>

  <!--  -->

  <div id="menu-scroll-secciones" class="columns large-10 color-gris-naranja-medio-bg h-50 bottom-right-corner">

    <ul id="menu-scroll-list" class="columns large-10 h-100 p-0 m-0 rel">

      <?php

      for ($i=0; $i < count( $menu ) ; $i++):

      ?>


      <a href="#" class="shareW p-0 text-center color-vino-intenso color-gris-naranja-claro-hover h-100 ">

        <div class="columns p-0 h-100 v-center">

          <li class="menu-element columns  text-center h-a font-xs">

            <?php
            echo $menu[$i];
            ?>

          </li>

        </div>


      </a>


      <?php
      endfor;
      ?>






    </ul>


  </div>

</nav>
<!-- end menu desktop -->
