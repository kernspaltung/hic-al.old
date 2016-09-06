u = new Utils();

$(document).ready(function(){

   init_assets();

   init_window();



})

function init_assets() {

   // js utils:
   u.addWindowResizeFunction(u.verticalCenter);

   // imgLiquid:
   $('.imgLiquid.imgLiquidFill').imgLiquid();
   $('.imgLiquid.imgLiquidNoFill').imgLiquid({ fill: false });

}

function init_window() {

   $(window).trigger('resize');
   $(window).trigger('scroll');

}
