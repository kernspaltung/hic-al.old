<!-- solo en escritorio -->
<section id="tema-noticias" class="columns large-4 h-a m-b-1 show-for-large">

   <a href="#" class="columns p-0 h-10-v color-black v-center">

      <div id="tema-noticias-titulo" class="columns font-xl h-a">

         Noticias

      </div>

   </a>


   <!-- altura total al contenedor de los articulos -->
   <div class="columns p-0 m-0 h-100-v">

      <?php

      for ($i=0; $i < 3; $i++):

         ?>


         <article id="tema-noticias-articulo" class="columns p-0-2 h-a">
            <a href="#" class="columns h-100 p-0 card color-black">

               <div class="columns p-0 h-20-v imgLiquid imgLiquidFill">

                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt="">

               </div>

               <div class="columns h-60 p-0-2">

                  <div id="tema-noticias-titulo" class="columns p-0-1 h-a">

                     <h6 class="columns h-1 p-0 m-0 text-left font-m-s">

                        Título completo de la entrada

                     </h6>

                  </div>

                  <div class="fecha columns p-0-1 h-a text-right font-xxs">

                     16/11/2016

                  </div>

               </div>

            </a>
         </article>

         <!--  -->


         <?php

      endfor;

      ?>
   </div>

   <div id="tema-noticias-vermas" class="columns h-5-v v-center p-0 color-naranja-bg">

      <a class="columns p-0 h-a text-center font-xs-m font-md-m color-blanco color-gris-naranja-claro-hover">

         Ver más <i class="fa fa-plus"></i>
      </a>

   </div>

</section>
<!-- termina seccion escritorio -->


<!-- solo en movil -->
<section id="tema-noticias-movil" class="columns h-60-v p-1 hide-for-large">

   <!-- header seccion -->

   <div class="columns p-0 h-20 color-naranja-bg">


      <div id="tema-noticias-titulo" class="columns small-6 v-center">

         <div class="columns p-0 h-a text-left font-xs-m font-md-m color-blanco">

            Noticias

         </div>

      </div>


      <a href="#" class="columns small-6 h-100">

         <div id="tema-noticias-vermas" class="columns h-100 v-center p-0">

            <div class="columns p-0 h-a text-right font-xs-m font-md-m color-blanco color-gris-naranja-claro-hover">

               Ver más <i class="fa fa-plus"></i>
            </div>

         </div>

      </a>

   </div>
   <!-- termina header seccion -->


   <!-- slider posts -->
   <div id="tema-noticias-slider-small" class="columns p-0 p-t-0-3 h-80 slider-temas">

      <?php

      for ($x=0; $x < 8 ; $x++):


         ?>



         <article class="columns p-0">

            <?php

            for ($i=0; $i < 2 ; $i++):


               ?>



               <div class="columns small-6 card">

                  <a href="#" class="columns h-100 p-0 m-0 color-negro">

                     <!-- imagen -->
                     <div class="columns p-0 h-40 imgLiquid imgLiquidFill">

                        <img src="http://fakeimg.pl/320?text=thumb" alt="" />


                     </div>

                     <!-- titulo -->
                     <div class="columns p-0 h-40 v-center">

                        <div id="tema-noticias-titulo" class="columns h-a font-xs-m font-sm-l font-md-xxl">

                           Título largo de algúna noticia

                        </div>

                     </div>



                     <!-- fecha -->
                     <div class="columns p-0 h-20 v-center">

                        <div class="columns p-0 h-a text-center font-xs-s font-sm-m font-md-xl">

                           16/11/2016

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
<!-- fin seccion movil -->
