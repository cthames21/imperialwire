<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="jquery.js"></script>
		<script src="parallax.js"></script>
		<style>

			:root {
				--bg-color: #64757F;
				--color-0: rgb(220,237,237);
				--color-1: #C8A29C;
				--color-2: #485B64;
				--color-3: #314049;
				--color-4: #1D2E38;
				--color-5: #10242F;
				--main-txt-color: rgb(220,237,237);
				--sec-txt-color: #10242F;
				--main-shadow: #1D2E38;
			}

			body {
				background-color: var(--bg-color);
			}

			p {
				margin: 0;
				padding: 0;
			}

			.section1 {
				display: grid;
				width: 100%;
				height: 500px;
				grid-template-columns: repeat(2, 1fr);
			}

			.section1 img {
				grid-column: 1;
				position: absolute;
				width: auto;
				height: 500px;
			}

			.section1::after {
			 	display: block;
			 	grid-column: 1 / span 2;
			 	position: relative;
			 	background-image: linear-gradient(to right, rgba(255, 255, 255, 0) 0, rgb(240,222,216)s 60%);
			 	height: 500px;
			 	width: 100%;
			 	content: '';
				box-shadow: 0px 0px 15px 0px var(--main-shadow);
			}

			.section1body {
				grid-column: 2;
				width: 50%;
				justify-content: end; 
			}

			.sectionheader {
				grid-row: 1;
				font-size: 36px;
				padding: 30px 0;
				text-align: center;
				align-self: center;
				color: var(--main-txt-color);
				z-index: 1;
			}

			.line {
				display: inline-block;
				width: 40px;
				height: 2px;
				margin:10px;
				background-color: var(--main-txt-color);
				align-self: center;
			}

			.section2 {
				display: grid;
				background-color: var(--color-3);
				width: 95%;
				height: 350px;
				grid-template-rows: 20% 80%;
				grid-template-columns: 45% 55%;
				margin-top: 180px;
				box-shadow: 3px 0px 5px 1px var(--main-shadow);
			}

			.section2photo {
				grid-column: 1;
				grid-row: 1 /span 2;
				align-self: center;
			}

			.section2photo img {
				width: 90%;
				height: auto;
				margin: 0 5%;
				box-shadow: -10px 7px 10px 0px var(--main-shadow);
			}

			.section2body {
				grid-column: 2;
				grid-row: 2;
				width: 95%;
				font-size: 1.2em;
				text-align: center;
				justify-self: center;
			}

			.section2body p {
				width: 95%;
				padding: 10px 0;
				line-height: 30px;
				color: var(--main-txt-color);
			}

			.section3 {
				display: grid;
				background-color: var(--color-3);
				grid-template-rows: 60% 40%;
				width: 95%;
				height: 500px;
				margin-left: 5%;
				margin-top: 120px;
				padding-bottom: 20px;
				color: var(--main-txt-color);
				box-shadow: -3px 0px 5px 1px var(--main-shadow);
			}

			.section3capabilities {
				display: grid;
				grid-row: 1;
				grid-template-columns: 30% 30% 30%;
				grid-template-rows: 1.5fr 1fr 1fr 1fr 1fr;
				width: 100%;
				justify-items: center;
				justify-content: center;
				align-items: center;
				font-size: 22px;
			}

			.section3services {
				display: grid;
				grid-row: 2;
				grid-template-columns: 20% 20% 20% 20%;
				grid-template-rows: 1.5fr 1fr 1fr;
				width: 100%;
				justify-items: center;
				justify-content: center;
				align-items: center;
				font-size: 22px;
			}

			.section4 {
				display: grid;
				width: 100%;
				height: 800px;
				margin-top: 180px;
				grid-template-rows: 50% 50%;
				grid-template-columns: repeat(3,1fr);
				box-shadow: 0px 0px -15px 0px var(--main-shadow);
				box-shadow: 0px 0px 15px 0px var(--main-shadow);
				background-color: var(--color-5);
			}

			.section4 img {
				position: absolute;
				width: 33.33%;
				height: 400px;
				opacity: .5;	
			}

			.section4 img:hover {
				opacity: .95;
			}

			.metalname, .woodname, .wirename {
				display: none;
				position: relative;
				text-align: center;
				font-size: 30px;
				font-weight: bold;
				bottom: 0;				
				color: var(--main-txt-color);
			}

			.section5 {
				display: grid;
				width: 100%;
				height: 350px;
				margin-top: 120px;
				padding: 20px 0;
				grid-template-rows: 25% 75%;
				grid-template-columns: 100%;
				background-color: var(--color-0);
				box-shadow: 0px 0px 15px 0px var(--main-shadow);

			}

			.section5body {
				width: 100%;
				height: 100%;
				grid-row: 2;
				display: grid;
				grid-template-rows: repeat(2, 1fr);
			}

			.section5bodytop {
				display: grid;
				grid-row: 1;
				grid-template-columns: repeat(4, 1fr);
				align-items: center;
				justify-items: center;
				margin-top: -50px;
			}

			.section5bodybottom {
				display: grid;
				grid-row: 2;
				grid-template-columns: repeat(3, 1fr);
				justify-items: center;
				align-items: center;
				margin-top: -50px;
				padding:0 12%;
			}

			.section5bodytop img, .section5bodybottom img {
				width: 200px;
				height: auto;
				max-height: 100%;
				opacity: .7;
				transition: .5s;
			}

			body {
				margin:0;
			}

		</style>
	</head>
	<body>
		<header>
			<?php require("header.php") ?>
		</header>
		<main style="padding-top:230px">
			<div class="section1">
				<div class="sectionheader" style="position: absolute; font-size: 42px">
					Your source for CUSTOM
				</div>
				<img class="firstimage" src="photos/welding.jpg">
				<img class="secondimage" src="photos/drone.jpg" style="width: 0px;">
				<img class="thirdimage" src="photos/skyline3.jpg" style="width: 0px;">
				<div class="section1body" style="position: absolute; font-size: 32px">
					Test
				</div>
			</div>
			<div class="section2">
				<div class="sectionheader" style="grid-column: 2;">
					<div class="line"></div>
						Who are we
					<div class="line"></div>
				</div>
				<div class="section2photo">
					<img src="photos/team.jpg">
				</div>
				<div class="section2body">
					<p>Gravity Design Group was started because the founders saw a need that was not being met within the retail environments world by other design, fixture and graphic organizations.</p>

					<p>Marketing managers, brand managers, merchandising managers and visual merchandisers have lacked an experienced team within their own organizations to help them best position their brand and/or products at the retail shelf.</p>

					<p>Our objective is to provide a solutions-based approach for our clients, which gives them multiple options across various production options and pricing structures.</p>
				</div>
			</div>
			

			<div class="section4">
				<div class="sectionheader" style="width: 100%;grid-column: 1 / span 3;grid-row: 1 / span 2; color: var(--main-txt-color);font-size: 7em;text-shadow: 0px 1px 25px white; pointer-events: none;">
					Endless Possibilities
				</div>
				<div class="metalexample" style="grid-column: 1;grid-row: 1;">
					<img src="photos/steelbackground.jpg">
					<p class="metalname"> Steel </p>	
				</div>				
				<div class="woodexample" style="grid-column: 2;grid-row: 1;">
					<img src="photos/woodbackground.jpg">
					<p class="woodname"> Wood </p>	
				</div>
				<div class="wireexample" style="grid-column: 3;grid-row: 1;">
					<img src="photos/twistedwirebackground.jpg">
					<p class="wirename"> Wire </p>
				</div>
				<div class="wireexample" style="grid-column: 1;grid-row: 2;">
					<img src="photos/twistedwirebackground.jpg">
					<p class="wirename"> Wire </p>
				</div>			
				<div class="woodexample" style="grid-column: 2;grid-row: 2;">
					<img src="photos/acrylicbackground.jpg">
					<p class="woodname"> Acrylic </p>	
				</div>
				<div class="metalexample" style="grid-column: 3;grid-row: 2;">
					<img src="photos/aluminumbackground.jpg">
					<p class="metalname"> Aluminum </p>	
				</div>
			</div>


			<div class="section3">
				<div class="section3capabilities">
					<div class="sectionheader" style="grid-column: 1 / span 3; grid-row: 1; padding: 10px 0; text-shadow: 0px 1px 2px var(--main-shadow);">
						<div class="line"></div>
							Capabilities
						<div class="line"></div>
					</div>
					<div style="grid-column: 1; grid-row: 2;">
						Laser Cutting and Engraving
					</div>
					<div style="grid-column: 1; grid-row: 3;">
						CNC Robotic Welding
					</div>
					<div style="grid-column: 1; grid-row: 4;">
						Tube and Wire Bending
					</div>
					<div style="grid-column: 1; grid-row: 5;">
						CNC Press Brake
					</div>
					<div style="grid-column: 2; grid-row: 2;">
						CNC Spot Welding
					</div>
					<div style="grid-column: 2; grid-row: 3;">
						Robotic/TIG/MIG Welding
					</div>
					<div style="grid-column: 2; grid-row: 4;">
						3D CAD Solidworks
					</div>
					<div style="grid-column: 2; grid-row: 5;">
						3D Engraving and Etching
					</div>
					<div style="grid-column: 3; grid-row: 2;">
						Powder Coating
					</div>
					<div style="grid-column: 3; grid-row: 3;">
						Boxing and Packaging
					</div>
					<div style="grid-column: 3; grid-row: 4;">
						Drop Shipments
					</div>
				</div>
				<div class="section3services">
					<div class="sectionheader" style="grid-column: 1 / span 4; grid-row: 1; padding: 10px 0; text-shadow: 0px 1px 2px var(--main-shadow);">
						<div class="line"></div>
							Services
						<div class="line"></div>
					</div>
					<div style="grid-column: 1; grid-row: 2;">
						Full design capabilities
					</div>
					<div style="grid-column: 2; grid-row: 2;">
						Implementation
					</div>
					<div style="grid-column: 3; grid-row: 2;">
						Reviewing prints and specs
					</div>
					<div style="grid-column: 4; grid-row: 2;">
						Prototyping
					</div>
					<div style="grid-column: 1; grid-row: 3;">
						Advising on cost saving measures
					</div>
					<div style="grid-column: 2 / span 2; grid-row: 3;">
						Special packaging and labeling requirements
					</div>
					<div style="grid-column: 4; grid-row: 3;">
						Special shipping requirements
					</div>
				</div>
			</div>


			<div class="section5">
				<div class="sectionheader" style= "grid-column: 1 / span 6; color:var(--sec-txt-color)">
					Trusted By
				</div>
				<div class="section5body">
					<div class="section5bodytop">
						<img src="photos/thetileshop.png">
						<img src="photos/sleepnumber.png">
						<img src="photos/amsoil.png">
						<img src="photos/caribou.png">
					</div>
					<div class="section5bodybottom">
						<img src="photos/homedepot.png">
						<img src="photos/lowes.png">
						<img src="photos/menards.png">
					</div>
				</div>
			</div>
		</main>
		<footer>
			<?php require("footer.php") ?>

			<script>

				$(document).ready(function() {
					setTimeout(function() {
						$('.firstimage').animate({width:"0px"}, 200);
						$('.secondimage').animate({width:"100%"}, 200);
					}, 4000)
					setTimeout(function() {
						$('.secondimage').animate({width:"0px"}, 200);
						$('.thirdimage').animate({width:"100%"}, 200);
					}, 8000)
					setTimeout(function() {
						$('.thirdimage').animate({width:"0px"}, 200);
						$('.firstimage').animate({width:"100%"}, 200);
					}, 12000)
				})
				/*
				$('div [class^="section1" img:nth-child(2)').show("slide", { direction: "left" }, 1000);

				$('div [class^="section1" img:nth-child(2)').hide("slide", { direction: "left" }, 4000);
				$('div [class^="section1" img:nth-child(3)').show("slide", { direction: "left" }, 4000);

				$('div [class^="section1" img:nth-child(3)').hide("slide", { direction: "left" }, 7000);
				$('div [class^="section1" img:nth-child(4)').show("slide", { direction: "left" }, 7000);
				*/
				setTimeout(function() {
					setInterval(function() {
						$('div [class^="section5bodytop"] img:nth-child(1)').css("opacity","0");
						setTimeout(function() {$('div [class^="section5bodytop"] img:nth-child(1)').css("opacity","1")
						}, 400)
					}, 6000)
				}, 500)

				setTimeout(function() {
					setInterval(function() {
						$('div [class^="section5bodytop"] img:nth-child(2)').css("opacity","0");
						setTimeout(function() {$('div [class^="section5bodytop"] img:nth-child(2)').css("opacity","1")
						}, 400)
					}, 6000)
				}, 2500)

				setTimeout(function() {
					setInterval(function() {
						$('div [class^="section5bodytop"] img:nth-child(3)').css("opacity","0");
						setTimeout(function() {$('div [class^="section5bodytop"] img:nth-child(3)').css("opacity","1")
						}, 400)
					}, 6000)
				}, 4500)

				setTimeout(function() {
					setInterval(function() {
						$('div [class^="section5bodytop"] img:nth-child(4)').css("opacity","0");
						setTimeout(function() {$('div [class^="section5bodytop"] img:nth-child(4)').css("opacity","1")
						}, 400)
					}, 6000)
				}, 6500)


					$('.metalexample').mouseover(function() {
						$('.metalname').css("display", "inline-block")
					})

					$('.metalexample').mouseleave(function() {
						$('.metalname').hide()
					})

					$('.woodexample').mouseover(function() {
						$('.woodname').show()
					})

					$('.woodexample').mouseleave(function() {
						$('.woodname').hide()
					})

					$('.wireexample').mouseover(function() {
						$('.wirename').show()
					})

					$('.wireexample').mouseleave(function() {
						$('.wirename').hide()
					})

			</script>
		</footer>
	</body>
</html>









