
u = new Utils();

$(document).ready(function(){

  $(document).foundation();

  // u.vcenter;
  // u.shareH;

  images();

  slider_latest_news();


  // portforlio
  portfolio_preview();

  slider_portfolio_preview();
  //
  setupResize();

})

function images() {

  $('.imgLiquid.imgLiquidFill').imgLiquid();

  $('.imgLiquid.imgLiquidNoFill').imgLiquid({fill:false});

}


function setupResize() {

  u.addWindowResizeFunction( u.verticalCenter );
  u.addWindowResizeFunction(u.shareH);
  $(window).trigger('resize');
}

// slider
function slider_latest_news() {

  $('.slick').slick({
    dots:true,
    arrows:false,
    speed: 1000,
    autoplay:true,
    autoplaySpeed:5000
  });
}


//funciones portfolio
function slider_portfolio_preview() {

  $('.slick-portfolio-preview-thumbs').slick({
    dots:true,
    arrows:false,
    speed: 1000,
    autoplay:true,
    autoplaySpeed:5000,
    slidesToShow:3
    // slidesToScroll: 3
  });
}

function portfolio_preview() {

  var preview = $('#portafolio-preview-canvas').detach();

  $('.portfolio-item').each(function(index) {


    $(this).on('click', function() {


        $(this).append(preview);

        setTimeout(function() {
          console.log("foto #" + index + preview);

          $('#portafolio-preview-canvas').slideDown('fast');

        },500);


    });

  });

}
