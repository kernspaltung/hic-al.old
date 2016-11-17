<!-- TEXTO CON MENU -->
<section id="micrositio-modulo2" class="columns h-a">

  <!-- menu modulo 2 -->
  <ul id="micrositio-modulo2-menu" class="columns p-0 m-0 h-50-v">

    <?php

    for ($i=0; $i < 4; $i++):
      ?>

      <a href="#" class="columns shareH">
        <li class="columns h-100 p-0 text-center v-center"><?php echo $i; ?> - Elemento</li>
      </a>

      <?php

    endfor;

    ?>

  </ul>





  <!-- elemento 2 -->

  <?php


  // misma cantidad de elementos que su menu "4"

  for ($i=0; $i < 4; $i++):

    ?>



    <article id="micrositio-modulo2-entrada" class="columns p-1 h-60">


      <!-- <div class="columns h-50"> -->

      <!-- fecha -->
      <!-- <div class="columns p-0 h-30 v-center">

      <div class="columns p-0 h-a text-right font-xs-xs font-sm-s font-md-s font-lg-m">

      16/11/2016

    </div>

  </div> -->

  <!-- titulo -->
  <div id="micrositio-portada-titulo" class="columns p-0 h-25 v-center">

    <h1 class="columns h-1 p-0 text-left font-xs-xxl font-sm-xxl font-md-xxl font-lg-xxl">

      <?php echo $i; ?> - Título del menú

    </h1>

  </div>


  <!-- texto -->
  <div id="micrositio-portada-titulo" class="columns p-0 h-75 v-center">


    <p class="columns p-0 h-a font-xs-m font-sm-m font-md-l font-lg-l">

      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cupiditate velit culpa corporis excepturi accusamus dolore, perspiciatis at aut, officiis odio accusantium repellendus.

    </p>


  </div>





  <!-- </div> -->

</article>
<!-- termina elemento -->


<?php

endfor;

?>



</section>
