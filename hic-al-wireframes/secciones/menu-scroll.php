<?php

global $menu;
$menu = array('Últimas Noticias', 'Documentos', 'Actividades');

global $hide_sidebars;


$large_classes = ! $hide_sidebars ? " large-8 large-offset-2 " : "";

?>

<!-- menu en scroll -->
<nav id="menu-scroll" class="columns medium-12 <?php echo $large_classes; ?> fixed top z1k1 text-left h-a color-vino-bg bottom-left-right-corner posicion-inicial p-b-0-2" >

  <!--  -->

  <div id="logo-scroll" class="columns large-2 h-10-v p-0 m-t-0-2 imgLiquid imgLiquidNoFill">

    <a href="index.php" class="h-100 w-100">

      <img src="img/logo-50-2x-blanco.png" alt="">

    </a>

  </div>

  <!--  -->




  <div id="menu-scroll-sitio" class="columns large-10 p-0">

    <!-- aqui se incrusta el menu principal del sitio en escritorio-->

  </div>

  <!--  -->

  <div id="menu-scroll-secciones" class="columns large-10 color-vino-claro-bg h-menu-hical bottom-right-corner">

    <ul id="menu-scroll-list" class="columns large-10 h-100 p-0 m-0">

      <?php

      for ($i=0; $i < count( $menu ) ; $i++):

      ?>


      <a href="#" class="shareW p-0 text-center color-blanco color-gris-naranja-claro-hover h-100 ">

        <div class="columns p-0 h-100 v-center">

          <li id="menu-element" class="columns  text-center h-a font-xs">

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
