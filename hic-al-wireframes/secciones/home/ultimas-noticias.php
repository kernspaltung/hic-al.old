<section id="home-latest-news" class="columns p-0 m-b-3">

   <h1 class="columns h-a p-0-2 text-center font-sm-m bold font-md-m font-lg-m color-blanco color-naranja-bg v-center">
      <div href="#" class="columns p-0 h-a">Ultimas Noticias</div>
   </h1>

   <div id="slider-latest-news" class="columns small-10 small-offset-1 end p-0 h-40-v slick m-t-xs-1 m-b-xs-1">

      <?php
      for ($i=0; $i < 4; $i++):

         ?>

         <article class="columns p-0 rel imgLiquid imgLiquidFill">

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg"/>


            <div class="columns h-a p-l-4 p-r-4 abs bottom ">

               <div class="columns h-a p-0-2 p-l-2 p-r-2 font-xs-s font-sm-m font-md-l  bold text-center color-blanco color-negro-opacidad-bg">
                  Lorem ipsum dolor sit: amet, consectetur adipisicing elit. Quae!
               </div>

            </div>


         </article>


         <?php
      endfor;

      ?>

   </div>


   <div id="home-latest-news-posts-map" class="columns">


      <div class="columns medium-6 h-60-v p-0 hide-for-small-only">

         <?php

         for ($i=0; $i < 3 ; $i++):

            ?>

            <article class="columns h-15-v p-0 m-b-1 card">

               <a href="" class="columns p-0 h-100 color-naranja">

                  <div class="columns p-0 small-4 imgLiquid imgLiquidFill">

                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt="">

                  </div>

                  <div class="columns small-8 p-0-2">

                     <div class="columns h-70 font-xs text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                     </div>

                     <div class="columns h-30 font-xxs color-neutral">

                        17 de diciembre, 2016

                     </div>
                  </div>

               </a>

            </article>

            <?php

         endfor;

         ?>



         <div class="columns text-center h-5 font-sm-m font-md-m font-lg-m v-center">

            <div class="h-a fondo-diagonal color-gris-oscuro bold font-xs-m font-sm-m font-md-l font-lg-l">
               + More news
            </div>

         </div>

      </div>

      <div id="home-mapa" class="columns small-10 small-offset-1 medium-4 end  h-60-v"></div>



   </div>

</section>
