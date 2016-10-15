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

  <header id="header" class="header columns h-20-v">

    <div id="logo" class="columns small-6 medium-4 large-2 p0 imgLiquid imgLiquidNoFill">
      <img src="http://fakeimg.pl/300?text=placeholder" alt="">
    </div>

    <div id="imagen-header" class="columns small-6 medium-8 large-10 p0 imgLiquid imgLiquidFill">
      <img src="http://fakeimg.pl/300?text=landscape" alt="">
    </div>



    <!-- menu desktop -->
    <nav id="menu-desktop" class="columns medium-10 large-8 absUpR text-left h-a color-neutral_oscuro-bg bottom-left-corner" >

      <ul id="menu-list" class="columns h-5-v p-0 m-0">

        <?php


        for ($i=0; $i < 5 ; $i++):
          // note: contains 1 "li" less than the reference

          ?>

          <a href="#" class="columns small-2 p-0 text-center h-100 v-center"><li id="menu-element" class="columns  text-center h-a">menu</li></a>

          <?php
        endfor;
        ?>

        <li id="menu-element" class="columns large-2 end h-100 v-center">
          <input type="text" class="columns p-0 h-80" placeholder="Search ...">
        </li>

      </ul>



    </nav>
    <!-- end menu desktop -->


  </header>

  <div id="main" class="columns p-0 h-a" >
