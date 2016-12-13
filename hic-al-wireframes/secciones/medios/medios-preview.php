<section id="portafolio-preview-canvas" class="columns h-60-v m-b-2 color-gris-oscuro-bg color-blanco" style="display: none;">

  <div id="close-medios-preview" class="columns p2 text-right h-10 pointer">

    <i class="fa fa-remove bold font-xs-m font-sm-l font-md-xl font-lg-xxl color-blanco color-naranja-hover"></i>

  </div>

  <!-- perview lado izquierdo imagen -->
  <div id="medios-preview-img" class="columns small-12 medium-6 large-6 p-3 h-90">

    <div class="columns h-100 p-0 imgLiquid imgLiquidNoFill">

      <img src="http://fakeimg.pl/500?text=preview-item" alt="">

    </div>

  </div>

  <!-- perview lado derecho texto + imagenes -->
  <div id="medios-preview-texto" class="columns small-12 medium-6 large-6 p-3 h-90">

    <div class="columns h-100 p-0">

      <div class="columns h-50 p-0 ">

        <div class="columns p-0 color-blanco h-a font-xs-m font-sm-m font-md-l font-lg-l">

          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, earum praesentium nesciunt.

        </div>

      </div>

      <div id="medios-preview-thumbs" class="columns h-50 slick-medios-preview-thumbs">


        <?php

        for ($i=0; $i < 8; $i++):

        ?>

        <div class="columns h-100 p-l-0-2 p-r-0-2 imgLiquid imgLiquidNoFill">

          <img src="http://fakeimg.pl/100?text=thumb" alt="">

        </div>


        <?php
        endfor;

        ?>



      </div>

    </div>

  </div>

</section>
