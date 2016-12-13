<section id="home-activities" class="columns medium-12 large-6 p-0-1 m-b-1">


  <h1 class="columns h-2 text-center font-sm-m bold font-md-m font-lg-m p-0-2 color-blanco color-naranja-bg v-center">
    <div href="#" class="columns p-0 h-a">Actividades</div>
  </h1>

  <article id="thumb-activities" class="columns p-0 h-45-v card">

    <a href="" class="columns p-0 h-100 color-naranja rel">

      <div class="columns h-70  z0 p-0 imgLiquid imgLiquidFill">

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg"/>

      </div>

<div class="columns h-30 p-0 font-s">

   <div class="columns small-9 p-1 v-center">

      <div class="columns h-a font-xs text-left">
         Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      </div>


   </div>


   <div class="columns p-0 small-3 text-center v-center color-naranja-bg color-white bold">

      <div class="actividad-dia columns h-a p-0 font-xxl">
         17
      </div>
      <div class="actividad-mes columns h-a p-0 font-s">
         octubre
      </div>

   </div>
</div>



    </a>

  </article>


  <div class="columns h-a p-0 m-t-1">

    <?php

    for ($i=0; $i < 3 ; $i++):

      ?>

      <article class="columns h-15-v p-0 m-b-1 card">

         <a href="" class="columns p-0 h-100 color-naranja">

            <div class="columns p-0 small-3 imgLiquid imgLiquidFill">

               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt="">

            </div>

            <div class="columns small-6 p-0-2">

               <div class="columns h-70 font-xs text-left">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
               </div>


            </div>


            <div class="columns p-0 small-3 text-center v-center color-naranja-bg color-white bold">

               <div class="actividad-dia columns h-a p-0 font-xxl">
                  17
               </div>
               <div class="actividad-mes columns h-a p-0 font-s">
                  octubre
               </div>

            </div>
         </a>

      </article>

      <?php

    endfor;

    ?>

  </div>

  <div class="columns text-center h-5 font-sm-m font-md-m font-lg-m v-center">

    <div class="h-a fondo-diagonal color-gris-oscuro bold font-xs-m font-sm-m font-md-l font-lg-l uppercase">
      + Ver mas actividades
    </div>

  </div>

</section>
