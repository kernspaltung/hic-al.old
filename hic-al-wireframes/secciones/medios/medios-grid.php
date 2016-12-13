<section id="medios-grid" class="columns p-0 p-b-3">

   <h1 id="titulo-portfafolio" class="columns text-center p-t-1 p-b-1">
      Título de Medios
   </h1>

   <?php

   for ($i=0; $i < 16 ; $i++):
      ?>


      <article id="canvas-item-medios-<?php echo $i;?>" class="columns small-6 medium-4 large-3 squareH rel p-1 m-b-0-1 pointer end  medios-item p-0-2">
         <div class="columns  imgLiquid imgLiquidFill ">

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt="">


            <div id="canvas-item-pointer-<?php echo $i;?>" class="columns absDownL left h-5 canvas-item-pointer hidden ">

               <div class="small-offset-5 triangulo-arriba">

               </div>

            </div>


         </div>
      </article>



      <?php

      // include_once "secciones/medios/medios-preview.php";

   endfor;
   ?>




</section>
