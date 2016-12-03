<!doctype html>
<html class="no-js" lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HIC-AL - Micrositio</title>

  <?php include_once 'dependencies/styles.php'; ?>

</head>
<body class="color-text">


  <!-- header escritorio -->
  <header id="header-escritorio-micrositio" class="header columns h-15-v color-primary-4-bg color-text fixed show-for-large shadow">

    <div id="logo-micrositio" class="columns medium-4 p-1">

      <a href="#" class="columns p-0 h-100 ">

        <div class="columns medium-3 h-100 imgLiquid imgLiquidNoFill">

          <img src="img/logo-50-2x-blanco.png" alt="">

        </div>

        <div class="columns medium-9 p-0 h-100 v-center">
          <h5 class="text-left p-l-0-2 bold texto-logo uppercase m-0 color-blanco">

            Hic-al

          </h5>
          <h6 class="text-left p-l-0-2 bold texto-logo uppercase m-0 color-blanco">

            <i class="fa fa-arrow-left "></i>Volver

          </h6>
        </div>

      </a>

    </div>



    <!-- menu desktop -->
    <nav id="menu-desktop-micrositio" class="columns medium-8 h-100" >


      <div id="menu-list-container-micrositio" class="columns h-100 p-0 h-100">

        <ul id="menu-list-micrositio" class="menu columns medium-12 large-12 h-100 p-0 m-0">

          <?php

          $menu = array('Menú', 'Menú', 'Menú','Menú','Menú');


          for ($i=0; $i < 4 ; $i++):

          ?>



          <li id="menu-element-micrositio" class="shareW h-100 p-0 text-center font-md-m font-lg-l">

            <a href="#" class="columns text-center color-accent-<?php echo $i+1;?> color-neutral-2-hover h-100 p-t-0 p-b-0">

              <div class="columns p-0 h-100 v-center">

                <div class="columns h-a">

                  <?php
                  echo $menu[$i];
                  ?>


                </div>

              </div>

            </a>

          </li>

          <?php
          endfor;
          ?>


        </ul>

      </div>


    </nav>
    <!-- end menu desktop -->


  </header>
  <!-- termina header escritorio -->




  <!-- header movil -->
  <header id="header-movil-micrositio" class=" columns h-10-v shadow header hide-for-large color-primary-4-bg color-text p-t-0-2 p-b-0-2 fixed top z1k1 left show-for-small p-0 show-form-medium">


    <div id="logo-movil-micrositio" class="columns small-2 medium-1 large-1 p-r-0 imgLiquid imgLiquidNoFill" data-imgLiquid-horizontalAlign="right">

      <img src="img/logo-50-2x-blanco.png" alt="">
    </div>

    <div id="placeholder-header-movil" class="columns small-8 medium-9 large-10 texto-logo text-left p-l-0-1 v-center">

      <h4 class="columns small-4 h-a m-0 p-0 m-0 color-neutral-0">

        HIC-AL

      </h4>
      <div class="columns small-4 h-a p-0 m-0 color-neutral-0">
        <a href="#" class="">

          <i class="columns fa fa-home text-center font-m-s"></i>
          <span class="columns text-center font-xxs p-t-0-1">Principal</span>

        </a>
      </div>
      <div class="columns small-4 h-a p-0 m-0 color-neutral-0">
        <a href="#" class="">

          <i class="columns fa fa-globe text-center font-m-s"></i>
          <span class="columns text-center font-xxs p-t-0-1">Global</span>

        </a>
      </div>

    </div>


    <div id="boton-menu-movil-micrositio" class="columns small-2 medium-1 pointer fixed top right h-10-v v-center">

      <i id="barras-micrositio" class="fa fa-bars font-xs-l font-sm-xl font-md-xxl bold color-neutral-0"></i>

    </div>



    <!-- menu movil -->
    <nav id="menu-movil" class="hidden columns medium-12 fixed top left top-menu-movil text-left h-75-v color-vino-bg" >


      <div id="menu-list-container-movil-micrositio" class="columns h-100 p-0">

        <ul id="menu-list" class="columns medium-12 h-80 p-0 m-0">

          <?php

          $menu = array('Inicio', 'Mundo', 'Membresía','Calendario','Suscripción','Enlaces');


          for ($i=0; $i < 6 ; $i++):
          ?>


          <a href="#" class="columns p-0 text-center color-blanco borde-abajo color-gris-naranja-claro-hover h-15">

            <div class="columns p-0 p-t-1">

              <li id="menu-element-micrositio" class="columns vcenter text-center h-a">

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
  // include_once "secciones/menu-scroll.php";


  ?>

  <div id="main-container" class="columns w-100-v h-a m-0 p-0">


    <?php

    // include_once "secciones/sidebar-1.php";
    ?>

    <main id="main" class="top-micrositio columns p-0 h-a">
