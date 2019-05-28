$(document).ready(function() {
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
		$('.headerlinkcontainer').show("slow");
	}, 400)


	setTimeout(function() {
		$('div [id^="externallinks"] svg:nth-child(1)').show("slow");
	}, 2000)
	setTimeout(function() {
		$('div [id^="externallinks"] svg:nth-child(2)').show("slow");
	}, 2500)
	setTimeout(function() {
		$('div [id^="externallinks"] svg:nth-child(3)').show("slow");
	}, 3000)


	$('#menuicon').mouseover(function() {
		/*$('#menucontainer').css("display","block");

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
*/
/* Menu 1 */

/* Menu 2 */
/*
		$('#menuoption2').mouseover(function() {
			$('#solutionsdropdown').css("display","block");
			setTimeout(function() {
				$('#solutionsdropdownitem1')
					.css("opacity","1")
					.css("transform","translate(-30px,-30px)")
			}, 100);
			setTimeout(function() {
				$('#solutionsdropdownitem2')
					.css("opacity","1")
					.css("transform","translate(-40px,0px)")
			}, 200);
			setTimeout(function() {
				$('#solutionsdropdownitem3')
					.css("opacity","1")
					.css("transform","translate(-30px,30px)")
			}, 300);
		})

		$('#menuoption2').mouseleave(function() {
			setTimeout(function() {
				$('#solutionsdropdownitem1')
					.css("opacity","0")
					.css("transform","translate(-30px,-30px)")
			}, 100);
			setTimeout(function() {
				$('#solutionsdropdownitem2')
					.css("opacity","0")
					.css("transform","translate(-40px,0px)")
			}, 200);
			setTimeout(function() {
				$('#solutionsdropdownitem3')
					.css("opacity","0")
					.css("transform","translate(-30px,30px)")
			}, 300);
			setTimeout(function() {
				$('#solutionsdropdown').css("display","none");
			}, 600);
		})
*/
/*Menu 3,4*/
	})
/*
	$('#menuicon').mouseleave(function() {
			setTimeout(function() {
				$('#menuoption4')
					.css("opacity","0")
			}, 100);
			setTimeout(function() {
				$('#menuoption3')
					.css("opacity","0")
			}, 150);
			setTimeout(function() {
				$('#menuoption2')
					.css("opacity","0")
			}, 200);
			setTimeout(function() {
				$('#menuoption1')
					.css("opacity","0")
			}, 250);
			setTimeout(function() {
				$('#menucontainer').css("display","none");
			}, 750);
	})
*/
})



