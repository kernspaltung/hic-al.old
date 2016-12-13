
// var containerSelector = window;
var containerSelector = 'main';

var textblocks = {};

$(document).ready(function(){


// 1. select all headers from content

   headings = pageContent.find('h1,h2,h3,h4,h5,h6');

// 2. find out hierarchy

   // build hierarchy tree:

   // we'll use a js array to store 'tree' Objects

   tree = []

   // iterate through headings

      headings.each(function(){

         console.log( $(this) )

      // it theres no tree in progress,
         // start a new tree
      // if there's a tree in progress,
         // check if new heading is lower hierarchy than last heading added
            // if it's the second element
               // create a sub-tree and add new heading to it
            // if it's not the second,
               // check if new heading is lower hierarchy than current sub-tree's first item
                  // if so, add it to sub-tree
               // otherwise
                  // create a new sub-tree
         // otherwise,
            //create a new tree with new heading as starting node

      }) // finish headings' loop

// 3. show index html

// 4. activate links for scrolling

// 5. add "back to index" button

/*
   if( $(".page-content").length > 0 ) {

      var i = 0;

      var headings = $('.page-content').find('h1,h2,h3,h4,h5,h6');

      $('.page-index-menu ul').html('');

      headings.each(function(i){

         $(this).attr('data-index',i)
         var newli = $('<li>');

         newli.addClass('fontM p1 pl0 text-left cursor-pointer icono');
         newli.html( '<b>'+(i+1)+'.</b> ' + $(this).html());
         newli.attr('data-index',i);

         newli.click(function(){


            var scrollTo = $('.page-content [data-index='+$(this).data('index')+']').offset().top;

            // scrollTo += parseInt($('body').scrollTop())
            scrollTo -= parseInt($('.page-content').offset().top)

            $('html,body').animate({ scrollTop: scrollTo })

         })

         $('.page-index-menu ul').append( newli );


         i++;
      });





      var new_html = $('<div>');

      headings.each(function(i){


         var next_is_h = false;

         var h = $(this);

         var next = h;

         textblocks = [];

         if(  i < headings.length - 1 ) {

            while( ! next_is_h ) {

               next = next.next();
               next_is_h = next.is('h1,h2,h3,h4,h5,h6');

               if( next_is_h ) {
                  break;
               } else {
                  textblocks.push( next.clone() );
                  next.addClass('cloned');
               }

            }

         } else {

            $('.page-content').children().not('h1,h2,h3,h4,h5,h6,.cloned').each(
               function() {
                  textblocks.push( $(this).clone() );
               }
            )
         }

         new_div = $('<div>').addClass('textblock mb1 p3 p_sm_2');

         new_div.append( h );
         new_div.attr('data-index',h.data('index'));

         for( i in textblocks ) {
            new_div.append( textblocks[i] );
         }

         new_html.append( new_div );


      });


      $('.page-content').html( new_html.html() );





      var scrolling = false;

      $( containerSelector ).scroll(function(){

         if(!scrolling) {
            scrolling = setTimeout(function(){

               // check if visible:
               $('.page-content .textblock').each(function(){

                  if ( u.isElementInView( $( containerSelector ), $(this), true ) ) {

                     console.log($(this).attr('data-index'));

                     $('article nav ul li').removeClass('current');
                     $('article nav ul li[data-index='+$(this).data('index')+']').addClass('current');

                     console.log($(this).data('index'));

                  }

               })

               scrolling = false;

            }, 150 );

         }
      });

      $( containerSelector ).trigger('scroll');

   }
*/
});
