<section id="portfolio-grid" class="columns p-0 p-b-3">

  <h1 id="titulo-portfafolio" class="columns text-center bold font-xs-l font-sm-xl font-md-l font-lg-xxl p-t-1 p-b-1">


    Titulo Portafolio

  </h1>

  <?php

  for ($i=0; $i < 16 ; $i++):
    ?>


    <div id="canvas-item-portfolio-<?php echo $i;?>" class="columns small-12 medium-6 large-4 rel p-1 m-b-0-1 pointer end h-40-v imgLiquid imgLiquidNoFill portfolio-item">

      <img src="http://fakeimg.pl/400?text=Item" alt="">


      <div id="canvas-item-pointer-<?php echo $i;?>" class="columns absDownL left h-5 canvas-item-pointer hidden ">

        <div class="small-offset-5 triangulo-arriba">

        </div>

      </div>


    </div>



    <?php

    // include_once "secciones/portfolio/portfolio-preview.php";

  endfor;
  ?>




</section>
