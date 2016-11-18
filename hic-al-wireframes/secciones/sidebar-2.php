<section id="sidebar-2" class="columns small-12 medium-6 large-2 h-100-v text-center m-t-1 p-r-0 m-b-1 end" data-sticky-container>


   <!-- sticky -->

   <div class="columns p-0 sticky" data-top-anchor="main:top" data-btm-anchor="main:bottom" data-sticky-on="large" data-sticky data-margin-top="0">


      <div class="columns p-0 h-60 m-b-1">
         <!--
         <div class="columns p-0 h-a">
         <h6 id="sidebar-1-widget-title" class="columns text-center font-sm-s color-blanco color-negro-bg p-0-2 h-a vcenter top-left-corner white font-md-s font-lg-s bold uppercase">Micrositios</h6>
      </div> -->

      <div class="columns p-0">


         <?php
         $colors_hover = [ 'color-terciario1-hover', 'color-terciario2-hover', 'color-terciario3-hover' ];
         $colors_bg = [ 'color-terciario1-bg', 'color-terciario2-bg', 'color-terciario3-bg' ];

         for ($i=0; $i < 3 ; $i++):

            ?>

            <div class="micrositio columns medium-12 p-0 h-third p-0 color-vino-intenso-hover-bg color-white <?php echo $colors_hover[$i]; ?>">


               <div class="columns p-0 font-xs-m font-md-m-l font-lg-l card rel">

                  <div class="image columns p-0 absUpL z-1 imgLiquid imgLiquidFill">
                     <img src="https://junkitechture.files.wordpress.com/2015/04/2a5e2f23-aa20-4cc3-81bf-77fe701ff8cf-2060x1236.jpeg?w=1060" alt="">
                  </div>

                  <div class="curtain columns p-0 absUpL z0 <?php echo $colors_bg[$i]; ?> color-black-hover-bg transparency ">

                  </div>
                  <div class="text columns p-0 absUpL v-center z1">
                     <div class="columns h-a ">
                        <h5 class="txsh">
                           Nombre Completo del Micrositio
                        </h5>
                     </div>
                  </div>

               </div>

            </div>



            <?php

         endfor;

         ?>


      </div>
   </div>

   <div class="columns p-0 h-30">

      <div class="columns p-0 h-a">
         <h6 id="sidebar-1-widget-title" class="columns text-center font-sm-s color-blanco color-verde-bg p-0-2 h-a vcenter top-left-corner white font-md-s font-lg-s bold uppercase">EMPORTUGUÊS</h6>
      </div>

      <div class="columns p-0 h-90 p-0 slick">


         <?php

         for ($i=0; $i < 3 ; $i++):

            ?>

            <div class="columns p-0">

         <?php for ($j=0; $j < 3 ; $j++): ?>

               <a class="columns p-0 h-50 m-0 card color-amarillo-bg" href="#">
                  <article class="columns h-100 p-0-2 v-center">

                     <div class="columns h-a p-1 font-xs  color-negro">
                        Lorem ipsum oscurum tiniebla dolor sit amet, consectetur.
                     </div>

                  </article>
                  <hr class="color-gris-oscuro">
               </a>

            <?php endfor; ?>


            </div>



            <?php endfor; ?>



      </div>
   </div>




</div>

</section>
