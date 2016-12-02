<!-- TEXTO CON MENU -->
<section id="micrositio-modulo2" class="columns h-a m-b-2">

  <!-- menu modulo 2 -->
  <ul id="micrositio-modulo2-menu" class="columns p-0 m-0 m-b-1 h-a h-20-md-v">

    <?php

    for ($i=0; $i < 4; $i++):
      ?>
      <!-- shareH shareW -->
      <li class="columns medium-3 p-1 text-center v-center">

        <a href="#" class="columns h-a">

          <?php echo $i; ?> - Elemento

        </a>

      </li>

      <?php

    endfor;

    ?>

  </ul>



  <!-- elemento 2 -->

  <?php


  // misma cantidad de elementos que su menu "4"

  for ($i=0; $i < 4; $i++):

    ?>


    <div class="columns p-0-2 h-a end">

      <article id="micrositio-modulo2-entrada" class="columns p-1-1 h-40-v h-30-md-v card">

        <a href="#" class="columns p-0 h-100">

          <!-- <div class="columns h-50"> -->

          <!-- fecha -->
          <!-- <div class="columns p-0 h-30 v-center">

          <div class="columns p-0 h-a text-right font-xs-xs font-sm-s font-md-s font-lg-m">

          16/11/2016

        </div>

      </div> -->

      <!-- titulo -->
      <div id="micrositio-modulo2-titulo" class="columns medium-4 p-0 h-25 h-100-md v-center">

        <h4 class="columns h-a p-0 text-left bold">

          <?php echo $i; ?> - Título del menú

        </h4>

      </div>


      <!-- texto -->
      <div id="micrositio-modulo2-extracto" class="columns medium-8 p-0 h-75 v-center">


        <p class="columns p-0 h-a font-xs-s font-sm-m font-md-l font-lg-l">

          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cupiditate velit culpa corporis excepturi accusamus dolore, perspiciatis at aut, officiis odio accusantium repellendus.

        </p>


      </div>





      <!-- </div> -->

    </a>

  </article>

</div>
<!-- termina elemento -->


<?php

endfor;

?>




</section>
