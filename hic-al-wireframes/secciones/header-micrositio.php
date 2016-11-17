<!doctype html>
<html class="no-js" lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HIC-AL - Micrositio</title>
  <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick-theme.css">
  <link rel="stylesheet" href="recursos/js_utils/dist/stylesheet/js_utils.min.css">
  <link rel="stylesheet" href="css/app.css">

</head>
<body>


  <!-- header escritorio -->
  <header id="header-escritorio-micrositio" class="header columns h-20-v color-blanco-bg show-for-large shadow">

    <div id="logo" class="columns small-6 medium-4 large-2 m-l-4 p-0 imgLiquid imgLiquidNoFill">
      <img src="img/logo-300.png" alt="">
    </div>



    <!-- menu desktop -->
    <nav id="menu-desktop-micrositio" class="columns medium-10 large-8 text-left h-a color-gris-bg bottom-left-corner" >


    <!-- este se remueve con jquery -->
    <!-- <div id="menu-list-container-micrositio" class="columns h-menu-hical p-0">

    <ul id="menu-list-micrositio" class="columns medium-9 large-9 h-100 p-0 m-0">

    <?php

    // $menu = array('Inicio', 'Mundo', 'Membresía','Calendario','Suscripción','Enlaces');


    // for ($i=0; $i < 6 ; $i++):

    ?>


    <a href="#" class="shareW p-0 text-center color-blanco color-gris-naranja-claro-hover rel h-100 ">

    <div class="columns p-0 h-100 v-center">

    <li id="menu-element-micrositio" class="columns p-0 text-center h-a borde-derecho font-md-s font-lg-m">

    <?php
    // echo $menu[$i];
    ?>

  </li>

</div>


</a>

<?php
// endfor;
?>


</ul>

<div id="menu-element-micrositio" class="columns medium-3 large-3 h-100 p-t-0-2 p-r-0">

<input type="text" class="columns p-0 h-80" placeholder="Search ...">

</div>

</div> -->


</nav>
<!-- end menu desktop -->


</header>
<!-- termina header escritorio -->




<!-- header movil -->
<header id="header-movil-micrositio" class=" columns h-10-v shadow header hide-for-large color-white-bg p-t-0-2 p-b-0-2 fixed top z1k1 left show-for-small p-0 show-form-medium">


  <div id="logo-movil-micrositio" class="columns small-3 medium-3 large-2 imgLiquid imgLiquidNoFill">
    <img src="img/logo-50-2x.png" alt="">
  </div>

  <div id="placeholder-header-movil-micrositio" class="columns small-9 medium-9 large-10 h'a z-1 p-0 imgLiquid imgLiquidFill">
    <!-- <img src="http://fakeimg.pl/300?text=landscape" alt=""> -->
  </div>


  <div id="boton-menu-movil-micrositio" class="columns small-2 medium-1 pointer fixed top right h-10-v v-center">

    <i id="barras-micrositio" class="fa fa-bars font-xs-l font-sm-xl font-md-xxl bold color-negro"></i>

  </div>



  <!-- menu movil -->
  <nav id="menu-movil-micrositio" class="hidden columns medium-12 fixed top left top-menu-movil text-left h-75-v color-vino-bg" >


    <div id="menu-list-container-movil-micrositio" class="columns h-100 p-0">

      <ul id="menu-list-micrositio" class="columns medium-12 h-80 p-0 m-0">

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



      <div id="menu-element-micrositio" class="columns medium-12 h-20 p-t-0-2 p-r-0 p-l-0">

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

<div id="main-container-micrositio" class="columns w-100-v h-a m-0 p-0 color-white-bg">


  <?php

  // include_once "secciones/sidebar-1.php";
  ?>

  <main id="main-micrositio" class="columns large-8 p-0 h-a">