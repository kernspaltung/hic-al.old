<?php

global $menu;
$menu = array('Últimas Noticias', 'Documentos', 'Actividades');

?>

<!-- menu en scroll -->
<nav id="menu-scroll" class="columns medium-12 large-8 large-offset-2 fixed top z1k1 text-left h-a color-vino-bg bottom-left-right-corner posicion-inicial p-b-0-2" >


  <div id="menu-scroll-sitio" class="columns large-12 p-0">

    <!-- aqui se incrusta el menu principal del sitio en escritorio-->

  </div>



  <div id="menu-scroll-secciones" class="columns large-12 color-vino-claro-bg h-menu-hical bottom-left-right-corner">

    <ul id="menu-list" class="columns large-12 h-100 p-0 m-0">

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
