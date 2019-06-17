document.addEventListener('mousemove', logKey);
document.addEventListener('wheel', logKey);
document.addEventListener('click', logKey);
window.addEventListener('load', logKey);

$(document).ready(function() {
	$('#imperialwire').css("opacity", "1");

	$('#facebook').mouseover(function() {
		$('#facebook').css("fill","#2DA3F2")
	})
	$('#facebook').mouseleave(function() {
		$('#facebook').css("fill","slategray")
	})
	$('#linkedin').mouseover(function() {
		$('#linkedin').css("fill","#2DA3F2")
	})
	$('#linkedin').mouseleave(function() {
		$('#linkedin').css("fill","slategray")
	})
	$('#instagram').mouseover(function() {
		$('#instagram').css("fill","#2DA3F2")
	})
	$('#instagram').mouseleave(function() {
		$('#instagram').css("fill","slategray")
	})
})



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

