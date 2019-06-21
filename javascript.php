

$(document).ready(function() {
	document.addEventListener('mousemove', logKey);
	document.addEventListener('wheel', () => {
		logKey();
		shrinkHeader();
	});
	document.addEventListener('click', logKey);
	document.addEventListener('load', logKey);


	$('#imperialwire').css("opacity", "1");



})

function shrinkHeader(e) {

var scroll = $(window).scrollTop();

if (scroll > 50 && $(window).width() > 620) {
    $('.toggle').addClass("small");
	$('#headermain.small').css("box-shadow", "0 0 3px 0 var(--color-4)");
	$('#headermain.small').css("background-color", "var(--acc-color2)");
}


if (scroll <= 50) {
	$('#headermain').css("box-shadow", "none");
 	$('.toggle').removeClass("small");

}
}

/*

 $(window).scroll(function() {
			    
    $('.hideme').each(function(i) {
        
        var bottom_of_object = $(this).position().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        
        if( bottom_of_window > bottom_of_object ){
            
            $(this).animate({'opacity':'1'},1500);
                
        }
    });


  
});


	$('.hideme').each(function(i) {
        
        var bottom_of_object = $(this).position().top + $(this).outerHeight();

        var bottom_of_window = $(window).scrollTop() + $(window).height();
        
        if( bottom_of_window > bottom_of_object ){
            $(this).animate({'opacity':'1'},1500);  
        }

    });
*/
