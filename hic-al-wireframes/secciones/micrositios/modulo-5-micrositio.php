<section id="micrositio-modulo5" class="columns h-a">

  <!-- elemento 5 -->

  <?php

  for ($i=0; $i < 4; $i++):

    ?>



    <article id="micrositio-modulo5-entrada" class="columns medium-6 large-4 p-1 h-35-v card">


      <div class="columns p-0 h-65">


        <div class="columns small-5 medium-4 large-3 p-0 h-100 imgLiquid imgLiquidFill">

          <img src="http://fakeimg.pl/250?text=thumb" alt="">

        </div>


        <!-- titulo -->
        <div id="micrositio-portada-titulo" class="columns small-7 medium-8 large-9 p-0 h-80 v-center">

          <h1 class="columns h-1 text-left bold font-xs-m font-sm-m font-md-xl font-lg-xl">

            Título completo de la entrada

          </h1>

        </div>



        <!-- fecha -->
        <div class="columns small-7 medium-8 large-9 p-0 h-20 v-center">

          <div class="columns h-a text-right font-xs-xs font-sm-s font-md-s font-lg-m">

            16/11/2016

          </div>

        </div>


      </div>




      <div class="columns h-35 p-0">

        <!-- tags -->
        <div class="columns p-0">

          <div class="columns p-0 h-a font-xs-s font-sm-s font-md-m font-lg-m p-t-0-2">

            <?php

            for ($j=0; $j < 3; $j++):

              ?>


              <button id="modulo5-tags" class="button hollow">tag <?php echo $j; ?></button>



              <?php

            endfor;

            ?>

          </div>

        </div>


      </div>

    </article>
    <!-- termina elemento -->


    <?php

  endfor;

  ?>



</section>
