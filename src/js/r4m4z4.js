u=new Utils();

// u.addWindowResizeFunction( u.verticalCenter );

$(document).ready(function(){

   $('#cabecera').affix({
      offset: {
         top: $(window).height()/2//$('#portada').offset().top
      }
   });

   $('#pie-pagina').affix({
      offset: {
         top: $(window).height() / 2
      }
   });

   u.verticalCenter();


});
