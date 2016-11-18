<section id="sidebar-1" class="columns medium-6 large-2 h-100-v text-center m-t-1 p-l-0" data-sticky-container>

   <!-- sticky -->

   <div class="columns p-0 sticky h-100-v" data-top-anchor="main:top" data-btm-anchor="main:bottom" data-sticky-on="large" data-sticky data-margin-top="0">



      <div class="columns h-65 p-0 m-0">

         <!-- <div class="columns p-0 h-a">
            <h6 id="sidebar-1-widget-1-title" class="columns text-center font-sm-s color-blanco color-vino-oscuro-bg p-0-2 h-a vcenter top-right-corner white font-md-s font-lg-s bold uppercase">Temas</h6>
         </div> -->

         <div class="columns h-100 p-0 ">

            <?php

$colors_bg = [ 'color-vino-claro-bg', 'color-vino-intenso-bg', 'color-vino-medio-bg', 'color-vino-oscuro-bg', 'color-vino-bg' ];
            for ($i=0; $i < 8; $i++):


               ?>



               <div class="columns h-a shareH p-0">
                  <div class="columns font-xs text-center card color-blanco text-left v-center <?php echo $colors_bg[rand(0,4)]; echo $i==0 ? ' top-right-corner' : ''; ?>">
                     <div class="columns h-a p-0">
                        Megaproyectos y Alternativas
                     </div>
                  </div>
               </div>


               <?php

            endfor;

            ?>


         </div>
      </div>


      <!--  -->
      <div class="columns h-35 p-0">

         <!-- <div class="columns p-0 h-a">
            <h6 id="sidebar-1-widget-2-title" class="columns text-center font-sm-s color-blanco color-gris-oscuro-bg p-0-2 h-a vcenter top-right-corner white font-md-s font-lg-s bold uppercase">
               Medios
            </h6>
         </div> -->

         <div class="columns font-s p-0 ">

            <?php
            // 7 numero en la referencia
            $colors_bg = [ 'color-verde-claro-intenso', 'color-vino-intenso', 'color-naranja', 'color-vino-oscuro', 'color-verde' ];
            for ($i=0; $i < 8 ; $i++):

               ?>





               <div class="columns small-6 h-25 p-0">


                  <div class="columns p-0 v-center card color-gris-claro-bg">
                     <div class="columns h-a p-0 font-xxs">
                        <i class="fa fa-camera-retro font-m <?php echo $colors_bg[rand(0,4)]; ?>"></i>
                     </div>
                     <div class="columns h-a p-0 font-xxs bold">
                        Publicaciones
                     </div>
                  </div>

               </div>



               <?php

            endfor;

            ?>


         </div>

      </div>


      <!-- <div class="columns p-0 h-30">
      <h1 id="sidebar-1-widget-title" class="columns text-center h-5 p-1 font-sm-s color-primario-bg top-right-corner white font-md-s font-lg-s bold uppercase">Temas</h1>
      <div class="font-sm-s font-md-s font-lg-s p-2">

      Molestiae aut consequatur unde harum doloribus a nisi delectus, architecto eius, id impedit, asperiores, illo assumenda. Doloribus, nam.
   </div>
</div> -->


</div>

</section>
