$(document).ready(function(){

   $('#cabecera').affix({
      offset: {
         top: $('#cabecera').offset().top
      }
   });

   $('#pie-pagina').affix({
      offset: {
         top: $(window).height() / 2
      }
   });

});
