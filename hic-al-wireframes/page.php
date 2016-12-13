<?php


/*

Page Template:
Automatically takes all headings in the content, and creates an Index.

////

Plantilla de Página:
Automáticamente toma los titulares del contenido, y construye un índice.


*/

//include_once "logica/hide_hero.php";
get_template_part('logica/hide_hero');

get_header();

$title = "Lorem ipsum dolor sit amet, consectetur adipisicing.";
$content = "";
$content .= "<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam.</h4>";
$content .= "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt expedita perferendis, labore ut!</p><p>Ipsum earum vel, provident, eum possimus consectetur corporis aliquid reprehenderit maxime fugiat inventore.</p><p>Dolorem fugit, nam, modi libero velit nisi eveniet eius sequi amet laboriosam, dicta.</p><p>Magni dolor voluptatibus aspernatur, repellat nesciunt. Nam in sed, nesciunt, pariatur suscipit quisquam?</p>";
$content .= "<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam.</h4>";
$content .= "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt expedita perferendis, labore ut!</p><p>Ipsum earum vel, provident, eum possimus consectetur corporis aliquid reprehenderit maxime fugiat inventore.</p><p>Dolorem fugit, nam, modi libero velit nisi eveniet eius sequi amet laboriosam, dicta.</p><p>Magni dolor voluptatibus aspernatur, repellat nesciunt. Nam in sed, nesciunt, pariatur suscipit quisquam?</p>";
$content .= "<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam.</h4>";
$content .= "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt expedita perferendis, labore ut!</p><p>Ipsum earum vel, provident, eum possimus consectetur corporis aliquid reprehenderit maxime fugiat inventore.</p><p>Dolorem fugit, nam, modi libero velit nisi eveniet eius sequi amet laboriosam, dicta.</p><p>Magni dolor voluptatibus aspernatur, repellat nesciunt. Nam in sed, nesciunt, pariatur suscipit quisquam?</p>";


?>

<header class="columns p-0 m-t-1">
   <nav id="page-go-back" class="columns p-0">
      <a href="#" class="button columns wh-100 m-0 color-white-bg color-black font-m-l p-1 color-gris-claro-bg color-black">
         <span class="span columns small-2 medium-1 color-naranja"><i class="fa fa-arrow-left font-l"></i></span>
         <span class="span columns w-a hide-for-small-only">Regresar:</span>
         <span class="span columns small-10 medium-9 end">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam.</span>
      </a>
   </nav>
</header>

<article id="page_0" class="page page-index small-12 h_a p-0">

<header class="columns h-a m-b-1 p-0">

      <div class="imagen columns h-40-v imgLiquid imgLiquidFill">
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt="" />
      </div>

      <div class="titulo columns h-a p-2">
         <h1>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum.
         </h1>
      </div>

      <button id="page-index-button" class="show-for-small-only columns p-2">
         <h3>Índice</h3>
      </button>

      <nav class="page-index hide-for-small-only p-2">
         <ul>
         </ul>
      </nav>


      <nav id="page-subpages" class="columns p-0">
         <ul class="columns m-0 p-0">

            <?php for ($i=0; $i < 3; $i++) : ?>

               <li class="columns small-4 squareH p-1">

<div class="columns h-100 p-0 rel">
   <div class="imagen columns w-100 h-100 z0 abs imgLiquid imgLiquidFill">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt="">
   </div>

   <div class="curtain columns w-100 p-0 absUpL z0 color-white-bg transparency ">
   </div>

   <div class="columns h-100 v-center z0 abs">
      <div class="columns h-a font-xs p-0">
         <h6 class="m-0 font-xs-m-s font-sm-l font-lg-xl text-center">
            Nombre<?php echo $i>0 ? " Completo" : "";  echo $i>1 ? " de Subpágina" : "";?>
         </h6>
      </div>
   </div>

</div>
               </li>

            <?php endfor; ?>
         </ul>
      </nav>
</header>


<section class="content page-content columns p-3">

   <!-- (h2>lorem10^+(p>lorem18)*2+.wp-caption>a[http://fakeimg.pl/1200x700][target=_blank]>img[http://fakeimg.pl/960x600]+.text>lorem8^+(p>lorem18))*3 -->

   <?php for ($i=0; $i < 4; $i++) : ?>

      <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, ratione.</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit consectetur obcaecati, odio inventore nobis magni eos optio corporis!</p>
      <p>Id sunt dolore repellendus dolores quam totam dolor praesentium consequuntur, ratione dolorum distinctio perspiciatis tempore veniam? Ducimus, ipsum.</p>
      <div class="wp-caption"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt=""><span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></a></div>
      <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, ratione.</h3>
      <p>Id sunt dolore repellendus dolores quam totam dolor praesentium consequuntur, ratione dolorum distinctio perspiciatis tempore veniam? Ducimus, ipsum.</p>
      <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, ratione.</h4>
      <p>Id sunt dolore repellendus dolores quam totam dolor praesentium consequuntur, ratione dolorum distinctio perspiciatis tempore veniam? Ducimus, ipsum.</p>
      <div class="wp-caption"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt=""><span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></a></div>
      <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, ratione.</h4>
      <p>Id sunt dolore repellendus dolores quam totam dolor praesentium consequuntur, ratione dolorum distinctio perspiciatis tempore veniam? Ducimus, ipsum.</p>
      <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, ratione.</h3>
      <p>Id sunt dolore repellendus dolores quam totam dolor praesentium consequuntur, ratione dolorum distinctio perspiciatis tempore veniam? Ducimus, ipsum.</p>
      <div class="wp-caption"><a href="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fotoejemplo.jpeg" alt=""><span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></a></div>
      <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, ratione.</h4>
      <p>Id sunt dolore repellendus dolores quam totam dolor praesentium consequuntur, ratione dolorum distinctio perspiciatis tempore veniam? Ducimus, ipsum.</p>

   <?php endfor; ?>

<iframe width="560" height="315" src="https://www.youtube.com/embed/C0DPdy98e4c" frameborder="0" allowfullscreen></iframe>


</section>


</article>




<?php



// include_once "secciones/footer.php";
get_footer();
