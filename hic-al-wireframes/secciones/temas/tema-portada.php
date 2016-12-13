<section id="tema-portada" class="columns h-a m-b-0-3 p-t-0">

   <!-- wrapper de la portada -->
   <div class="columns p-0">


      <div id="tema-portada-imagen" class="columns p-0 h-50-sm-v h-60-lg-v m-b-1 imgLiquid imgLiquidFill">

         <?php echo get_the_post_thumbnail(); ?>

      </div>

      <div id="tema-portada-titulo" class="columns large-6 h-a p-1 p-l-0">

         <h2>
            <?php echo get_the_title(); ?>
         </h2>

      </div>




      <div id="tema-portada-texto" class="columns small-12 medium-12 large-6 h-a p-1">

         <div class="columns h-a text-left p-t-1 font-m-s">

            <?php echo wpautop( get_the_excerpt() ); ?>

            <div class="columns h-a p-1 text-center m-t-1">
               <button id="tema-ver-mas" class="button hollow">
                  Leer más
               </button>
            </div>

         </div>

      </div>

   </div>


</section>
