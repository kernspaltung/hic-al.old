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
      <li class="columns text-center p-0-1 color-secondary-<?php echo ($i % 2) + 1;?>-<?php echo floor($i/2)+1;?>-hover-bg color-text-hover">

        <a href="#" class=" color-black">

          <?php echo $i; ?> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem?

        </a>

      </li>

      <?php

    endfor;

    ?>

  </ul>

</nav>


<div class="columns expanded p-1 m-t-1">
   <hr class="row color-complement-3-bd m-t-2">
</div>
<section id="modulo2-contenido" class="contenido columns p-xs-2 p-md-5 p-lg-6">



    <!-- elemento 2 -->
      <div class="row p-0-2 h-a end">

        <article id="micrositio-modulo2-entrada" class="columns p-1-1 h-a">

    <?php


    // misma cantidad de elementos que su menu "4"

    for ($i=0; $i < 4; $i++):

      ?>



        <!-- titulo -->
          <h4>

            <?php echo $i+1; ?> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem?

          </h4>


        <!-- texto -->


         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolore nulla delectus expedita.</p>
         <p>Sint repudiandae praesentium impedit rem quo. Consectetur, repudiandae, quae. Corporis laudantium, quia ea.</p>
         <p>Sit at in molestiae quisquam inventore, cupiditate nesciunt ut nisi quaerat, a, illum.</p>
         <p>Asperiores molestiae cum incidunt, officia, porro, perferendis expedita eaque numquam, voluptas quis rerum.</p>





  <!-- termina elemento -->


  <?php

  endfor;

  ?>


      </article>

    </div>





</section>



</section>
