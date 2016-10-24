
u = new Utils();

$(document).ready(function(){

  $(document).foundation();

  // u.vcenter;
  // u.shareH;

  images();

  slider_latest_news();

  slider_portfolio_preview();
  portfolio_preview();


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
    slidesToShow:3,
    slidesToScroll:3
  });
}



function portfolio_preview() {

  var previewcanvas = $('#portafolio-preview-canvas');
  var preview = $(previewcanvas).detach();
  var antesid;

  //
  $('.portfolio-item').each(function(index) {


    $(this).on('click', function(e) {

      var id = this.id;

      // checa si esta abierto el preview
      if ( $(previewcanvas).is(':visible') ) {



        // si son iguales las ids anteriores solo cierra
        if (id === antesid) {

          // debug
          console.log('ids iguales' + ' ' + id + ' ' + antesid);
          $(previewcanvas).slideUp('fast');

        } else {

          // debug
          console.log('ids desiguales' + ' ' + id + ' ' + antesid);

          antesid = id;

          $(previewcanvas).slideUp(250);
          // incrusta preview
          posiciona_preview($(this),preview);

          // retrasa el desplegado del perview en la nueva posicion
          setTimeout(function() {
            $(previewcanvas).slideDown('fast');

            cierra_preview(previewcanvas);

          },300);
          //
        }
        // endif desiguales

      } else {

        antesid = id;

        // debug
        console.log('no es visible' + ' ' + id + ' ' + antesid);

        // incrusta preview
        posiciona_preview($(this),preview);

        // retrasa el desplegado del perview
        setTimeout(function() {

          $(previewcanvas).slideDown('fast');

          cierra_preview(previewcanvas);

        },500);
        //


      }
      // endif

    });

  });
  //


}

function posiciona_preview(donde,pv) {
  // de momento pega el preview despues del elemento clickeado
  donde.after(pv);
  //
}

function cierra_preview(pvc) {
  // boton cerrar perview
  $('#close-portfolio-preview').on('click', function() {

    $(pvc).slideUp('fast');

  });
  //

}
