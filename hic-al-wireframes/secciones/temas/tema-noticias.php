<!-- solo en escritorio -->
<section id="tema-noticias" class="columns large-4 h-100-v show-for-large">

  <a href="#" class="columns p-0 color-negro">

    <div id="tema-noticias-titulo" class="columns h-10 p-1-3 font-xl v-center">

      Noticias

    </div>

  </a>
  <?php

  for ($i=0; $i < 2; $i++):

    ?>

    <a href="#" class="columns h-50">

      <article id="tema-noticias-articulo" class="columns p-1 h-100">

        <div class="columns p-0 h-60 imgLiquid imgLiquidFill">

          <img src="http://fakeimg.pl/250?text=thumb" alt="">

        </div>



        <div class="columns h-40 p-0">


          <!-- titulo -->
          <div id="tema-noticias-titulo" class="columns p-0 p-t-0-3 h-50 v-center">

            <h1 class="columns h-1 p-0 text-left font-xs-l font-sm-l font-md-l font-lg-l">

              Título completo de la entrada

            </h1>

          </div>



          <!-- fecha -->
          <div class="columns p-0 h-30 v-center">

            <div class="columns p-0 h-a text-right font-xs-xs font-sm-s font-md-s font-lg-m">

              16/11/2016

            </div>

          </div>


        </div>



      </article>

    </a>
    <!--  -->


    <?php

  endfor;

  ?>


</section>
<!-- termina seccion escritorio -->


<!-- solo en movil -->
<section id="tema-noticias-movil" class="columns h-60-v p-1 hide-for-large">

  <!-- header seccion -->

  <div class="columns p-0 h-20">


    <div id="tema-noticias-titulo" class="columns small-6 v-center">

      <div class="columns p-0 h-a text-left font-xs-m font-md-m">

        Noticias

      </div>

    </div>


    <a href="#" class="columns small-6 h-100">

      <div id="tema-noticias-vermas" class="columns h-100 v-center p-0">

        <div class="columns p-0 h-a text-right font-xs-m font-md-m">

          Ver más <i class="fa fa-plus"></i>
        </div>

      </div>

    </a>

  </div>
  <!-- termina header seccion -->


  <!-- slider posts -->
  <div id="tema-noticias-slider-small" class="columns p-0  h-80 slider-temas">

    <?php

    for ($x=0; $x < 8 ; $x++):


      ?>



      <article class="columns p-0">

        <?php

        for ($i=0; $i < 2 ; $i++):


          ?>


          <div class="columns small-6">

            <!-- imagen -->
            <div class="columns p-0 h-40 imgLiquid imgLiquidFill">

              <img src="http://fakeimg.pl/320?text=thumb" alt="" />


            </div>

            <!-- titulo -->
            <div class="columns p-0 h-40 v-center">

              <div id="tema-portada-titulo" class="columns h-a font-xs-m font-sm-l font-md-xxl">

                Título largo de algúna noticia

              </div>

            </div>



            <!-- fecha -->
            <div class="columns p-0 h-20 v-center">

              <div class="columns p-0 h-a text-center font-xs-s font-sm-m font-md-xl">

                16/11/2016

              </div>

            </div>


          </div>



          <?php

        endfor;

        ?>


      </article>

      <?php

    endfor;

    ?>


  </div>



</section>
<!-- fin seccion movil -->
