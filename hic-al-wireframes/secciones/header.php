<!doctype html>
<html class="no-js" lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HIC-AL</title>

  <?php include_once 'dependencies/styles.php'; ?>

</head>
<body class="p-t-xs-3">



  <section id="hero" class="columns h-70-v rel v-center rel">
    <div id="imagen-header" class="columns h-80-v fixed top right z-1 p-0 imgLiquid imgLiquidFill">
      <img src="https://junkitechture.files.wordpress.com/2015/04/2a5e2f23-aa20-4cc3-81bf-77fe701ff8cf-2060x1236.jpeg?w=1060" alt="">
    </div>
    <div class="texto columns h-70-v absUpL z-0 v-center">
      <div class="columns h-a">
        <div id="logo" class="columns h-15-v h-md-100 medium-4 large-2 p-l-4 p-0 imgLiquid imgLiquidNoFill">
          <img src="img/logo-300.png" alt="">
        </div>
        <div id="logo" class="columns h-sm-50 h-md-100 medium-8 large-10 p-l-4 p-0 v-center color-blanco">
          <div class="columns h-a p-0">
            <h1 class=" txsh bold">
              Habitat International Coalition
            </h1>
            <h2 class=" txsh bold">
              América Latina
            </h2>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- header escritorio -->
  <header id="header" class="header columns h-a show-for-large">




    <!-- menu desktop -->
    <nav id="menu-desktop" class="columns medium-10 large-8 absUpR text-left h-a color-vino-bg bottom-left-corner" >


      <!-- este se mueve de sitio con jquery -->
      <div id="menu-list-container" class="columns h-menu-hical p-0">


        <ul id="menu-list" class="columns medium-11 large-11 h-100 p-0 m-0">

          <?php

          $menu = array('Red global', 'Membresía', 'Calendario', 'Suscripción', 'Enlaces' );


          for ($i=0; $i < count($menu); $i++):

          ?>


          <a href="#" class="shareW p-0 text-center color-blanco color-gris-naranja-claro-hover rel h-100 ">

            <div class="columns p-0 h-100 v-center">

              <li id="menu-element" class="columns p-0 text-center h-a borde-derecho bold font-md-xs font-lg-m-s">

                <?php
                echo $menu[$i];
                ?>

              </li>

            </div>

            <?php

            //if ($i == 0):

            ?>
            <!-- senalador menu activo -->
            <!-- <div id="active-pointer-<?php echo $i;?>" class="columns absDownL left h-5 menu-activo">

            <div class="small-offset-5 menu-activo-triangulo">

          </div>

        </div> -->





        <?php
        //endif;

        ?>




      </a>

      <?php
      endfor;
      ?>


    </ul>

    <!-- buscador -->

    <div id="menu-search" class="columns h-100 absUpL p-t-0-2 p-r-0 z1k input-inicial hidden">

      <input type="text" class="p-0 h-100 color-vino-claro-bg color-vino bold font-l" placeholder="Busca ...">

    </div>

    <!--  -->

    <div id="boton-buscar" class="columns medium-1 large-1 p-0 h-100 v-center">

      <a href="#" class="shareW p-0 m-0 text-center color-blanco color-gris-naranja-claro-hover h-a  ">

        <i class="fa fa-search"></i>

      </a>

    </div>

  </div>


</nav>
<!-- end menu desktop -->


</header>
<!-- termina header escritorio -->


<!-- header movil -->
<header id="header-movil" class="columns h-10-v shadow header hide-for-large fixed top z1k1 left show-for-small p-0-2 show-form-medium color-white-bg">

  <div id="logo-movil" class="columns small-3 medium-3 large-2 p-0 imgLiquid imgLiquidNoFill">
    <img src="img/logo-50.png" alt="">
  </div>


  <div id="boton-menu-movil" class="columns small-2 medium-1 pointer fixed top right h-10-v v-center">

    <i id="barras" class="fa fa-bars font-xs-l font-sm-xl font-md-xxl bold color-negro"></i>

  </div>



  <!-- menu movil -->
  <nav id="menu-movil" class="hidden columns medium-12 fixed top left top-menu-movil text-left h-90-v color-vino-bg" >


    <div id="menu-list-container-movil" class="columns h-100 p-0">

      <ul id="menu-list" class="columns medium-12 h-80 p-0 m-0">

        <?php

        $menu = array('Inicio', 'Mundo', 'Membresía','Calendario','Suscripción','Enlaces');


        for ($i=0; $i < 6 ; $i++):

        ?>


        <a href="#" class="columns p-0 text-center color-blanco borde-abajo color-gris-naranja-claro-hover h-15">

          <div class="columns p-0 p-t-1">

            <li id="menu-element" class="columns vcenter text-center h-a">

              <?php
              echo $menu[$i];
              ?>

            </li>

          </div>

          <?php

          if ($i == 0):

          ?>




          <?php
          endif;

          ?>




        </a>


        <?php
        endfor;
        ?>


        <!-- buscador -->

        <div id="menu-search" class="columns h-100 absUpL p-t-0-2 p-r-0 z1k ancho-inicial hidden">

          <input type="text" class="columns p-0 h-80 color-vino-claro-bg color-vino bold" placeholder="Search ...">

        </div>

        <!--  -->

      </ul>



      <!-- <div id="menu-element" class="columns medium-12 h-20 p-t-0-2 p-r-0 p-l-0">

      <input type="text" class="columns p-0 h-80" placeholder="Buscar ...">

    </div>

  </div> -->


</nav>
<!-- end menu movil -->


</header>
<!-- termina header movil -->

<?php
include_once "secciones/menu-scroll.php";


?>

<div id="main-container" class="columns w-100-v h-a m-0 p-0 color-white-bg">


  <?php

  include_once "secciones/sidebar-1.php";
  ?>

  <main id="main" class="columns large-8 p-0 h-a">
