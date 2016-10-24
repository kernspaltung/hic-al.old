
u = new Utils();

$(document).ready(function(){

  $(document).foundation();

  // u.vcenter;
  // u.shareH;

  images();

  menu_scroll();

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
  u.addWindowResizeFunction(u.shareW);
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


// menu en scroll
function menu_scroll() {

  var distancia = $('#main').offset().top;

  // despliegue al hacer loading
  if ($(window).scrollTop() <= distancia) {

    $('#menu-scroll').addClass('posicion-inicial');


  } else if ( $(window).scrollTop() >= distancia ) {// si #main cruza el borde superior

    $('#menu-list-container').detach().appendTo('#menu-scroll');
    $('#menu-list a div li:nth(0)').html('<i class="fa fa-home"></i>');//cambia a logo icono
    setTimeout(function() {

      $('#menu-scroll').addClass('posicion-con-scroll');

    },100);

  }
  // Al hacer scroll
  $(window).scroll(function() {

    if ($(window).scrollTop() <= distancia) {
      console.log('soy menor');
      $('#menu-list-container').detach().appendTo('#menu-desktop');

      $('#menu-list a div li:nth(0)').html('Inicio');//regresa el texto cuando esta  scrollTop 0

      setTimeout(function() {

        $('#menu-scroll').removeClass('posicion-con-scroll').addClass('posicion-inicial');

      },100);


    } else if ( $(window).scrollTop() >= distancia ) {// si #main cruza el borde superior

      $('#menu-list-container').detach().appendTo('#menu-scroll');
      $('#menu-list a div li:nth(0)').html('<i class="fa fa-home"></i>');//cambia a logo

      setTimeout(function() {

        // $('#menu-scroll').addClass('posicion-con-scroll');
        $('#menu-scroll').removeClass('posicion-inicial').addClass('posicion-con-scroll');

      },100);

    }
  });

}
