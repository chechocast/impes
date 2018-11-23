
$ = jQuery.noConflict();

$(document).ready(function() {

    //mostrar menu
    $('.main-menu a').on('click', function(){
      $('.menu-sitio').toggle('slow');
    });

    //resize menu
    var breakpoint = 768;
    $(window).resize(function(){
      if($(document).width() >= breakpoint){
        $('.menu-sitio').show();
      }else{
        $('.menu-sitio').hide();
      }
    });
});
