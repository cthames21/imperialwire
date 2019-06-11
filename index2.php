<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="fonts/helveticaneue.css">
		<script src="jquery.js"></script>
		<script src="parallax.js"></script>
	</head>
	<body>
		<div class="page-container">
			<header class="toggle">
				<?php include("header.php");?>
			</header>
			<main id="home">
				<div id="scrolldiv">
					<div class="scrolldivbody">
						What separates us from the other guys is our adaptability and personal touch. All Imperial Wire’s displays are custom made to fit the needs of our customers. 
					</div>
					<video autoplay muted loop id="myVideo">
						<source src="photos/manufacturing.mp4" type="video/mp4">
					</video>
					
					<div class="scrolldivarrows">
						<img src="photos/scrollarrow.svg" width="75px">
					</div>
				</div>
<!--
				<div class="section1">
					<div class="sectionheader" style="position: absolute; font-size: 4em; grid-row:1 / span 2; width:100%;margin-top:100px;text-shadow: 0 3px 5px var(--main-shadow);background-color: rgba(220,237,237,.3)">
						Point of Purchase Displays
					</div>
					<img class="firstimage" src="photos/welding.jpg">
					<img class="secondimage" src="photos/drone.jpg" style="width: 0px;">
					<img class="thirdimage" src="photos/skyline3.jpg" style="width: 0px;">
					<div class="section1body" style="position: absolute; font-size: 32px">
						Your source for custom
					</div>
				</div>
-->
				<div class="section1">
					<div class="sectionheader" style="font-weight: 550;margin-top: 700px;">
						For all your visual marketing needs
					</div>
					<div class="sectionbreakquote">
						Some stuff that explains why Imperial is different, and why the customer should choose your company. "Imperial doesn't believe in cutting corners, and every solution should be tailor made for our partner's needs."
					</div>
					<div class="sectionheader" style="font-size: 1.4em;">
						Custom display & fixtures, in any material
					</div>
					<div class="section1icons">
						<img src="photos/i-beam.svg">
						<img src="photos/509114.svg">
						<img src="photos/tube.svg">
						<img src="photos/log.svg">
						<p>Metal</p>
						<p>Wire</p>
						<p>Tubing</p>
						<p>Wood</p>
					</div>
					<div class="section1button">
						<a href="services.php">
							Services / Capabilities >
						</a>
					</div>
				</div>

				<div class="section4">
					<div class="sectionheader" style="grid-row: 1;grid-column: 1 / span all; padding: 0">
						Endless Possibilities
					</div>
					<div class="possibility" style="grid-column: 1">
						<img src="photos/wiregridbackground.jpg">
						<p class="materialname"> Wire </p>
					</div>
					<div class="possibility" style="grid-column: 2">
						<img src="photos/woodbackground2.png">
						<p class="materialname"> Wood </p>	
					</div>
					<div class="possibility" style="grid-column: 3;">
						<img src="photos/steelbackground.jpg">
						<p class="materialname"> Steel </p>	
					</div>		
					<div class="possibility" style="grid-column: 4">
						<img src="photos/acrylicbackground2.webp">
						<p class="materialname"> Acrylic </p>
					</div>
					<div class="possibility" style="grid-column: 5">
						<img src="photos/aluminumbackground.jpg">
						<p class="materialname"> Aluminum </p>	
					</div>
					<div class="section4button">
						<a href="gallery.php">
							Gallery >
						</a>
					</div>
				</div>
<!--
				<div class="section15">
					<div class="section15item" style="grid-column: 1;grid-row: 1">
						<img src="photos/section15pop.jpg">
						<div class="section15itemname">
							Services / Capabilities
						</div>
					</div>
					<div class="section15item" style="grid-column: 2;grid-row: 1">
						<img src="photos/section15wholesale.png">
						<div class="section15itemname">
							Wholesale
						</div>
					</div>
					<div class="section15item" style="grid-column: 2;grid-row: 2">
						<img src="photos/section15consultation.png">
						<div class="section15itemname">
							Full service consultation
						</div>
					</div>
					<div class="section15item" style="grid-column: 1;grid-row: 2">
						<img src="photos/section15prototyping.jpeg">
						<div class="section15itemname">
							Gallery
						</div>
					</div>
				</div>
-->
				<div class="section2">
					<div class="sectionheader" style="padding:0;grid-column:1;">
						Who we are
					</div>
					<div style="border-bottom: 2px solid var(--acc-color);width: 100px;height: 0px; grid-row: 1; grid-column:1;justify-self: center; align-self: end">
					</div>
					<div class="section2body">
						<p>We saw a need that was not being met within the retail environments world by other design, fixture and graphic organizations.</p>
						<p>Marketing managers, brand managers, merchandising managers and visual merchandisers often lack an experienced team within their own organizations. We're here to solve that.</p>
					</div>
					<div class="section2button">
						<a href="about.php">
							Learn more about us >
						</a>
					</div>
				</div>
<!--
				<div class="section3">
					<div class="section3left">
						<div class="section3leftheader">
							Capabilities
						</div>
						<div class="section3leftbody">
							<div style="grid-column: 1; grid-row: 1;">
								Laser Cutting and Engraving
							</div>
							<div style="grid-column: 1; grid-row: 2;">
								CNC Robotic Welding
							</div>
							<div style="grid-column: 1; grid-row: 3;">
								Tube and Wire Bending
							</div>
							<div style="grid-column: 1; grid-row: 4;">
								CNC Press Brake
							</div>
							<div style="grid-column: 1; grid-row: 5;">
								CNC Spot Welding
							</div>
							<div style="grid-column: 2; grid-row: 1;">
								Robotic/TIG/MIG Welding
							</div>
							<div style="grid-column: 2; grid-row: 2;">
								3D CAD Solidworks
							</div>
							<div style="grid-column: 2; grid-row: 3;">
								3D Engraving and Etching
							</div>
							<div style="grid-column: 2; grid-row: 4;">
								Powder Coating
							</div>
							<div style="grid-column: 2; grid-row: 5;">
								Boxing and Packaging
							</div>
						</div>
					</div>
					<div class="section3right">
						<div class="section3rightheader">
							Services
						</div>
						<div class="section3rightbody">
							<div style="grid-row: 1;">
								Full design capabilities
							</div>
							<div style="grid-row: 2;">
								Reviewing prints and specs
							</div>
							<div style="grid-row: 3;">
								Prototyping
							</div>
							<div style="grid-row: 4;">
								Advising on cost saving measures
							</div>
							<div style="grid-row: 5;">
								Expert packaging
							</div>
							<div style="grid-row: 6;">
								Special shipping requirements
							</div>
						</div>
					</div>
				</div>
-->
				<div class="section5">
					<div class="sectionheader" style= "grid-column: 1 / span 6;	border-bottom: 1px solid var(--acc-color); width: 25%;justify-self: center; padding: 10px 0;">
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
				<?php include("footer.php");?>
				<script>
					<?php include("javascript.php");?>

					function logKey(e) {

				    	var scroll = $(window).scrollTop();

					    if (scroll > 200) {
					    	$('.toggle').addClass("small");
					    }

					    if (scroll <= 200) {
					    	$('.toggle').removeClass("small");
					    }
					};

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


					$('.posibility').mouseover(function() {
						$('.materialname', this).css("opacity", ".6")
					})

					$('.posibility').mouseleave(function() {
						$('.materialname', this).css("opacity", "0")
					})

					$('.section15item').mouseover(function() {
						$('.section15itemname', this)
							.css("text-shadow", "1px 1px 5px var(--main-shadow")
							.css("color", "var(--alt-txt-color")
					})

					$('.section15item').mouseleave(function() {
						$('.section15itemname', this)
							.css("text-shadow", "1px 1px 5px transparent")
							.css("color", "var(--main-txt-color")
					})

					$('.scrolldivarrows').click(function() {
						$(window).scrollTop(725);
					})

				</script>
			</footer>
		</div>
	</body>
</html>