<!-- TEXTO CON MENU -->
<section id="micrositio-modulo2" class="columns h-a m-b-0-3 color-neutral-1-bg p-0 color-black">

<h2 class="p-xs-1 p-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>

<nav id="micrositio-modulo2-menu" class="columns p-0 m-0 txsh">

  <!-- menu modulo 2 -->
  <ul class="m-0">

    <?php

    for ($i=1; $i < 5; $i++):
      ?>
      <!-- shareH shareW -->
      <li class="columns text-center p-1 color-tertiary-<?php echo ($i % 2) + 1;?>-<?php echo floor($i/2)+1;?>-hover-bg color-neutral-<?php echo ($i) + 1;?>-bg">

        <a href="#" class=" color-accent-<?php echo (5 - $i);?>">

          <?php echo $i; ?> - Título de menú

        </a>

      </li>

      <?php

    endfor;

    ?>

  </ul>

</nav>


<section id="modulo2-contenido" class="contenido columns p-xs-2 p-md-5 p-lg-6">



    <!-- elemento 2 -->

    <?php


    // misma cantidad de elementos que su menu "4"

    for ($i=0; $i < 4; $i++):

      ?>


      <div class="columns p-0-2 h-a end">

        <article id="micrositio-modulo2-entrada" class="columns p-1-1 h-a">

        <!-- titulo -->
        <div id="micrositio-modulo2-titulo" class="columns medium-4 p-0 h-25 h-100-md v-center">

          <h4 class="columns h-a p-0 text-left bold">

            <?php echo $i; ?> - Título del menú

          </h4>

        </div>


        <!-- texto -->
        <div id="micrositio-modulo2-extracto" class="columns medium-8 p-0 h-75">


          <p class="columns p-0 h-a font-xs-s font-sm-m font-md-l font-lg-l">

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cupiditate velit culpa corporis excepturi accusamus dolore, perspiciatis at aut, officiis odio accusantium repellendus.

          </p>


        </div>


    </article>

  </div>
  <!-- termina elemento -->


  <?php

  endfor;

  ?>





</section>



</section>
