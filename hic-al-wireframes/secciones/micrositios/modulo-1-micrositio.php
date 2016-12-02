<!-- DESTACADOS -->
<section id="micrositio-modulo1" class="columns h-a m-b-1">

  <!-- menu paso a header -->
  <!-- <ul id="micrositio-modulo1-menu" class="columns p-0 m-0 h-50-v">

  <?php

  // for ($i=0; $i < 3; $i++):
  ?>

  <a href="#" class="columns shareH">
  <li class="columns h-100 p-0 text-center v-center">Elemento</li>
</a>

<?php

// endfor;

?>

</ul> -->





<!-- elemento 1 -->

<?php


// misma cantidad de elementos que su menu "3"

for ($i=0; $i < 6; $i++):

  ?>


  <div class="columns medium-6 large-4 p-0-2 h-a end">

    <article id="micrositio-modulo1-entrada" class="columns p-0 h-60-sm-v h-70-md-v card m-b-1">

      <a href="#" class="columns p-0 h-100">

        <div class="columns p-0 h-60 imgLiquid imgLiquidFill">

          <img src="http://fakeimg.pl/250?text=thumb" alt="">

        </div>




        <div class="columns h-40 p-1">

          <!-- fecha -->
          <div class="columns p-0 h-30 v-center">

            <div class="columns p-0 h-a text-right font-xs-xs font-sm-s font-md-s font-lg-m">

              16/11/2016

            </div>

          </div>

          <!-- titulo -->
          <div id="micrositio-portada-titulo" class="columns p-0 h-70 v-center">

            <h4 class="columns h-a p-0 text-left ">

              Título completo de la entrada modulo uno

            </h4>

          </div>


        </div>
      </a>

    </article>

  </div>
  <!-- termina elemento -->


  <?php

endfor;

?>


</section>
