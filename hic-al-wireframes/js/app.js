u = new Utils();


$(document).ready(function(){

   $(document).foundation();

   images();

   buscador();

   slider_latest_news();

   slider_medios_preview();

   slider_temas();

   setup_tema();

   medios_preview();

   $('#menu-scroll').addClass('hidden')


   if( $("#home-mapa").length > 0 ) setupMapa();

   setupResize();

   // eliminar p's vacíos


   console.log("Hic-Al ready");
});



function setup_tema() {

   if( $('#tema-contenido').length > 0 ) {

      $('#tema-contenido').height(0)

      $('#tema-ver-mas').click(function(){
         if( $('#tema-contenido').hasClass('hidden') ) {

            $('#tema-contenido').css({opacity:0})
            $('#tema-contenido').removeClass('hidden')

            $(window).trigger('resize');

            // $('#tema-contenido').animate({ height: $('#tema-contenido .contenido').height() },1000, function(){
            //    $('#tema-contenido').css({opacity:1})
            // })

            $('#tema-contenido').height('auto')
            $('#tema-contenido').css({opacity:1})

            //
            //
            // totalH = 0;
            //
            //
            //    console.log(totalH);
            //
            // $('#tema-contenido').animate({ height: 'auto' })
            // $('#tema-contenido').css({opacity:1})
            $('#tema-ver-mas').html('Cerrar')
         } else {
            $('#tema-contenido').animate({height:0},300,function(){
               $('#tema-contenido').addClass('hidden')
               $('#tema-ver-mas').html('Leer más')
            })
         }



      })

      $('#tema-contenido-cerrar').click(function(){

         if( ! $('#tema-contenido').hasClass('hidden') ) {
            $('#tema-contenido').animate({height:0},300,function(){
               $('#tema-contenido').addClass('hidden')
               $('#tema-ver-mas').html('Leer más')
            })

            $(window).trigger('resize');

         }

      })

   }

}



function setupMapa() {
   var zoom=2;
   if($(window).width() < 768) {
      zoom = 1;
   }
   else {
      zoom = 2;
   }

   var mymap = L.map('home-mapa', {
      zoomControl: false,
      scrollWheelZoom: false
   }).setView([-15, -80], zoom);

   L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/light-v9/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZnVyZW5rdSIsImEiOiJjaW16eHVpd3owNjJ2dXBra3FldTVrYzVtIn0.kJH-xAuuKWnYk8htVvGF2Q', {
      attribution: false,
      maxZoom: zoom,
      minZoom: zoom  ,
      //  id: 'your.mapbox.project.id',
      //  accessToken: 'pk.eyJ1IjoiZnVyZW5rdSIsImEiOiJjaXZsczVoYXYwM3Y0Mm9udnh1dmV4cTMxIn0.Ajhxu45JrPr0eZQick8DCg'
   }).addTo(mymap);
   mymap.invalidateSize()

   $(".leaflet-control-attribution").hide()
}




function setupResize() {

   u.addWindowResizeFunction( responsivo_large );
   u.addWindowResizeFunction( u.shareW );
   u.addWindowResizeFunction( u.squareH );
   u.addWindowResizeFunction( u.shareH );
   u.addWindowResizeFunction( u.verticalCenter );
   u.addWindowResizeFunction( function() {
      $('.h-16-9, iframe').each(function(){
         $(this).height( $(this).width() / ( 16 / 9 ) )
      })
   } );

   setTimeout(function(){

      $(window).trigger('resize');

   },100)

}



// function setupLoading() {}




function responsivo_large() {

   if ( $(document).width() >= 1024 ) {
      if(  $('#menu-scroll').hasClass('hidden') ) {
         // menu fixed de escritorio
         menu_scroll();
         //muestra menu scroll
         $('#menu-scroll').removeClass('hidden');


         //en desktop quita el alto del header fixed
         // $('#main').removeClass('top-contenido-movil');

         //desaparece menu movil si es visible
         $('#menu-movil').addClass('hidden');

         // acomoda sidebar 1 en primer hijo
         $('#sidebar-1').detach().insertBefore('#main');

         //reset de menu movil si va a escritorio
         if (! $('#boton-menu-movil i').hasClass('hidden')) {
            $('#boton-menu-movil i').removeClass('fa-remove').addClass('fa-bars').css('transition','0.25s')
            $('#menu-movil').addClass('hidden');
            $('#barras').toggleClass('down');
         };
      }
   } else {

      // menu en medium y small
      menu_movil();
      //esconde menu scroll
      $('#menu-scroll').addClass('hidden');

      //en movil agrega el alto del header fixed
      // $('#main').addClass('top-contenido-movil');


      // reacomoda sidebar 1 en segundo hijo
      $('#sidebar-1').detach().insertAfter('#main');


   }

}


function images() {

   $('.imgLiquid.imgLiquidFill').imgLiquid();

   $('.imgLiquid.imgLiquidNoFill').imgLiquid({fill:false});

   $('.imgLiquid.imgLiquidNoFillLeft').imgLiquid({
      fill:false,
      horizontalAlign:"left",
   });

   $('.imgLiquid.imgLiquidNoFillRight').imgLiquid({
      fill:false,
      horizontalAlign:"right",
   });

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
   $('.slickNoArrows').slick({
      dots:true,
      arrows:false,
      speed: 1000,
      autoplay:true,
      autoplaySpeed:5000
   });
}

// slider
function slider_temas() {

   $('.slider-temas').slick({
      dots:true,
      arrows:true,
      speed: 1000,
      autoplay:true,
      autoplaySpeed:5000
   });
}


//funciones medios
function slider_medios_preview() {

   $('.slick-medios-preview-thumbs').slick({
      dots:true,
      arrows:false,
      speed: 1000,
      autoplay:true,
      autoplaySpeed:5000,
      slidesToShow:3,
      slidesToScroll:3
   });
}
//
//preview media
function posiciona_preview(donde,pv) {
   // de momento pega el preview despues del elemento clickeado
   setTimeout(function() {

      donde.after(pv);
   },251);
   //
}

function cierra_preview(pvc) {
   // boton cerrar perview
   $('#close-medios-preview').on('click', function() {

      $(pvc).slideUp(250);
      $('#canvas-item-pointer-' + index).addClass('hidden');


   });
   //

}
//funcion principal preview
function medios_preview() {

   var previewcanvas = $('#portafolio-preview-canvas');
   var preview = $(previewcanvas).detach();
   var antesid;

   //
   $('.medios-item').each(function(index) {

      $(this).on('click', function(e) {

         var id = this.id;

         // checa si esta abierto el preview
         if ( $(previewcanvas).is(':visible') ) {

            // si se clickeo el mismo contenedor, cierra y ya
            if (id === antesid) {

               $(previewcanvas).slideUp(250);
               //borra triangulo
               $('#canvas-item-pointer-' + index).addClass('hidden');

            } else {//si se clickeo un div diferente

               // borra triangulo
               $('.canvas-item-pointer').addClass('hidden');

               antesid = id;

               $(previewcanvas).slideUp(250);

               //retraso incrusta preview
               posiciona_preview($(this),preview);

               // retrasa el desplegado del perview en la nueva posicion
               setTimeout(function() {

                  $(previewcanvas).slideDown(250);
                  //muestra triangulo
                  $('#canvas-item-pointer-' + index).removeClass('hidden');

                  cierra_preview(previewcanvas);

               },300);
               //
            }

         } else {//si esta cerrado el preview

            antesid = id;

            // incrusta preview
            posiciona_preview($(this),preview);

            // retrasa el desplegado del perview
            setTimeout(function() {

               $(previewcanvas).slideDown(250);
               //muestra triangulo
               $('#canvas-item-pointer-' + index).removeClass('hidden');

               cierra_preview(previewcanvas);

            },250);
            //


         }
         // endif

      });

   });
   //

}


// menu en scroll
function menu_scroll() {

   var distancia = $('#main').offset().top;
   var logo = $('#menu-list a div li:nth(0)');//.html('<i class="fa fa-home"></i>');


   //Defaults como se despliega al hacer loading
   if ($(window).scrollTop() < distancia) {

      // logo.html('HIC en el Mundo');

      $('#menu-scroll').addClass('posicion-inicial');


   } else if ( $(window).scrollTop() > distancia ) {// si #main cruza el borde superior

      $('#menu-list-container').detach().appendTo('#menu-scroll-sitio');

      // logo.html('<div id="logo-scroll" class="columns h-100 p-0 imgLiquid imgLiquidNoFill"><img src="img/logo-50-2x-blanco.png" alt=""></div>');//cambia a logo

      setTimeout(function() {

         $('#menu-scroll').addClass('posicion-con-scroll');

      },100);

   }
   // termina defaults menu scroll

   // Accion al hacer scroll
   $(window).scroll(function() {

      if ($(window).scrollTop() <= distancia) {


         setTimeout(function() {

            $('#menu-scroll').removeClass('posicion-con-scroll').addClass('posicion-inicial');


            // logo.html('HIC en el Mundo');//regresa el texto cuando esta  scrollTop 0

         },20);

         $('#menu-list-container').detach().appendTo('#menu-desktop');

         $('.menu-element a, #header .fa-search')
         .removeClass("color-vino-intenso").addClass("color-blanco")

         u.shareW();


      } else if ( $(window).scrollTop() >= distancia ) {// si #main cruza el borde superior


         //  logo.html('<div id="logo-scroll" class="columns h-100 p-0 imgLiquid imgLiquidNoFill"><img src="img/logo-50-2x-blanco.png" alt=""></div>');//cambia a logo

         $('#menu-list-container').detach().appendTo('#menu-scroll-sitio');

         $('.menu-element a, #menu-scroll .fa-search')
         .addClass("color-vino-intenso").removeClass("color-blanco")

         u.shareW();
         //
         setTimeout(function() {

            $('#menu-scroll').removeClass('posicion-inicial').addClass('posicion-con-scroll');


            // limpia el contenido de el div y agregale el menu de nuevo
            // $('#menu-scroll-sitio').html('');

         },150);

      }


   });

   $(window).trigger("scroll")


}

//
function menu_movil() {

   setTimeout(function() {
      $('#boton-menu-movil i').removeClass('fa-remove').addClass('fa-bars').css('transition','0.25s')
      $('#menu-movil').css('transition','0.5s').addClass('hidden');
   },250);



   // // si va a mayor de medium
   // $(window).resize(function() {
   //
   //   if ($(window).width() > 1024 ) {
   //
   //   //   //reset
   //   //   if (! $('#boton-menu-movil i').hasClass('hidden')) {
   //   //     $('#boton-menu-movil i').removeClass('fa-remove').addClass('fa-bars').css('transition','0.25s')
   //   //     $('#menu-movil').addClass('hidden');
   //   //     $('#barras').toggleClass('down');
   //   //   };
   //   // };
   // });

   // click boton menu movil
   $('#boton-menu-movil,  #boton-menu-movil-micrositio  ').on('click', function() {

      $('#barras').toggleClass('down');

      // change menu button icon + shows menu
      if ($('#boton-menu-movil i').hasClass('fa-bars')) {

         setTimeout(function() {
            $('#boton-menu-movil i').removeClass('fa-bars').addClass('fa-remove').css('transition','0.25s')
            $('#menu-movil').removeClass('hidden');
         },250);

      } else if ($('#boton-menu-movil i').hasClass('fa-remove')) {

         setTimeout(function() {
            $('#boton-menu-movil i').removeClass('fa-remove').addClass('fa-bars').css('transition','0.25s')
            $('#menu-movil').addClass('hidden');
         },250);

      }

   });


   if( $(window).width() <= 1024 ) {


      if ( ! $('#menu-scroll-secciones').hasClass("movil") ) {

         $('#menu-scroll-secciones').detach().insertAfter( "#header-movil" ).css({marginTop:0, padding: 0, zIndex: 999});


         $('#menu-scroll-secciones').removeClass( "color-vino-claro-bg h-50 bottom-right-corner");
         $('#menu-scroll-secciones').addClass( "movil fixed h-10-v p-0-1 color-white-bg" );
         $('#menu-scroll-secciones li').addClass( "color-white-bg font-xxs color-black p-0-2" );



      } else {


         $('#menu-scroll-secciones').detach().appendTo('#menu-scroll').css({marginTop:0, padding: 0 });

         $('#menu-scroll-secciones').removeClass( "movil fixed h-10-v p-0-1 color-white-bg" );
         $('#menu-scroll-secciones li').removeClass( "color-white-bg font-xxs color-black p-0-2" );
         $('#menu-scroll-secciones').addClass( "color-vino-claro-bg h-50 bottom-right-corner" );

      }

   }

}

//
function buscador() {

   $('#boton-buscar').on('click', function() {

      $('#menu-search').toggleClass('open-pos');

      console.log('buscador');

      return false;

   });

}
