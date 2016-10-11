
u = new Utils();

$(document).ready(function(){

   $(document).foundation();

   images();

   setupResize();

})

function images() {

  $('.imgLiquid.imgLiquidFill').imgLiquid();

  $('.imgLiquid.imgLiquidNoFill').imgLiquid({fill:false});

}


function setupResize() {

   u.addWindowResizeFunction( u.verticalCenter );
   $(window).trigger('resize')
}
