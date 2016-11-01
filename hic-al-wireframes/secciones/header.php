<!doctype html>
<html class="no-js" lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HIC-AL</title>
  <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick-theme.css">
  <link rel="stylesheet" href="recursos/js_utils/dist/stylesheet/js_utils.min.css">
  <link rel="stylesheet" href="css/app.css">

</head>
<body>




<!-- header escritorio -->
  <header id="header" class="header columns h-25-v show-for-large">

    <div id="logo" class="columns small-6 medium-4 large-2 p-0 imgLiquid imgLiquidNoFill">
      <img src="http://fakeimg.pl/300?text=placeholder" alt="">
    </div>

    <div id="imagen-header" class="columns small-6 medium-8 large-10 fixed top right h-25-v z-1 p-0 imgLiquid imgLiquidFill">
      <img src="http://fakeimg.pl/300?text=landscape" alt="">

    </div>



    <!-- menu desktop -->
    <nav id="menu-desktop" class="columns medium-10 large-8 absUpR text-left h-a color-vino-bg bottom-left-corner" >


      <div id="menu-list-container" class="columns h-menu-hical p-0">

        <ul id="menu-list" class="columns medium-9 large-9 h-100 p-0 m-0">

          <?php

          $menu = array('Inicio', 'Mundo', 'Membresía','Calendario','Suscripción','Enlaces');


          for ($i=0; $i < 6 ; $i++):

            ?>


            <a href="#" class="shareW p-0 text-center color-blanco color-gris-naranja-claro-hover rel h-100 ">

              <div class="columns p-0 h-100 v-center">

                <li id="menu-element" class="columns  text-center h-a borde-derecho">

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
  <header id="header-movil" class="header columns h-25-v hide-for-large fixed top z1k1 left show-for-small show-form-medium">

    <div id="logo-movil" class="columns small-3 medium-3 large-2 p-0 imgLiquid imgLiquidNoFill">
      <img src="http://fakeimg.pl/300?text=placeholder" alt="">
    </div>

    <div id="imagen-header-movil" class="columns small-9 medium-9 large-10 fixed top right h-25-v z-1 p-0 imgLiquid imgLiquidFill">
      <img src="http://fakeimg.pl/300?text=landscape" alt="">
    </div>


    <div id="boton-menu-movil" class="columns small-2 medium-1 pointer fixed top right h-25-v v-center">

      <i id="barras" class="fa fa-bars font-xs-l font-sm-l font-md-xl bold color-negro"></i>

    </div>



    <!-- menu movil -->
    <nav id="menu-movil" class="hidden columns medium-10 large-8 absUpR text-left h-a color-vino-bg bottom-left-corner" >


      <div id="menu-list-container" class="columns h-menu-hical p-0">

        <ul id="menu-list" class="columns medium-9 large-9 h-100 p-0 m-0">

          <?php

          $menu = array('Inicio', 'Mundo', 'Membresía','Calendario','Suscripción','Enlaces');


          for ($i=0; $i < 6 ; $i++):

            ?>


            <a href="#" class="shareW p-0 text-center color-blanco color-gris-naranja-claro-hover rel h-100 ">

              <div class="columns p-0 h-100 v-center">

                <li id="menu-element" class="columns  text-center h-a borde-derecho">

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
    <!-- end menu movil -->


  </header>
  <!-- termina header movil -->

  <?php include_once "secciones/menu-scroll.php"; ?>

  <div id="main" class="columns p-0 h-a color-blanco-bg" >
