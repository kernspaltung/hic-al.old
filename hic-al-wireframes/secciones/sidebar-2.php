<section id="sidebar-2" class="columns small-12 medium-6 large-2 h-100-v text-center m-t-1 p-r-0 m-b-1 end" data-sticky-container>


  <!-- sticky -->

  <div class="columns p-0 sticky" data-top-anchor="main:top" data-btm-anchor="main:bottom" data-sticky-on="large" data-sticky data-margin-top="1">


    <nav id="sidebar-micrositios" class="columns p-0 h-55 m-b-1">

      <div class="columns h-10 p-0 h-a">
        <h6 id="sidebar-1-widget-title" class="columns text-center font-sm-s color-blanco color-negro-bg p-0-2 h-a vcenter top-left-corner white font-md-s font-lg-s bold uppercase">Micrositios</h6>
      </div>

      <ul class="columns h-90 p-0 p-r-1">


        <?php
        $colors_hover = [ 'color-terciario1-hover', 'color-terciario2-hover', 'color-terciario3-hover' ];
        $colors_bg = [ 'color-terciario1-bg', 'color-terciario2-bg', 'color-terciario3-bg' ];

        for ($i=0; $i < 3 ; $i++):

        ?>

        <li class="micrositio columns medium-12 p-0 h-third p-0 color-vino-intenso-hover-bg color-white <?php echo $colors_hover[$i]; ?>">

          <div class="columns font-xs-m card rel">

            <a href="micrositio<?php echo $i+1;?>.php" target="_blank" class="columns h-100 p-0 color-blanco">

              <div class="image columns p-0 absUpL z-1 imgLiquid imgLiquidFill">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt="">
              </div>

              <div class="curtain columns p-0 absUpL z0 <?php echo $colors_bg[$i]; ?> color-black-hover-bg transparency ">

              </div>

              <div class="text columns absUpL v-center z1">
                <div class="columns h-a p-0">
                  <h6 class="txsh m-0">
                    Nombre Completo del Micrositio
                  </h6>
                </div>
              </div>

            </a>

          </div>

        </li>



        <?php

        endfor;

        ?>


      </ul>
    </nav>


    <nav id="sidebar-medios" class="columns h-35 p-0">

      <div class="columns p-0 h-10 m-b-1">
        <h6 id="sidebar-1-widget-2-title" class="columns text-center font-sm-s color-blanco color-gris-oscuro-bg p-0-2 h-a vcenter top-left-corner white font-md-s font-lg-s bold uppercase">
          Medios
        </h6>
      </div>

      <ul class="columns h-90 font-s p-0 ">

        <?php
        // 7 numero en la referencia
        $colors_bg = [ 'color-verde-claro-intenso', 'color-vino-intenso', 'color-naranja', 'color-vino-oscuro', 'color-verde' ];
        for ($i=0; $i < 8 ; $i++):

        ?>





        <li class="columns small-6 h-25 p-0">


          <div class="columns p-0 v-center card color-gris-naranja-claro-bg">
            <div class="columns h-a p-0 font-xxs">
              <i class="fa fa-camera-retro font-m <?php echo $colors_bg[rand(0,4)]; ?>"></i>
            </div>
            <div class="columns h-a p-0 font-xxs bold">
              Publicaciones
            </div>
          </div>

        </li>



        <?php

        endfor;

        ?>


      </ul>

    </nav>


  </div>

</section>
