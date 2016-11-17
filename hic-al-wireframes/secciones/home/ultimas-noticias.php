<section id="home-latest-news" class="columns p-0 m-b-3">

   <h1 class="columns h-a p-0-2 text-center font-sm-m bold font-md-m font-lg-m color-blanco color-naranja-bg v-center">
      <div href="#" class="columns p-0 h-a">Ultimas Noticias</div>
   </h1>

   <div id="slider-latest-news" class="columns p-0 h-35-v slick">

      <?php
      for ($i=0; $i < 4; $i++):

         ?>

         <article class="columns p-0 rel imgLiquid imgLiquidFill">

            <img src="http://www.hic-al.org/images/DelainaHaslam-ElPais.png"/>


            <div class="columns h-a p-l-4 p-r-4 abs bottom ">

               <div class="columns h-a p-1 p-l-2 p-r-2 font-xs-s font-sm-m font-md-l font-lg-xl bold text-center color-blanco color-negro-opacidad-bg">
                  Lorem ipsum dolor sit: amet, consectetur adipisicing elit. Quae!
               </div>

            </div>


         </article>


         <?php
      endfor;

      ?>

   </div>


   <div id="home-latest-news-posts" class="columns h-60-v">


      <div class="columns medium-6 p-0">

         <?php

         for ($i=0; $i < 3 ; $i++):

            ?>

            <article class="columns h-15-v p-0 m-b-1">
               <a href="" class="columns p-0 h-100">

                  <div class="columns p-0 small-4 imgLiquid imgLiquidFill">

                     <img src="http://fakeimg.pl/300?text=news" alt="">

                  </div>

                  <div class="columns small-8 p-1 p-t-0">

                     <div class="columns font-xs-s font-md-xs font-lg-m text-left">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa aliquam iusto rem!
                     </div>

                     <div class="columns font-xxs p-1 p-t-0 color-neutral">

                        17/12/16

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


      <div id="home-mapa" class="columns medium-6 hide-for-small-only"></div>


   </div>

</section>
