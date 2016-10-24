<!-- menu en scroll -->
<nav id="menu-scroll" class="columns medium-10 large-8 large-offset-2 fixed top z1k1 text-left h-a color-vino-bg bottom-left-right-corner posicion-inicial" >

  <ul id="menu-scroll-list" class="columns h-menu-hical p-0 m-0">

    <?php


    for ($i=0; $i < 5 ; $i++):
      // note: contains 1 "li" less than the reference

      ?>

      <a href="#" class="columns small-2 p-0 text-center color-blanco color-gris-naranja-claro-hover h-100 v-center"><li id="menu-element" class="columns  text-center h-a">menu</li></a>

      <?php
    endfor;
    ?>


    <li id="menu-element" class="columns large-2 end h-100 p-t-0-2">
      <input type="text" class="columns p-0 h-80" placeholder="Search ...">
    </li>


  </ul>



</nav>
<!-- end menu desktop -->
