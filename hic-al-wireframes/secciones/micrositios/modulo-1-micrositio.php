<!-- DESTACADOS -->
<section id="micrositio-modulo1" class="columns h-a">

  <!-- menu modulo 1 -->
  <ul id="micrositio-modulo1-menu" class="columns p-0 m-0 h-50-v">

    <?php

    for ($i=0; $i < 3; $i++):
      ?>

      <a href="#" class="columns shareH">
        <li class="columns h-100 p-0 text-center v-center">Elemento</li>
      </a>

      <?php

    endfor;

    ?>

  </ul>





  <!-- elemento 1 -->

  <?php


// misma cantidad de elementos que su menu "3"

  for ($i=0; $i < 3; $i++):

    ?>



    <article id="micrositio-modulo1-entrada" class="columns p-1 h-75-v">

      <div class="columns p-0 h-50 imgLiquid imgLiquidFill">

        <img src="http://fakeimg.pl/250?text=thumb" alt="">

      </div>




      <div class="columns h-50">

        <!-- fecha -->
        <div class="columns p-0 h-30 v-center">

          <div class="columns p-0 h-a text-right font-xs-xs font-sm-s font-md-s font-lg-m">

            16/11/2016

          </div>

        </div>

        <!-- titulo -->
        <div id="micrositio-portada-titulo" class="columns p-0 h-30 v-center">

          <h1 class="columns h-1 p-0 text-left font-xs-xxl font-sm-xxl font-md-xxl font-lg-xxl">

            Título completo de la entrada

          </h1>

        </div>


      </div>

    </article>
    <!-- termina elemento -->


<?php

endfor;

 ?>



  </section>
