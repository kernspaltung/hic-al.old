<!-- DESTACADOS -->
<section id="micrositio-modulo1" class="columns h-a p-b-2 p-t-2 color-primary-2-bg">

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


  <div class="columns medium-6 large-4 p-1 h-a end">

    <article id="micrositio-modulo1-entrada" class="columns p-0-1 p-b-1-2 h-60-sm-v h-70-md-v card m-b-1 color-secondary-2-1-bg">

      <a href="#" class="columns p-0 h-100">

        <div class="columns p-0 h-60 imgLiquid imgLiquidFill">

          <!-- <img src="http://fakeimg.pl/250?text=thumb" alt=""> -->
          <img src="img/fotoejemplo.jpeg" alt="">

        </div>




        <div class="columns h-a p-1-2">

          <!-- fecha -->
            <div class="columns p-0 h-a text-left m-b-1 font-xs-xs font-sm-s font-md-s font-lg-m color-complement-0">

              16/11/2016

            </div>

          <!-- titulo -->

            <h4 class="columns h-a p-0 m-b-0-2 text-left color-black">

              Título completo de la entrada modulo uno

            </h4>

        </div>
      </a>

    </article>

  </div>
  <!-- termina elemento -->


  <?php

endfor;

?>


</section>
