<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="jquery.js"></script>
		<script src="parallax.js"></script>
		<style>
			:root {
				--bg-color: var(--color-3);
				--color-0: rgb(220,237,237);
				--color-1: #64757F;
				--color-2: #485B64;
				--color-3: #314049;
				--color-4: #1D2E38;
				--color-5: #10242F;
				--main-txt-color: var(--color-0);
				--sec-txt-color: var(--color-3);
				--main-shadow: var(--color-3);
				--sec-shadow: var(--color-1);
			}

			body {
				background-color: var(--bg-color);
				margin:0;
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
				font-size: 2.5em;
				padding: 30px 0;
				text-align: center;
				align-self: center;
				color: var(--main-txt-color);
				z-index: 1;
				text-shadow: 0 1px 2px var(--main-shadow)
			}

			.line {
				display: inline-block;
				width: 40px;
				height: 2px;
				margin:10px;
				background-color: var(--main-txt-color);
				align-self: center;
			}


			.section15 {
				display: grid;
				grid-template-columns: repeat(2, 1fr);
				grid-template-rows: repeat(2, 1fr);
				background-color: var(--color-0);
				width: 100%;
				height: 400px;
				margin-top: 120px;
			}

			.section15item {
				width: 100%;
				height: 100%;
				opacity: .7;
			}

			.section15item:hover {
				opacity: 1;
				color: var(--main-txt-color);
				box-shadow: -5px 5px 15px 0px var(--sec-shadow), 5px -5px 15px 0px var(--sec-shadow);
				cursor: pointer;
			}

			.section15itemname {
				align-items: center;
				text-align: center;
				margin-top: 70px;
				font-size: 2.5em;
			}

			.section2 {
				display: grid;
				background-color: var(--color-1);
				width: 95%;
				height: 350px;
				grid-template-rows: 20% 80%;
				grid-template-columns: 45% 55%;
				margin-top: 190px;
			}

			.section2photo {
				grid-column: 1;
				grid-row: 1 /span 2;
				align-self: center;
			}

			.section2photo img {
				width: 95%;
				height: auto;
				margin: 0 5%;
				box-shadow: -10px 7px 10px 0px var(--main-shadow);
			}

			.section2body {
				grid-column: 2;
				grid-row: 2;
				width: 95%;
				font-size: 1.25em;
				text-align: center;
				justify-self: center;
			}

			.section2body p {
				width: 95%;
				padding: 10px 0;
				line-height: 35px;
				color: var(--main-txt-color);
			}

			.section3left {
				display: grid;
				grid-column: 1;
				grid-template-columns: 100%;
				grid-template-rows: 20% 80%;
				width: 80%;
				height: 450px;
				margin-top: 130px;
			}

			.section3leftheader {
				position: absolute;
				grid-row: 1;
				grid-column: 1;
				font-size: 4em;
				width: 80vw;
				height: 40px;
				text-align: center;
				color: var(--main-txt-color);
				background-color: var(--color-1);
			}

			.section3leftbody {
				display: grid;
				height: 95%;
				width: 100%;
				text-align: center;
				grid-template-columns: repeat(2, 50%);
				grid-template-rows: repeat(5,20%);
				grid-row: 2;
				font-size: 1.8em;
				color: var(--main-txt-color);
			}

			.section3right {
				display: grid;
				grid-column: 2;
				grid-template-columns: 100%;
				grid-template-rows: 20% 80%;
				width: 80%;
				height: 500px;
				margin-top: 50px;
				margin-left: 20%;
			}

			.section3rightheader {
				position: absolute;
				grid-row: 1;
				grid-column: 2;
				font-size: 4em;
				width: 80vw;
				height: 40px;
				right:0;
				text-align: center;
				color: var(--main-txt-color);
				background-color: var(--color-1);
			}

			.section3rightbody {
				display: grid;
				height: 95%;
				width: 100%;
				text-align: center;
				grid-template-columns: 100%;
				grid-template-rows: repeat(6,1fr);
				grid-row: 2;
				font-size: 1.8em;
				color: var(--main-txt-color);
			}


			.section3rightbody div,.section3leftbody div {
				display: flex;
				justify-content: center;
				align-items: center;
				transition: .4s;

			}

			.section3rightbody div:hover,.section3leftbody div:hover {
				background-color: var(--color-1);
				color: var(--sec-txt-color);
				transition: .4s;
				cursor: pointer;
			}

			.section4 {
				display: grid;
				width: 100%;
				height: 800px;
				margin-top: 150px;
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
				opacity: .7;	
			}

			.section4 img:hover {
				opacity: .95;
				cursor: pointer;
			}

			.materialname {
				display: flex;
				position: relative;
				width: 100%;
				height: 80px;
				justify-content: center;
				align-items: center;
				margin-top: 150px;
				font-size: 3em;
				font-weight: bold;
				bottom: 0;				
				color: var(--sec-txt-color);
				background-color: var(--color-0);
				opacity: 0;
				pointer-events: none;
				transition: .5s;
			}

			.section5 {
				display: grid;
				width: 100%;
				height: 350px;
				margin-top: 90px;
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
				opacity: .8;
				transition: .5s;
			}


		</style>
	</head>
	<body>
		<header>
			<?php require("header.php") ?>
		</header>
		<main style="padding-top:230px">
			<div class="section1">
				<div class="sectionheader" style="position: absolute; font-size: 4em; grid-row:1 / span 2; width:100%;margin-top:50px;text-shadow: 0 3px 5px var(--main-shadow);background-color: rgba(220,237,237,.3)">
					Point of Purchase Displays
				</div>
				<img class="firstimage" src="photos/welding.jpg">
				<img class="secondimage" src="photos/drone.jpg" style="width: 0px;">
				<img class="thirdimage" src="photos/skyline3.jpg" style="width: 0px;">
				<div class="section1body" style="position: absolute; font-size: 32px">
					Your source for custom
				</div>
			</div>

			<div class="section15">
				<div class="section15item" style="background-color: var(--color-2); grid-column: 1;grid-row: 1">
					<div class="section15itemname">
						POP Display
					</div>
				</div>
				<div class="section15item" style="background-color: var(--color-3); grid-column: 2;grid-row: 1">
					<div class="section15itemname">
						Wholesale
					</div>
				</div>
				<div class="section15item" style="background-color: var(--color-2); grid-column: 2;grid-row: 2">
					<div class="section15itemname">
						Full service consultation
					</div>
				</div>
				<div class="section15item" style="background-color: var(--color-4); grid-column: 1;grid-row: 2">
					<div class="section15itemname">
						Gallery
					</div>
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

				</div>
			</div>
			

			<div class="section4">
				<div class="sectionheader" style="width: 100%;grid-column: 1 / span 3;grid-row: 1 / span 2; color: var(--main-txt-color);font-size: 7em;text-shadow: 0px 1px 25px white; pointer-events: none;">
					Endless Possibilities
				</div>
				<div class="posibility" style="grid-column: 1;grid-row: 1;">
					<img src="photos/steelbackground.jpg">
					<p class="materialname"> Steel </p>	
				</div>				
				<div class="posibility" style="grid-column: 2;grid-row: 1;">
					<img src="photos/woodbackground2.jpg">
					<p class="materialname"> Wood </p>	
				</div>
				<div class="posibility" style="grid-column: 3;grid-row: 1;">
					<img src="photos/compositebackground.jpg">
					<p class="materialname"> Composite </p>
				</div>	
				<div class="posibility" style="grid-column: 1;grid-row: 2;">
					<img src="photos/wiregridbackground.jpg">
					<p class="materialname"> Wire </p>
				</div>		
				<div class="posibility" style="grid-column: 2;grid-row: 2;">
					<img src="photos/acrylicbackground2.webp">
					<p class="materialname"> Acrylic </p>
				</div>
				<div class="posibility" style="grid-column: 3;grid-row: 2;">
					<img src="photos/aluminumbackground.jpg">
					<p class="materialname"> Aluminum </p>	
				</div>
			</div>

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


			</script>
		</footer>
	</body>
</html>









