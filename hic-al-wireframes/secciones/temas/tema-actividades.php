<section id="tema-actividades" class="columns small-12 medium-12 large-4 h-a m-b-1 show-for-large">


   <!--  -->


   <a href="#" class="columns p-0 h-10-v color-black v-center">

      <div id="tema-documentos-titulo" class="columns font-xl h-a">

         Actividades

      </div>

   </a>

   <!-- contenido de actividades escritorio -->
   <div class="columns p-0 m-0 h-100-v">


      <div class="columns h-a">
         <?php echo do_shortcode('[kalender]') ?>
      </div>

      <div id="tema-actividades-listado" class="columns p-0 p-t-0-3 p-b-0-3 h-60">

         <?php

         for ($x=0; $x < 2 ; $x++):


            ?>



            <article class="columns h-a p-0-2">

               <a href="#" class="columns p-0 card m-0 h-a color-negro">



                  <!-- titulo -->
                  <div class="columns p-0-2 h-a v-center">

                     <h6 id="tema-documentos-titulo" class="columns h-a p-0 m-0 font-s">

                        Título Completo de la Actividad con más de Ocho Palabras

                     </h6>

                  </div>


                  <!-- imagen -->
                  <div class="columns h-15-v p-0">


                     <div class="columns h-15-v small-7 p-0 imgLiquid imgLiquidFill">

                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt="" />


                     </div>





                     <!-- fecha -->
                     <div class="columns small-5 p-0 v-center color-naranja-bg color-blanco">

                        <div class="columns p-0 h-100 text-center v-center">

                           <div class="columns h-a p-0">
                              <div class="columns p-0 font-xl">
                                 17
                              </div>
                              <div class="columns p-0 font-s ">
                                 diciembre
                              </div>
                           </div>

                        </div>


                     </div>

                  </div>


               </a>
               <!--  -->

            </article>

            <?php

         endfor;

         ?>


      </div>


   </div>

   <!--  -->

   <div id="tema-documentos-vermas" class="columns h-5-v v-center p-0 color-naranja-bg">

      <a class="columns p-0 h-a text-center font-xs-m font-md-m color-blanco color-gris-naranja-claro-hover">

         Ver más <i class="fa fa-plus"></i>
      </a>

   </div>


</section>


<!-- seccion movil  -->
<section id="tema-actividades-movil" class="columns h-60-v p-1 hide-for-large">


   <!-- header seccion -->

   <div class="columns p-0 h-20 color-naranja-bg">


      <div id="tema-actividades-titulo" class="columns small-6 v-center">

         <div class="columns p-0 h-a text-left font-xs-m font-md-m color-blanco">

            Actividades

         </div>

      </div>


      <a href="#" class="columns small-6 h-100">

         <div id="tema-actividades-vermas" class="columns h-100 v-center p-0">

            <div class="columns p-0 h-a text-right font-xs-m font-md-m color-blanco color-gris-naranja-claro-hover">

               Ver más <i class="fa fa-plus"></i>
            </div>

         </div>

      </a>

   </div>
   <!--  -->



   <!-- slider posts -->
   <div id="tema-documentos-slider-small" class="columns p-0 p-t-0-3 p-b-0-3 h-80 slider-temas">

      <?php

      for ($x=0; $x < 8 ; $x++):


         ?>



         <article class="columns p-0 card">

            <a href="#" class="columns p-0 m-0 h-100 color-negro">



               <!-- titulo -->
               <div class="columns p-0 h-30 v-center">

                  <div id="tema-documentos-titulo" class="columns h-a font-xs-l font-sm-l font-md-xxl">

                     Título de la actividad

                  </div>

               </div>


               <!-- imagen -->
               <div class="columns small-8 p-0 h-70 imgLiquid imgLiquidFill">

                  <img src="http://fakeimg.pl/320?text=thumb" alt="" />


               </div>





               <!-- fecha -->
               <div class="columns small-4 p-0 h-70 v-center color-naranja-bg color-blanco">

                  <div class="columns p-0 h-70 text-center font-fecha-grande">

                     17

                  </div>
                  <div class="columns p-0 h-30 text-center font-xs-m font-sm-m font-md-l">

                     Noviembre

                  </div>

               </div>


            </a>
            <!--  -->

         </article>

         <?php

      endfor;

      ?>


   </div>


</section>
