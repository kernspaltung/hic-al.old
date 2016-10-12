<section id="home-latest-news" class="columns p-0 m-b-3">

  <h1 class="columns h-2 text-center font-sm-m bold font-md-m font-lg-m v-center">
    <div href="#" class="columns p-0 h-a">Latest News</div>
  </h1>

  <div id="slider-latest-news" class="columns p-0 h-35-v slick">

    <?php
    for ($i=0; $i < 4; $i++):

      ?>

      <div class="columns p-0 imgLiquid imgLiquidFill">

        <img src="http://fakeimg.pl/300?text=placeholder"/>

      </div>


      <?php
    endfor;

    ?>

  </div>


  <div class="columns h-40 p-0">

    <?php

    for ($i=0; $i < 6 ; $i++):

      ?>

      <article class="columns medium-6 h-15-v p-0 m-b-1">

        <div class="columns p-0 medium-4 imgLiquid imgLiquidFill">

          <img src="http://fakeimg.pl/300?text=news" alt="">

        </div>

        <div class="columns medium-8">

          <div class="columns font-sm-s font-md-s font-lg-m p-1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis!
          </div>

        </div>

      </article>

      <?php

    endfor;

    ?>

  </div>

  <div class="columns text-center h-5 font-sm-m font-md-m font-lg-m v-center">

    <div class="h-a">
      + More news
    </div>

  </div>

</section>
