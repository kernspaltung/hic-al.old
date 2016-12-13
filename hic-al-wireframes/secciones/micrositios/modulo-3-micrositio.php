<!-- DESTACADOS -->
<section id="micrositio-modulo3" class="columns h-a p-t-xs-2 p-md-4 color-tertiary-1-2-1-bg">
   <div class="row h-a p-1">

        <!-- elemento 3 -->

        <?php

        for ($i=0; $i < 6; $i++):

          ?>


      <div class="columns medium-6 large-4 p-0-2 h-a end">

          <article id="micrositio-modulo3-entrada" class="columns p-0 h-50-v card color-neutral-1-bg">

            <a href="#" class="columns p-0 h-100 color-black">

              <div class="columns p-0 h-60 imgLiquid imgLiquidFill">

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt="">

              </div>




              <div class="columns h-40 p-1">

                <!-- fecha -->
                <div class="columns p-0 h-a ">

                  <div class="columns p-0 h-a text-right font-xs color-secondary-2-0">

                    16/11/2016

                  </div>

                </div>

                <!-- titulo -->
                <div id="micrositio-portada-titulo" class="columns p-0 h-a ">

                  <h6 class="columns h-1 p-0 text-left">

                    Título completo de la entrada

                  </h6>

                </div>


                <!-- texto -->
                <div class="columns p-0 h-50 font-s">


                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cupiditate velit culpas dolore.


                </div>


              </div>

            </a>

          </article>

        </div>
          <!-- termina elemento -->


          <?php

        endfor;

        ?>



   </div>
</section>
