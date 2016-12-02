<section id="micrositio-modulo5" class="columns h-a m-b-2">

  <!-- elemento 5 -->

  <?php

  for ($i=0; $i < 4; $i++):

    ?>


    <div class="columns medium-6 large-4 h-a p-0-2 end">

      <article id="micrositio-modulo5-entrada" class="columns h-35-v p-0 card">



          <div class="columns p-0-1 h-65">


            <div class="columns small-5 medium-4 p-0 h-100 imgLiquid imgLiquidFill">

              <img src="http://fakeimg.pl/250?text=thumb" alt="">

            </div>


            <!-- titulo -->
            <div id="micrositio-portada-titulo" class="columns small-7 medium-8 large-8 p-0 h-80 v-center">

              <a href="#" class="columns p-0">

              <h1 class="columns h-1 text-left bold font-xs-m font-sm-l font-md-xl font-lg-xl">

                Título completo de la entrada

              </h1>

            </a>

            </div>



            <!-- fecha -->
            <div class="columns small-7 medium-8 p-0 h-20 v-center">

              <div class="columns h-a text-right font-xs-xs font-sm-s font-md-s font-lg-m">

                16/11/2016

              </div>

            </div>


          </div>




          <!-- tags -->
          <div class="columns h-30 p-l-0-2 p-t-0-2 v-center">

                <?php

                for ($j=0; $j < 3; $j++):

                  ?>


                  <div id="modulo5-tags" class="w-a h-a p-0-2 button font-s">Marcador <?php echo $j; ?></div>



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



</section>
