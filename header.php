<style>
	#headermain {
		display: grid;
		grid-template-columns: 40% 20% 40%;
		width: 100vw;
		height: 130px;
		padding: 0 2vw;
		align-items: center;
		justify-items: center;
		z-index: 5;
		box-shadow: 0px -10px 5px 0px var(--bg-color), 0px 0px 5px 0px var(--color-4);
		transition: height .5s;
		background-color: var(--color-0);
	}

	#linkbarcontainer {
		display: grid;
		grid-template-columns: repeat(5, auto);
		grid-template-rows: 100%;
		grid-gap: 2vw;
		grid-column: 3;
		width: 100%;
		justify-content: center;
	}

	.linkbar {
		grid-row: 1;
		text-align: center;
	}

	#linkbar1 {
		grid-column: 1;
	}

	#linkbar2 {
		grid-column: 2;
	}

	#linkbar3 {
		grid-column: 3;
	}

	#linkbar4 {
		grid-column: 4;
	}

	#linkbar4 {
		grid-column: 5;
	}

	.linkbar > a {
		text-decoration: none;
	}

	.linkbar > a:hover {
		color: var(--acc-color);
	}

	.linkbar > a.active {
	   color: var(--acc-color);
	   border-bottom: 1px solid var(--acc-color);
	}

	#imperialwire {
		display: inline-grid;
		grid-template-rows: 100%;
		width: 100%;
		height: 100%;
		grid-column: 1;
		opacity: 0;
		align-items: center;
		justify-items: center;
		transition: 0s;
	}

	#imperialwire img {
		display: grid;
		max-height: 75%;
		max-width: 95%;
		height: auto;
		width: auto;
		opacity: 1;
		cursor: pointer;
	}

	#phonenumber {
		grid-column: 2;
		font-size: 2vw;
	}

	.menufade {
		grid-column: 3;
		display: none;
	}

	#menucontainer {
		display: flex;
		position: relative;
		z-index: 10;
		justify-content: center;
		transition: 1s;
	}

	#menuicon {
		grid-row: 1;
		grid-column: 4;
		justify-self: center;
		opacity: 1;
		transition: 1s;
		height: 40px;
	}

	.menudropdown {
		position: absolute;
		right:40px;
		top:45px;
		width: 120px;
		height:150px;
		z-index: 10;
		/*visibility: hidden;*/
	}

	#menuoption1,#menuoption2,#menuoption3,#menuoption4 {
		display: block;
		height: 30px;
		font-weight: bold;
		text-align: right;
		text-decoration: none;
		color: var(--acc-color);
		opacity: 0;
		transition: .5s;
		padding: 8px;
	}

	#menuoption1:hover,#menuoption2:hover,#menuoption3:hover,#menuoption4:hover {
		color: var(--color-1);
	}

	#hamburgermenu {
		fill: var(--color-3);
	}

	@media only screen and (max-width:620px) {

	.menufade {
		display: block;
	}

</style>
<!--
<div class="colorbar"></div>
-->
<div class="toggle" id="headermain">
	<div class="toggle" id="imperialwire">
		<img src="photos/headerlogo.png" onclick="window.location.href='index.php'" />
	</div>


	<div id="phonenumber">
		763-391-7798
	</div>


	<div class="menufade">
		<div class="toggle" id="menucontainer">
			<g id="menuicon">
				<svg id="hamburgermenu" height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink" ><path class="path"stroke-miterlimit="10" d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg>
			</g>
			<div class="menudropdown">
				<a id="menuoption1" href="index2.php">Home</a>
				<a id="menuoption2" href="services.php">Solutions</a>
				<a id="menuoption3" href="howitworks.php">How it Works</a>
				<a id="menuoption4" href="contact.php">Contact</a>
			</div>
		</div>
	</div>


	<div id="linkbarcontainer">
		<div id="linkbar1" class="linkbar">
			<a href="index.php"> Home </a>
		</div>
		<div id="linkbar2" class="linkbar">
			<a href="solutions.php"> Solutions </a>
		</div>
		<div id="linkbar3" class="linkbar">
			<a href="about.php"> About </a>
		</div>
		<div id="linkbar4" class="linkbar">
			<a href="gallery.php"> Gallery </a>
		</div>
		<div id="linkbar5" class="linkbar">
			<a href="contact.php"> Contact </a>
		</div>
	</div>

</div>

<script>
	$(document).ready(function() {
		if (location.pathname != '/index.php') {
		    $("#imperialwire").css("opacity","1");
		}
		else {
			$("#imperialwire").css("transition","opacity 1.5s");
			$("#imperialwire").css("opacity","1");
		}

	    $("[href]").each(function() {
	        if (this.href == window.location.href) {
	            $(this).addClass("active");
	        }
	    });
	});

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
		$('.menudropdown').css("visibility","hidden");

	})
</script>








