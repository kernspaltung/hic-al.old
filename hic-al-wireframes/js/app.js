
u = new Utils();

$(document).ready(function(){

  $(document).foundation();

  // u.vcenter;
  // u.shareH;

  images();

  slider_latest_news();

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
    arrows:true,
    speed: 1000,
    autoplay:true,
    autoplaySpeed:5000
  });
}
