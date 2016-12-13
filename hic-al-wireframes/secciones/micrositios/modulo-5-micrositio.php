<section id="micrositio-modulo5" class="columns h-a p-md-4 color-complement-4-bg">
   <div class="row h-a">

        <!-- elemento 5 -->

        <?php

        for ($i=0; $i < 4; $i++):

          ?>


          <div class="columns medium-6 large-4 h-a p-0-2 end">

            <article id="micrositio-modulo5-entrada" class="columns h-35-v p-0 color-white-bg color-text card">



                <div class="columns p-0-1 h-65">


                  <div class="columns small-5 medium-4 p-0 h-100 imgLiquid imgLiquidFill">

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt="">

                  </div>


                  <!-- titulo -->
                  <div id="micrositio-portada-titulo" class="columns small-7 medium-8 large-8 p-0 h-80 v-center">

                    <a href="#" class="columns p-0 color-text">

                    <h4 class="columns h-1 text-left">

                      Título completo de la entrada

                    </h4>

                  </a>

                  </div>



                  <!-- fecha -->
                  <div class="columns small-7 medium-8 p-0 h-20 v-center">

                    <div class="columns h-a text-right font-xs">

                      16/11/2016

                    </div>

                  </div>


                </div>




                <!-- tags -->
                <div class="columns h-30 p-l-0-2 p-t-0-2 v-center">

                      <?php

                      for ($j=0; $j < 3; $j++):

                        ?>


                        <div id="modulo5-tags" class="w-a h-a p-0-2 button font-s color-complement-0-bg color-white">Etiqueta <?php echo $j; ?></div>



                        <?php

                      endfor;

                      ?>



                </div>


            </article>

          </div>
          <!-- termina elemento -->


          <?php

        endfor;

        ?>




   </div>
</section>
