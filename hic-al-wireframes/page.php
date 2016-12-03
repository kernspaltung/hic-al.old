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

<article class="small-12 h_a">
   <header class="columns p5 text-left h_100 h_50vh">

         <h1>
            <?php echo $title; ?>
         </h1>

         <nav id="page-index-menu">

            <ul class="h_100 m0 p0">
            </ul>

         </nav>

   </header>



   <section id="page-content" class="columns text-left p5 h_a">
      <?php echo $content; ?>
   </section>


</article>




<?php



include_once "secciones/footer.php";
