$(document).ready(function() {
	function logKey(e) {
		if ($(window).scrollTop() < 5) {
			$('#requestquote').removeClass("small")
			$('#tellmore').removeClass("small")
		}
	}

	$('#requestquote').mouseover(function() {
		$('#requestquote').removeClass("small")
		$('#tellmore').removeClass("small")
	})

	$('#requestquote').mouseleave(function() {
		$('#requestquote').addClass("small")
		$('#tellmore').removeClass("small")
	})


	$('#imperialwire').css("opacity", "1");

	$('#facebook').mouseover(function() {
		$('#facebook').css("fill","crimson")
	})
	$('#facebook').mouseleave(function() {
		$('#facebook').css("fill","slategray")
	})
	$('#linkedin').mouseover(function() {
		$('#linkedin').css("fill","crimson")
	})
	$('#linkedin').mouseleave(function() {
		$('#linkedin').css("fill","slategray")
	})
	$('#instagram').mouseover(function() {
		$('#instagram').css("fill","crimson")
	})
	$('#instagram').mouseleave(function() {
		$('#instagram').css("fill","slategray")
	})

	setTimeout(function() {
		$('div [id^="externallinks"] svg:nth-child(1)').show("slow");
	}, 2000)
	setTimeout(function() {
		$('div [id^="externallinks"] svg:nth-child(2)').show("slow");
	}, 2500)
	setTimeout(function() {
		$('div [id^="externallinks"] svg:nth-child(3)').show("slow");
	}, 3000)

	$('#menucontainer').mouseover(function() {
		$('#menuoption1').css("opacity","0")
		$('#menuoption2').css("opacity","0")
		$('#menuoption3').css("opacity","0")
		$('#menuoption4').css("opacity","0")

		$('.menudropdown').css("visibility","visible");

		setTimeout(function() {
			$('#menuoption1').css("opacity","1")
		}, 100);
		setTimeout(function() {
			$('#menuoption2').css("opacity","1")
		}, 200);
		setTimeout(function() {
			$('#menuoption3').css("opacity","1")
		}, 300);
		setTimeout(function() {
			$('#menuoption4').css("opacity","1")
		}, 400);
	})

	$('#menucontainer').mouseleave(function() {

	})


})



