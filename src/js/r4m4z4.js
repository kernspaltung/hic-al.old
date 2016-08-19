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

   $('.v-center').each(function(){
      var parent = $(this);
      var totalH = 0;
      parent.children().each(function(){
         totalH += parseInt($(this).outerHeight(true));
      });
      parent.css({paddingTop: ( parent.height() - totalH ) / 2 });
   });

});
