
var map;
function initMap() {

  var latLng = {
    lat: parseFloat(opciones.latitud),
    lng: parseFloat(opciones.longitud)
  };

  map = new google.maps.Map(document.getElementById('mapa'), {
    center: latLng,
    zoom: parseInt(opciones.zoom),
    draggable: false
  });

  var marker = new google.maps.Marker({
    position: latLng,
    map: map,
    title: 'Impes'
  });
}

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
