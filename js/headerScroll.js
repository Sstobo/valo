(function($) {

	var header = $('#header-wrapper');
    console.log("test")
$(window).scroll(function () {

   if(scrollY <= 0){
       header.animate({
            opacity: 1,
            height: "160px"
           
       }, 300);
   }
   if(scrollY > 0 && header.is(':not(:animated)')){
       header.animate({
            opacity: .90,
            height: "120px"
                
        }, 300);
    }
 });
})( jQuery );

