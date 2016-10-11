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

    <div id="logo" class="columns p0 imgLiquid imgLiquidNoFill">
      <img src="http://fakeimg.pl/300?text=placeholder" alt="">
    </div>

    <div id="imagen-header" class="columns p0 imgLiquid imgLiquidFill">
      <img src="http://fakeimg.pl/300?text=placeholder" alt="">
    </div>



    <!-- menu desktop -->
    <div id="menu-desktop" class="columns medium-10 large-8 absUpR text-left h-20">

      <ul id="menu-list" class="columns p-0">

        <?php

        for ($i=0; $i < 6 ; $i++):
          ?>


          <li id="menu-element" class="columns small-1 text-center">menu</li>

          <?php
        endfor;
        ?>

        <li class="columns small-3" id="menu-element">
          <input type="text" class="columns p-0" placeholder="Search ...">
        </li>

      </ul>



    </div>
    <!-- end menu desktop -->


  </header>

  <div id="main" class="columns p-0">
