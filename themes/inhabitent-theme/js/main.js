(function($) {
	//search bar toggle		
$( ".search-toggle" ).click(function(e) {
  $( ".search-form" ).animate({
    right: "+=200",
    width: "toggle",
  }, 500); 
});
  
})( jQuery );

	//header scroll 
(function($) {
var targetOffset = $(".anchor").offset().top;
var $w = $(window).scroll(function(){


    if ( $w.scrollTop() > targetOffset ) {   
        $('.head').css({
        	"position":"fixed",
        	"background-color":"rgba(255,255,255,.6)",
        	"border-bottom":"1px solid #e1e1e1",
      });
        $('#wpadminbar').css({
        	"visibility":"hidden",
      });
        $('.main-navigation li a,.search-toggle').css({
        	"color":"#248A83",
        	"text-shadow":"none",
        });
    
    } else {
        $('.head').css({
        	"position":"absolute",
        	"top":"0",
        	"background-color":"rgba(255,255,255,0)",
        	"border-bottom":"none",
        });
        $('#wpadminbar').css({
        	"visibility":"visible"
      });
       $('.main-navigation li a,.search-toggle').css({
        	"color":"#fff",
        });
    }

});


})( jQuery );