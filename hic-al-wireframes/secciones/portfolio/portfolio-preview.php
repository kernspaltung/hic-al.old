<section id="portafolio-preview-canvas" class="columns h-60-v color-gris-oscuro-bg color-blanco" style="display: none;">

  <!-- perview lado izquierdo imagen -->
  <div id="portfolio-preview-img" class="columns small-12 medium-6 large-6 p-4">

    <div class="columns h-100 p-0 imgLiquid imgLiquidNoFill">

      <img src="http://fakeimg.pl/500?text=preview-item" alt="">

    </div>

  </div>

  <!-- perview lado derecho texto + imagenes -->
  <div id="portfolio-preview-texto" class="columns small-12 medium-6 large-6 p-4">

    <div class="columns h-100 p-0">

      <div class="columns h-50">lorem12</div>

      <div id="portfolio-preview-thumbs" class="columns h-50 slick-portfolio-preview-thumbs">


        <?php

        for ($i=0; $i < 8; $i++):

          ?>

          <div class="columns small-6 medium-4 large-3 h-100 p-l-0-2 p-r-0-2 imgLiquid imgLiquidNoFill">

            <img src="http://fakeimg.pl/100?text=thumb" alt="">

          </div>


          <?php
        endfor;

        ?>



      </div>

    </div>

  </div>

</section>
