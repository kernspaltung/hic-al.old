<!-- solo en escritorio -->
<section id="tema-noticias" class="columns large-4 h-a m-b-1 show-for-large">

  <a href="#" class="columns p-0 h-10-v color-blanco color-naranja-bg v-center">

    <div id="tema-noticias-titulo" class="columns font-xl h-a">

      Noticias

    </div>

  </a>


<!-- altura total al contenedor de los articulos -->
  <div class="columns p-0 m-0 h-100-v">

  <?php

  for ($i=0; $i < 2; $i++):

    ?>

    <a href="#" class="columns h-45 p-0 m-b-0-3 m-t-0-3 card">

      <article id="tema-noticias-articulo" class="columns p-1 h-100">

        <div class="columns p-0 h-40 imgLiquid imgLiquidFill">

          <img src="http://fakeimg.pl/250?text=thumb" alt="">

        </div>



        <div class="columns h-60 p-0">


          <!-- titulo -->
          <div id="tema-noticias-titulo" class="columns p-0 p-t-0-3 h-a">

            <h1 class="columns h-1 p-0 text-left font-xs-l font-sm-l font-md-l font-lg-l color-negro">

              Título completo de la entrada

            </h1>

          </div>



          <!-- fecha -->
          <div class="columns p-0 h-a v-center">

            <div class="columns p-0-2 h-a text-right font-xs-xs font-sm-s font-md-s font-lg-m color-negro">

              16/11/2016

            </div>

          </div>



          <div id="tema-noticias-texto" class="columns large-12 p-0 p-t-0-3 h-50 v-center">

            <div class="columns h-a text-left font-m color-negro">

              Lorem ipsum dolor sit amet ewer, consectetur adipisicing elit...<small>ver más.</small>

            </div>

          </div>



        </div>



      </article>

    </a>
    <!--  -->


    <?php

  endfor;

  ?>
</div>

  <div id="tema-noticias-vermas" class="columns h-5-v v-center p-0 color-naranja-bg">

    <a class="columns p-0 h-a text-center font-xs-m font-md-m color-blanco color-gris-naranja-claro-hover">

      Ver más <i class="fa fa-plus"></i>
    </a>

  </div>

</section>
<!-- termina seccion escritorio -->


<!-- solo en movil -->
<section id="tema-noticias-movil" class="columns h-60-v p-1 hide-for-large">

  <!-- header seccion -->

  <div class="columns p-0 h-20 color-naranja-bg">


    <div id="tema-noticias-titulo" class="columns small-6 v-center">

      <div class="columns p-0 h-a text-left font-xs-m font-md-m color-blanco">

        Noticias

      </div>

    </div>


    <a href="#" class="columns small-6 h-100">

      <div id="tema-noticias-vermas" class="columns h-100 v-center p-0">

        <div class="columns p-0 h-a text-right font-xs-m font-md-m color-blanco color-gris-naranja-claro-hover">

          Ver más <i class="fa fa-plus"></i>
        </div>

      </div>

    </a>

  </div>
  <!-- termina header seccion -->


  <!-- slider posts -->
  <div id="tema-noticias-slider-small" class="columns p-0 p-t-0-3 h-80 slider-temas">

    <?php

    for ($x=0; $x < 8 ; $x++):


      ?>



      <article class="columns p-0">

        <?php

        for ($i=0; $i < 2 ; $i++):


          ?>



            <div class="columns small-6 card">

              <a href="#" class="columns h-100 p-0 m-0 color-negro">

              <!-- imagen -->
              <div class="columns p-0 h-40 imgLiquid imgLiquidFill">

                <img src="http://fakeimg.pl/320?text=thumb" alt="" />


              </div>

              <!-- titulo -->
              <div class="columns p-0 h-40 v-center">

                <div id="tema-noticias-titulo" class="columns h-a font-xs-m font-sm-l font-md-xxl">

                  Título largo de algúna noticia

                </div>

              </div>



              <!-- fecha -->
              <div class="columns p-0 h-20 v-center">

                <div class="columns p-0 h-a text-center font-xs-s font-sm-m font-md-xl">

                  16/11/2016

                </div>

              </div>

            </a>

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
