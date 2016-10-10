
u = new Utils();

$(document).ready(function(){

   $(document).foundation();

   setupResize();

})

function setupResize() {

   u.addWindowResizeFunction( u.verticalCenter );
   $(window).trigger('resize')
}
