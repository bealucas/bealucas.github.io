/* ------------------------------------- */
/* 1. Menu ................ */


$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 800) {
        $(".menu_blh").addClass("darkHeader");
        
    } else {
        $(".menu_blh").removeClass("darkHeader");
    }
});


// ACTIVE NAV


$(document).ready(function () {
   
  
   
    $('.menu_li').hover(function(){
      $('.menu_li').toggleClass('menu_link_off');
      $(this).toggleClass('menu_link_on');
     
  });
});
  
  $(function(){

	var cerrado=true;
	
	$(".nav-button").click(function(evento){
	evento.preventDefault()
if(cerrado){
    $(this).addClass("active");
	setTimeout(function(){
		$(".header-waves").addClass("abierto");
	},200)
	
}else{
    $(this).removeClass("active");
	
    setTimeout(function(){
		$(".header-waves").removeClass("abierto")
	},200)
	
}
cerrado=!cerrado;

	})
})

/*--------------
  $(document).ready(function(){

    $(".fondo_piefoto").css({'height':($(".piefoto").height()+'px')});
    $(".fondo_piefoto2").css({'height':($(".piefoto2").height()+'px')});
});

*/

/* ------------------------------------- */
/* Link top  ................ */
/* ------------------------------------- */

$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) {    // If page is scrolled more than 50px
      $('#top').addClass("none_arrow");       // Fade in the arrow
  } else {
      $('#top').removeClass("none_arrow");      // Else fade out the arrow
  }
});
$('#top').click(function() {            // When arrow is clicked
  $('body,html').animate({
      scrollTop : 0                   // Scroll to top of body
  }, 500);
});
        





