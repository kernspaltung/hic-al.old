<!doctype html>
<html class="no-js" lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HIC-AL</title>
  <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick-theme.css">
  <link rel="stylesheet" href="bower_components/leaflet/dist/leaflet.css">

  <link rel="stylesheet" href="recursos/js_utils/dist/stylesheet/js_utils.min.css">
  <link rel="stylesheet" href="css/app.css">

</head>
<body>

  <!-- header escritorio -->
  <header id="header" class="header columns h-20-v p-r-0 show-for-large shadow">

<!-- logo -->
    <div class="columns large-2 p-t-0-2 p-b-0-2">

      <div id="logo-escritorio-sin-sidebar" class="columns imgLiquid imgLiquidNoFill">

        <img src="img/logo-500.png" alt="">

      </div>

    </div>


    <div id="imagen-header-sin-sidebar" class="columns large-10 h-20-v p-0 imgLiquid imgLiquidFill">

      <img src="http://www.hic-al.org/images/2015-06-29_18-35-10.jpg" alt="">

    </div>

    <!-- menu desktop -->
    <nav id="menu-desktop" class="columns medium-10 large-8 absUpR text-left h-a color-vino-bg bottom-left-corner" >


      <!-- este se remueve con jquery -->
      <div id="menu-list-container" class="columns h-menu-hical p-0">

        <ul id="menu-list" class="columns medium-9 large-9 h-100 p-0 m-0">

          <?php

          $menu = array('Inicio', 'Mundo', 'Membresía','Calendario','Suscripción','Enlaces');


          for ($i=0; $i < 6 ; $i++):

          ?>


          <a href="#" class="shareW p-0 text-center color-blanco color-gris-naranja-claro-hover rel h-100 ">

            <div class="columns p-0 h-100 v-center">

              <li id="menu-element" class="columns p-0 text-center h-a borde-derecho font-md-s font-lg-m">

                <?php
                echo $menu[$i];
                ?>

              </li>

            </div>

            <?php

            if ($i == 0):

            ?>
            <!-- senalador menu activo -->
            <div id="active-pointer-<?php echo $i;?>" class="columns absDownL left h-5 menu-activo">

              <div class="small-offset-5 menu-activo-triangulo">

              </div>

            </div>





            <?php
            endif;

            ?>




          </a>

          <?php
          endfor;
          ?>


        </ul>

        <div id="menu-element" class="columns medium-3 large-3 h-100 p-t-0-2 p-r-0">

          <input type="text" class="columns p-0 h-80" placeholder="Search ...">

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
    <nav id="menu-movil" class="hidden columns medium-12 fixed top left top-menu-movil text-left h-75-v color-vino-bg" >


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


        </ul>



        <div id="menu-element" class="columns medium-12 h-20 p-t-0-2 p-r-0 p-l-0">

          <input type="text" class="columns p-0 h-80" placeholder="Buscar ...">

        </div>

      </div>


    </nav>
    <!-- end menu movil -->


  </header>
  <!-- termina header movil -->


     <?php

      global $hide_sidebars;
      $hide_sidebars = true;
     include_once "secciones/menu-scroll.php";


     ?>

     <div id="main-container" class="columns w-100-v h-a m-0 p-0 color-white-bg">




        <main id="main" class="columns p-0 h-a">
