<section id="sidebar-1" class="columns medium-6 large-2 h-100-v text-center m-t-1 p-l-0" data-sticky-container>

   <!-- sticky -->

   <div class="columns p-0 sticky h-100-v" data-top-anchor="main:top" data-btm-anchor="main:bottom" data-sticky-on="large" data-sticky data-margin-top="1">



      <nav id="sidebar-temas"  class="columns h-55 p-0 m-0">

         <div class="columns p-0 h-10">
            <h6 id="sidebar-1-widget-1-title" class="columns text-center font-sm-s color-blanco color-vino-oscuro-bg p-0-2 h-a vcenter top-right-corner white font-md-s font-lg-s bold uppercase">Temas</h6>
         </div>

         <ul class="columns h-90 p-0 ">

            <?php

            $colors_bg = [
               // 'color-neutral-claro-bg',
               // 'color-neutral-claro-bg',
               // 'color-neutral-claro-bg',
               // 'color-neutral-claro-bg',
               // 'color-neutral-claro-bg',
               'color-vino-claro',
               'color-vino-intenso',
               'color-vino-medio',
               'color-vino-oscuro',
               'color-vino'
            ];


            $q = new WP_Query( array( 'post_type' => 'tema', 'post_per_page' => 8 ) );

            if( $q -> have_posts() ) :
               while ( $q -> have_posts() ) :
                  $q -> the_post();
                  ?>



                  <li class="columns h-a shareH p-0">
                     <div class="columns font-xs text-center card color-gris-naranja-claro-bg text-left v-center">
                        <div class="columns h-a p-0">

                           <a href="<?php echo get_the_permalink( get_the_ID() ); ?>" class="<?php echo $colors_bg[rand(0,4)]; ?>">
                              <?php echo get_the_title(); ?>
                           </a>

                        </div>
                     </div>
                  </li>


                  <?php

               endwhile;
            endif;

            ?>


         </ul>
      </nav>


      <!--  -->

      <section id="sidebar-emportugues" class="columns p-0 h-35 m-t-1">

         <div class="columns p-0 h-a">
            <h6 id="sidebar-1-widget-title" class="columns text-center font-sm-s color-blanco color-verde-bg p-0-2 h-a vcenter top-right-corner white font-md-s font-lg-s bold uppercase">EMPORTUGUÊS</h6>
         </div>

         <div class="columns p-0 h-80 p-0 slickNoArrows">


            <?php

            for ($i=0; $i < 3 ; $i++):

               ?>

               <ul class="slide columns p-0">

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


               </ul>



            <?php endfor; ?>



         </div>
      </section>


   </div>

</section>
