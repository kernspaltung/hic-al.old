


</main>
<!-- main -->

<?php

  // include_once "secciones/sidebar-2.php";
  get_template_part('secciones/sidebar-2');

?>

</div>
<!-- .main-container -->



<footer id="footer" class="header columns h-a color-gris-naranja-claro color-naranja-bg p-1">

  <!--  -->
  <div id="footer-widget" class="columns h-25-v small-12 medium-4 large-3 ">

    <div id="footer-img-1" class="columns text-center h-sm-50 h-md-70 h-lg-50 p-1">
      <div class="logo columns small-6 h-sm-100 imgLiquid imgLiquidNoFill ">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-50-2x-blanco.png" alt="" />
      </div>
      <div class="logo-text columns small-6 color-blanco v-center">
        <h6 class="columns h-a m-0 font-s bold">Habitat International Coalition</h6>
      </div>
    </div>
    <div id="footer-widget-txt-1" class="columns h-sm-50 h-md-30 m-t-1 text-center font-xs h-20">
      HIC - Red global por el derecho al hábitat y la justicia social
    </div>

  </div>

  <!--  -->
  <div id="footer-widget" class="columns small-12 medium-6 large-2 large-offset-2 h-25-v p-1 text-center imgLiquid imgLiquidNoFill">

    <a href="mapa.php">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mapa-naranja-puntos-blancos.png" alt="" />
    </a>

  </div>

  <!--  -->
  <div id="footer-widget" class="columns small-12 medium-6 large-4 h-25-v">

    <div id="footer-widget-txt-1" class="columns text-right h-70 font-xxs p-t-1">
      Autorizamos la reproducción de materiales de los que explícitamente se señala la autoría de HIC-AL, siempre y cuando se cite la funete y se envié copia de su uso o reproducción a Huatusco #39, colonia Roma Sur, CP 06760, Ciudad de México (México), o a <i><a href="mailto:info@hic-al.org">info@hic-al.org</a></i>. La licencia de contenidos con otras autorías permanece según la determinen sus creadores.
    </div>

    <div id="footer-widget-txt-2" class="columns text-right h-20 v-center">
      <div id="menu-aviso-footer" class="columns h-100 p-0-2 font-xs bold">

        <span class="w-a f-r p-0-1 p-t-0"><a href="#" class="color-blanco"><i class="p-0">Legal disclaimer</i></a></span>
        <span class="w-a f-r p-0-1 p-t-0 color-blanco">/</span>
        <span class="w-a f-r p-0-1 p-t-0"><a href="#" class="color-blanco">Aviso legal</a> </span>

      </div>

    </div>

  </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
