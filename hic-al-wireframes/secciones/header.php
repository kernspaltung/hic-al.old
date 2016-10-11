<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HIC-AL</title>
  <link rel="stylesheet" href="recursos/style_utils/css/style_utils.css">
  <link rel="stylesheet" href="recursos/js_utils/dist/stylesheet/js_utils.min.css">
  <link rel="stylesheet" href="css/app.css">

</head>
<body>

  <header id="header" class="header columns h-15-v">

    <div id="logo" class="columns small-6 medium-4 large-2 p0 imgLiquid imgLiquidNoFill">
      <img src="http://fakeimg.pl/300?text=placeholder" alt="">
    </div>

    <div id="imagen-header" class="columns small-6 medium-8 large-10 p0 imgLiquid imgLiquidFill">
      <img src="http://fakeimg.pl/300?text=placeholder" alt="">
    </div>



    <!-- menu desktop -->
    <div id="menu-desktop" class="columns absUpR text-left h-15">

      <ul id="menu-list" class="columns medium-10 large-8 medium-offset-2 large-offset-4 h-5-v p-0 m-0">

        <?php


        for ($i=0; $i < 5 ; $i++):
          // note: contains 1 "li" less than the reference

          ?>

          <a href="#" class="columns small-2 p-0 text-center h-100 v-center"><li id="menu-element" class="columns  text-center h-a">menu</li></a>

          <?php
        endfor;
        ?>

        <li class="columns large-2 end " id="menu-element">
          <input type="text" class="columns p-0" placeholder="Search ...">
        </li>

      </ul>



    </div>
    <!-- end menu desktop -->


  </header>

  <div id="main" class="columns p-0">
