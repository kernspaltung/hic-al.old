<!-- DESTACADOS -->
<section id="micrositio-modulo1" class="columns h-a p-b-2 p-t-2 color-neutral-2-bg">
   <div class="row h-a p-1">

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

      <article id="micrositio-modulo1-entrada" class="columns p-0 p-b-1-2 h-60-sm-v h-40-md-v card m-b-1 color-white-bg">

         <a href="#" class="columns p-0 h-100">

            <div class="columns p-0 h-60 imgLiquid imgLiquidFill">

               <!-- <img src="http://fakeimg.pl/250?text=thumb" alt=""> -->
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt="">

            </div>




            <div class="columns h-a p-1-2">

               <!-- fecha -->
               <div class="columns p-0 h-a text-right m-b-1 font-xs color-secondary-1-0">

                  16/11/2016

               </div>

               <!-- titulo -->

               <h6 class="columns h-a p-0 m-b-0-2 text-left color-black">

                  Título completo de la entrada modulo uno

               </h6>

            </div>
         </a>

      </article>

   </div>
   <!-- termina elemento -->


   <?php

endfor;

?>



</div>
</section>
