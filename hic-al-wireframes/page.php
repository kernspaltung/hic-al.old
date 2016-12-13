<?php


/*

Page Template:
Automatically takes all headings in the content, and creates an Index.

////

Plantilla de Página:
Automáticamente toma los titulares del contenido, y construye un índice.


*/


include_once "logica/hide_hero.php";
include_once "secciones/header.php";


$title = "Lorem ipsum dolor sit amet, consectetur adipisicing.";
$content = "";
$content .= "<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam.</h4>";
$content .= "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt expedita perferendis, labore ut!</p><p>Ipsum earum vel, provident, eum possimus consectetur corporis aliquid reprehenderit maxime fugiat inventore.</p><p>Dolorem fugit, nam, modi libero velit nisi eveniet eius sequi amet laboriosam, dicta.</p><p>Magni dolor voluptatibus aspernatur, repellat nesciunt. Nam in sed, nesciunt, pariatur suscipit quisquam?</p>";
$content .= "<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam.</h4>";
$content .= "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt expedita perferendis, labore ut!</p><p>Ipsum earum vel, provident, eum possimus consectetur corporis aliquid reprehenderit maxime fugiat inventore.</p><p>Dolorem fugit, nam, modi libero velit nisi eveniet eius sequi amet laboriosam, dicta.</p><p>Magni dolor voluptatibus aspernatur, repellat nesciunt. Nam in sed, nesciunt, pariatur suscipit quisquam?</p>";
$content .= "<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam.</h4>";
$content .= "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt expedita perferendis, labore ut!</p><p>Ipsum earum vel, provident, eum possimus consectetur corporis aliquid reprehenderit maxime fugiat inventore.</p><p>Dolorem fugit, nam, modi libero velit nisi eveniet eius sequi amet laboriosam, dicta.</p><p>Magni dolor voluptatibus aspernatur, repellat nesciunt. Nam in sed, nesciunt, pariatur suscipit quisquam?</p>";


?>


<article id="page_0" class="page page-index small-12 h_a p-0">

<header class="columns h-a m-b-1 p-0">

      <div class="imagen columns h-40-v imgLiquid imgLiquidFill">
         <img src="img/fotoejemplo.jpeg" alt="" />
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

               <li class="columns small-4 squareH rel p-0">

                  <div class="imagen columns w-100 h-100 z0 abs imgLiquid imgLiquidFill">
                     <img src="img/fotoejemplo.jpeg" alt="">
                  </div>

                  <div class="curtain columns p-0 absUpL z0 color-white-bg transparency ">
                  </div>

                  <div class="columns h-100 v-center z0 abs">
                     <div class="columns h-a font-xs p-0">
                        <h6 class="m-0 font-m-s text-center">
                           Nombre<?php echo $i>0 ? " Completo" : "";  echo $i>1 ? " de Subpágina" : "";?>
                        </h6>
                     </div>
                  </div>

               </li>

            <?php endfor; ?>
         </ul>
      </nav>
</header>


<section class="content page-content columns p-3">

   <!-- (h2>lorem10^+(p>lorem18)*2+.wp-caption>a[http://fakeimg.pl/1200x700][target=_blank]>img[http://fakeimg.pl/960x600]+.text>lorem8)*3 -->
   <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, ratione.</h2>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit consectetur obcaecati, odio inventore nobis magni eos optio corporis!</p>
   <p>Id sunt dolore repellendus dolores quam totam dolor praesentium consequuntur, ratione dolorum distinctio perspiciatis tempore veniam? Ducimus, ipsum.</p>
   <div class="wp-caption"><a href="http://fakeimg.pl/1200x700" target="_blank"><img src="http://fakeimg.pl/960x600" alt=""><span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span></a></div>
   <h2>Provident quis accusamus officia, hic fuga, commodi voluptate veritatis. Consequuntur.</h2>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor blanditiis officia eos debitis, maxime atque expedita voluptatum recusandae.</p>
   <p>At aliquid unde consectetur optio, accusamus iste aspernatur impedit, quibusdam, corrupti, beatae obcaecati amet. Temporibus, delectus perspiciatis expedita.</p>
   <div class="wp-caption"><a href="http://fakeimg.pl/1200x700" target="_blank"><img src="http://fakeimg.pl/960x600" alt=""><span class="text">Modi adipisci, ex doloremque eaque esse porro odio!</span></a></div>
   <h2>Aliquam perferendis quisquam perspiciatis quibusdam sed, id qui nulla ad.</h2>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ducimus earum debitis iste incidunt consectetur sed repudiandae vero!</p>
   <p>Incidunt possimus autem delectus quis at alias magnam reiciendis beatae eius fuga tempore modi ipsum distinctio, recusandae quas!</p>
   <div class="wp-caption"><a href="http://fakeimg.pl/1200x700" target="_blank"><img src="http://fakeimg.pl/960x600" alt=""><span class="text">Non, repellendus assumenda itaque explicabo, a pariatur voluptatibus.</span></a></div>


<iframe width="560" height="315" src="https://www.youtube.com/embed/C0DPdy98e4c" frameborder="0" allowfullscreen></iframe>


</section>


</article>




<?php



include_once "secciones/footer.php";
