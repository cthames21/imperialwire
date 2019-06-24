

document.addEventListener('mousemove', () => {
	logKey();
	shrinkHeader();
});
document.addEventListener('wheel', () => {
	logKey();
	shrinkHeader();
});
document.addEventListener('mousedown', () => {
	logKey();
	shrinkHeader();
});
window.addEventListener('load', () => {
	logKey();
	shrinkHeader();
});
window.addEventListener('resize', () => {
	logKey();
	shrinkHeader();
});

$('#imperialwire').css("opacity", "1");


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
