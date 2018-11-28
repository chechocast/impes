
//full page para slide home y video
$(document).ready(function() {
  $('#fullpage').fullpage({
    anchors: ['firstPage'],
    sectionsColor: ['#283583'],
    autoScrolling: false,
    css3: true,
    fitToSection: false
  });
});
var tag = document.createElement('script'); 
tag.src = "https://www.youtube.com/iframe_api"; 
var firstScriptTag = document.getElementsByTagName('script')[0]; 
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag); 
var player; 
function onYouTubeIframeAPIReady() { 
  player = new YT.Player('myVideo', 
    { height: '120%', 
    width: '100%', 
    videoId: 'q69OIhIwfr0', 
    events: { 'onReady': onPlayerReady, 'onStateChange': onStateChange } 
  }); 
} 
function onPlayerReady(event) { 
  event.target.setVolume(100); 
  event.target.mute(); 
  event.target.playVideo(); 
} 
function onStateChange(state) { 
  if (state.data == 0) 
    { 
      player.seekTo(0); 
      player.playVideo(); 
    } 
  } 
  function stopVideo() { player.stopVideo(); }



//slide del home
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    spaceBetween: 30,
    autoplay: true,
});
