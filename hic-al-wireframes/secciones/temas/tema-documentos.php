<section id="tema-documentos" class="columns small-12 medium-12 large-4 h-a m-b-1 show-for-large">



   <a href="#" class="columns p-0 h-10-v color-black v-center">

      <div id="tema-documentos-titulo" class="columns font-xl h-a">

         Documentos

      </div>

   </a>



   <!--  -->


   <div class="columns p-0 m-0 h-100-v p-t-1-2">

      <?php

      for ($i=0; $i < 4 ; $i++):


         ?>


         <article class="columns h-20 p-0-1 m-b-1">

            <a href="#" class="columns p-0-2 card color-black">

               <div class="tema-documentos-pestana columns p-0 m-0 h-15">

                  <div class="columns small-8 p-0">


                  </div>

                  <div class="columns small-4 p-0 text-center top-right-corner color-negro-bd uppercase font-xxs color-black-bg color-white">

                     PDF

                  </div>

               </div>


               <!-- titulo -->
               <div class="columns small-7 p-0 h-75 v-center">

                  <h6 id="tema-documentos-titulo" class="columns h-a m-0 p-0-1 font-s">

                     Título Completo del Documento con más de Ocho Palabras

                  </h6>

               </div>



               <!--  -->
               <div class="columns small-5 p-0 h-75 color-negro">

                  <div class="columns p-0 v-center">


                     <div class="columns h-a p-0 text-center bold font-xs-l text-center">

                        <i class="fa fa-arrow-down color-naranja"></i>
                        <span class="columns font-xs">Descargar</i>

                     </div>

                  </div>


               </div>


               <div class="fecha columns p-0-1 m-t-0-2 h-a text-right font-xxs">

                  16/11/2016

               </div>

            </a>

         </article>




         <?php

      endfor;

      ?>


   </div>



   <!--  -->

   <div id="tema-documentos-vermas" class="columns h-5-v v-center p-0 color-naranja-bg">

      <a class="columns p-0 h-a text-center font-xs-m font-md-m color-blanco color-gris-naranja-claro-hover">

         Ver más <i class="fa fa-plus"></i>
      </a>

   </div>



</section>



<!-- seccion movil -->
<section id="tema-documentos" class="columns h-60-v p-1 hide-for-large">


   <!-- header seccion -->

   <div class="columns p-0 h-20 color-naranja-bg">

      <div id="tema-documentos-titulo" class="columns small-6 v-center">

         <div class="columns p-0 h-a text-left font-xs-m font-md-m color-blanco">

            Documentos

         </div>

      </div>

      <a href="#" class="columns small-6 h-100">

         <div id="tema-documentos-vermas" class="columns h-100 v-center p-0">

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



         <article class="columns p-0">

            <?php

            for ($i=0; $i < 2 ; $i++):


               ?>


               <div class="columns small-6 card">

                  <a href="#" class="columns p-0 h-100 color-negro">


                     <!-- titulo -->
                     <div class="columns p-0 h-70 v-center">

                        <div id="tema-documentos-titulo" class="columns h-a font-xs-m font-sm-l font-md-xxl">

                           Título largo de el documento

                        </div>

                     </div>



                     <!--  -->
                     <div class="columns p-0 h-30 v-center">

                        <div class="columns p-0 h-a">

                           <div class="columns small-8 p-0 text-center font-xs-xl font-sm-xl font-md-xxl">

                              .mp3

                           </div>

                           <div class="columns small-4 p-0 text-center bold font-xs-xl font-sm-xl font-md-xxl">

                              <i class="fa fa-arrow-down"></i>

                           </div>

                        </div>


                     </div>


                  </a>


               </div>



               <?php

            endfor;

            ?>



         </article>

         <?php

      endfor;

      ?>


   </div>




</section>
