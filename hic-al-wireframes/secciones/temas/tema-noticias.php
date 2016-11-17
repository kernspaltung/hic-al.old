<!-- solo en escritorio -->
<section id="tema-noticias" class="columns small-12 medium-12 large-4 h-75-v show-for-large">


  <?php

  for ($i=0; $i < ; $i++):

    ?>

    <a href="#" class="columns h-a">

      <article id="tema-noticias-articulo" class="columns p-1 h-75-v">

        <div class="columns p-0 h-40 imgLiquid imgLiquidFill">

          <img src="http://fakeimg.pl/250?text=thumb" alt="">

        </div>


    
        <div class="columns h-30">


          <!-- titulo -->
          <div id="tema-noticias-titulo" class="columns p-0 h-30 v-center">

            <h1 class="columns h-1 p-0 text-left font-xs-xxl font-sm-xxl font-md-xxl font-lg-xxl">

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
    <!-- termina elemento -->


    <?php

  endfor;

  ?>


</section>


<!-- solo en movil -->
<section id="tema-noticias" class="columns small-12 medium-12 large-4 h-50-v hide-for-large">

  <div id="tema-noticias-titulo" class="columns small-6 h-20 p-1-3 font-xs-m font-sm-m font-md-m v-center">

    Noticias

  </div>

  <a href="#" class="columns small-6 h-20">

    <div id="tema-noticias-vermas" class="columns h-100 text-right p-1-3 font-xs-m font-md-m v-center">

      Ver más <i class="fa fa-plus"></i>

    </div>

  </a>




</section>
