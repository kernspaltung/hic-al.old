<section id="micrositio-modulo4" class="columns h-a p-md-2 color-neutral-2-bg color-complement-1-bg">
<div class="row h-a">

     <!-- elemento 4 -->

     <?php

     for ($i=0; $i < 12; $i++):

       ?>

       <div class="columns small-6 medium-4 large-3 p-0-2 end">

       <article id="micrositio-modulo4-entrada" class="columns p-0 h-15-v card ">

         <a href="#" class="columns p-0 h-15-v color-black">


           <div class="columns h-15-v  large-5 p-0 imgLiquid imgLiquidFill">

             <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt="">

           </div>




           <div class="columns p-0-2 large-7 h-100">

             <!-- fecha -->
             <div class="columns p-0 h-15 ">

               <div class="columns p-0 p-t-0-1 h-a text-right font-xs">

                 16/11/2016

               </div>

             </div>

             <!-- titulo -->
             <div id="micrositio-portada-titulo" class="columns p-0 h-85 v-center">

               <h6 class="columns m-t-0-2 p-0-1 text-left font-m-s">

                 Título completo de la entrada

               </h6>

             </div>


             <!-- texto -->
             <!-- <div class="columns p-0 h-a p-t-1 p-b-1 font-xs-s font-sm-m font-md-m font-lg-m">


                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cupiditate.


             </div> -->


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
