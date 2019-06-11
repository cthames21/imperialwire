<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="services.css">
		<link rel="stylesheet" type="text/css" href="fonts/helveticaneue.css">
		<script src="jquery.js"></script>
		<script src="parallax.js"></script>
	</head>
	<body>
		<div class="page-container">
			<header class="toggle">
				<?php include("header.php");?>
			</header>
			<main>
				<div class="sectionbreak">
					Design 
					<span style="color: var(--acc-color);padding:0 15px;"> - </span>
					Create
					<span style="color: var(--acc-color);padding:0 15px;"> - </span>
					Innovate
				</div>
				<div class="servicescapabilities">
					<div class="servicescapabilities1left">
						<div class="servicescapabilitiesheaderleft">
							Services
						</div>
						<div class="servicescapabilitiesbodyleft">
							<li class="left">Full design capabilities</li>
							<li class="left">Cost savings advice</li>
							<li class="left">Reviewing prints and specs</li>
							<li class="left">Prototyping</li>
							<li class="left">Implementation</li>
							<li class="left">Special packaging and labeling</li>
							<li class="left">Special shipping requirements</li>
						</div>
					</div>
					<div class="servicescapabilities1right">
						<div class="servicescapabilitiesheaderright">
							Capabilities
						</div>
						<div class="servicescapabilitiesbodyright">
							<li class="right">Laser Cutting and Engraving</li>
							<li class="right">CNC Robotic Welding</li>
							<li class="right">Tube and Wire Bending</li>
							<li class="right">CNC Press Brake</li>
							<li class="right">CNC Spot Welding</li>
							<li class="right">Robotic/TIG/MIG Welding</li>
							<li class="right">3D CAD Solidworks</li>
							<li class="right">3D Engraving and Etching</li>
							<li class="right">Powder Coating</li>
							<li class="right">Boxing and Packaging</li>
							<li class="right">Drop Shipments</li>
						</div>
					</div>
					<div class="servicesexpand">
						<div class="expanditem" id="fulldesign">
							<img src="photos/lasercutting.jpg" />
							<h2>Full design capabilities</h2>
							<p>Laser cutting is used to</p>
						</div>
						<div class="expanditem" id="costsaving">
							<img src="photos/cncwelding.jpg" />
							<h2>Cost saving advice</h2>
							<p>Laser cutting is used to</p>
						</div>
						<div class="expanditem" id="reviewingprints">
							<img src="photos/tubebending.jpg" />
							<h2>Reviewing prings and specs</h2>
							<p>Laser cutting is used to</p>
						</div>
					</div>
					<div class="capabilitiesexpand">
						<div class="expanditem" id="lasercutting">
							<img src="photos/lasercutting.jpg" />
							<h2>Laser cutting</h2>
							<p>Laser cutting is used to</p>
						</div>
						<div class="expanditem" id="cncwelding">
							<img src="photos/cncwelding.jpg" />
							<h2>CNC Robitc Welding</h2>
							<p>Laser cutting is used to</p>
						</div>
						<div class="expanditem" id="tubebending">
							<img src="photos/tubebending.jpg" />
							<h2>Tube and Wire Beinding</h2>
							<p>Laser cutting is used to</p>
						</div>
					</div>
					<div class="materialscontainer">
						<div class="selectmaterial">
							Select a material to see what's possible
						</div>

						<div class="materials">
							<div class="material1">
								<div id="wood" class="materialname">
									Wood
								</div>
								<img src="photos/log.svg" style="width:80px;height:80px">
							</div>
							<div class="material2">
								<img src="photos/i-beam.svg" style="width:80px;height:80px">
								<div id="metal" class="materialname">
									Metal
								</div>
							</div>
							<div class="material3">
								<img src="photos/509114.svg" style="width:80px;height:80px">
								<div id="wirematerial" class="materialname">
									Wire
								</div>
							</div>
							<div class="material4">
								<img src="photos/tube.svg" style="width:80px;height:80px">
								<div id="tubing" class="materialname">
									Tubing
								</div>
							</div>
						</div>
						<div class="display">
							<div class="materialnodisplay">
								Let us make a custom fixture for you!
							</div>					
							<div class="material1display">
								<div class="materialdisplayheader">
									Wood
								</div>
							</div>
							<div class="material2display">
								<div class="materialdisplayheader">
									Metal
								</div>
							</div>
							<div class="material3display">
								<div class="materialdisplayheader">
									Wire
								</div>
							</div>
							<div class="material4display">
								<div class="materialdisplayheader">
									Tubing
								</div>
							</div>			
						</div>
					</div>
				</div>


				<div class="process">
					<div class="processheader">
						Our Process
					</div>
					<div class="steps">
						<div id="number1" class="number" style="grid-column: 1 / span 2; grid-row: 1;">
							<img src="numberone.svg">
						</div>
						<div id="details1" class="details" style="grid-column: 1 / span 2;">
							When we engage with our clients on a new project it usually starts like this: "Team Gravity, can you stop by tomorrow for a quick meeting? I've got something I need your help with."  This typical scenario plays out every week at Gravity. Our approach to it, however, is not typical.
						</div>
						<div id="step1left">
						<div id="lefthand" class="toggle"></div>
						</div>
						<div id="step1right">
							<div class="image">
								<!--<img src="photos/meeting.webp">-->
							</div>
							<div id="righthand" class="toggle"></div>
						</div>


						<div id="step2left">
							<div class="drawing">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="350px" width="350px" viewBox="0 0 490 490"xml:space="preserve">
									<g>
										<g>
											<g>
												<path stroke-width="8" stroke="var(--bg-color)" fill="var(--acc-color)" d="M429.976,90c-0.001-2.601-0.993-5.159-2.905-7.071l-80-80c-1.912-1.913-4.469-2.904-7.071-2.905V0H70
													c-5.522,0-10,4.477-10,10v470c0,5.523,4.478,10,10,10h350c5.522,0,10-4.477,10-10V90H429.976z M350,34.142L395.857,80H350V34.142
													z M410,470H80V20h250v70c0,5.523,4.478,10,10,10h70V470z"/>
												<path class="path" stroke="var(--acc-color)" fill="transparent" stroke-width="4" stroke-miterlimit="10" d="M260,187.038V190c0,56.349-23.208,96.94-68.979,120.645c-35.059,18.156-70.926,19.349-71.284,19.358L120,340l0.25,9.997
													c1.624-0.041,40.229-1.225,79.311-21.254C236.257,309.937,280,270.6,280,190v-2.962l23.415,20.488l13.17-15.052l-40-35
													c-3.77-3.299-9.4-3.299-13.17,0l-40,35l13.17,15.052L260,187.038z"/>
												<path class="path" stroke="var(--acc-color)" fill="transparent" stroke-width="4" stroke-miterlimit="10"  d="M270,135c22.056,0,40-17.944,40-40c0-22.056-17.944-40-40-40c-22.056,0-40,17.944-40,40C230,117.056,247.944,135,270,135"/>
												<polygon class="path" stroke="var(--acc-color)" fill="transparent" stroke-width="4" stroke-miterlimit="10" points="147.071,202.929 132.929,217.071 155.857,240 132.929,262.929 147.071,277.071 170,254.143 192.929,277.071 
													207.071,262.929 184.143,240 207.071,217.071 192.929,202.929 170,225.857 			"/>
												<polygon class="path" stroke="var(--acc-color)" fill="transparent" stroke-width="4" stroke-miterlimit="10"points="302.071,262.929 287.929,277.071 310.857,300 287.929,322.929 302.071,337.071 325,314.143 347.929,337.071 
													362.071,322.929 339.143,300 362.071,277.071 347.929,262.929 325,285.857 			"/>
												<rect fill="transparent" stroke="var(--acc-color)" stroke-width="4" x="105" y="40" width="80" height="20"/>
												<rect fill="transparent" stroke="var(--acc-color)" stroke-width="4" x="105" y="80" width="50" height="20"/>
												<rect fill="transparent" stroke="var(--acc-color)" stroke-width="4" x="115" y="380" width="50" height="20"/>
												<rect fill="transparent" stroke="var(--acc-color)" stroke-width="4" x="115" y="420" width="210" height="20"/>
												<rect fill="transparent" stroke="var(--acc-color)" stroke-width="4" x="185" y="380" width="50" height="20"/>
												<rect fill="transparent" stroke="var(--acc-color)" stroke-width="4" x="255" y="380" width="50" height="20"/>
												<rect fill="transparent" stroke="var(--acc-color)" stroke-width="4" x="325" y="380" width="50" height="20"/>
											</g>
										</g>
									</g>
								</svg>
							</div>
						</div>
						<div id="step2right">
							<div id="number2" class="number">
								<img src="numbertwo.svg">
							</div>
							<div id="details2" class="details">
								Our engineers develop a CAD osfjnoaiuwrjtsf
							</div>
						</div>


						<div id="number3" class="number">
							<img src="numberthree.svg">
						</div>
						<div id="details3" class="details">
							Test
						</div>
						<div id="step3left">
							<div class="image">
								<img src="photos/meeting.webp" style="width=:auto; height:500px; padding-right:180px">
							</div>
						</div>
						<div id="step3right">
							<div class="image">
								<img src="photos/collaborating.png">
								<img src="photos/ipad.jpg">
							</div>
						</div>


						<div id="step4left">
							<div class="image">
							</div>
						</div>
						<div id="step4right">
							<div id="number4" class="number">
								<img src="numberfour.svg">
							</div>
							<div id="details4" class="details">
								QA and followup
							</div>
						</div>
					</div>
				</div>
			</main>
			<footer>
				<?php include("footer.php");?>	

				<script>
					<?php include("javascript.php");?>	

					$(window).on("load", function() {
						$('div [class^="servicescapabilitiesbody"] li:nth-child(1)').show(100)
						$('div [class^="servicescapabilitiesbody"] li:nth-child(2)').show(300)
						$('div [class^="servicescapabilitiesbody"] li:nth-child(3)').show(500)
						$('div [class^="servicescapabilitiesbody"]  li:nth-child(4)').show(700)
						$('div [class^="servicescapabilitiesbody"]  li:nth-child(5)').show(900)
						$('div [class^="servicescapabilitiesbody"]  li:nth-child(6)').show(1100)
						$('div [class^="servicescapabilitiesbody"]  li:nth-child(7)').show(1300)
						$('div [class^="servicescapabilitiesbody"]  li:nth-child(8)').show(1500)
						$('div [class^="servicescapabilitiesbody"]  li:nth-child(9)').show(1700)
						$('div [class^="servicescapabilitiesbody"]  li:nth-child(10)').show(1900)
						$('div [class^="servicescapabilitiesbody"]  li:nth-child(11)').show(2100)
					})

					$(document).ready(function() {
						$('.toggle').toggleClass("small")

						$('.material1').click(function() {
							$('.material1display').show()
							$('.material2display').css("display","none")
							$('.material3display').css("display","none")
							$('.material4display').css("display","none")
							$('.materialnodisplay').css("display","none")
						})
						$('.material2').click(function() {
							$('.material1display').css("display","none")
							$('.material2display').show()
							$('.material3display').css("display","none")
							$('.material4display').css("display","none")
							$('.materialnodisplay').css("display","none")
						})
						$('.material3').click(function() {
							$('.material1display').css("display","none")
							$('.material2display').css("display","none")
							$('.material3display').show()
							$('.material4display').css("display","none")
							$('.materialnodisplay').css("display","none")
						})
						$('.material4').click(function() {
							$('.material1display').css("display","none")
							$('.material2display').css("display","none")
							$('.material3display').css("display","none")
							$('.material4display').show()
							$('.materialnodisplay').css("display","none")
						})
						$('.material1').on("mouseover", function() {
							$('#wood').show()
						})
							$('.material1').on("mouseleave", function() {
							$('#wood').hide()
						})

						$('.material2').on("mouseover", function() {
							$('#metal').show()
						})
							$('.material2').on("mouseleave", function() {
							$('#metal').hide()
						})

						$('.material3').on("mouseover", function() {
							$('#wirematerial').show()
						})
							$('.material3').on("mouseleave", function() {
							$('#wirematerial').hide()
						})

						$('.material4').on("mouseover", function() {
							$('#tubing').show()
						})
							$('.material4').on("mouseleave", function() {
							$('#tubing').hide()
						})


						$('.servicescapabilitiesbodyright li:nth-child(1)').on("mouseover", function() {
							$('.capabilitiesexpand').show()
							$('#lasercutting').show()
						})
						$('.servicescapabilitiesbodyright li:nth-child(1)').on("mouseleave", function() {
							$('.capabilitiesexpand').hide()
							$('#lasercutting').hide()
						})
						$('.servicescapabilitiesbodyright li:nth-child(2)').on("mouseover", function() {
							$('.capabilitiesexpand').show()
							$('#cncwelding').show()
						})
						$('.servicescapabilitiesbodyright li:nth-child(2)').on("mouseleave", function() {
							$('.capabilitiesexpand').hide()
							$('#cncwelding').hide()
						})
						$('.servicescapabilitiesbodyright li:nth-child(3)').on("mouseover", function() {
							$('.capabilitiesexpand').show()
							$('#tubebending').show()
						})
						$('.servicescapabilitiesbodyright li:nth-child(3)').on("mouseleave", function() {
							$('.capabilitiesexpand').hide()
							$('#tubebending').hide()
						})

						$('.servicescapabilitiesbodyleft li:nth-child(1)').on("mouseover", function() {
							$('.servicesexpand').show()
							$('#fulldesign').show()
						})
						$('.servicescapabilitiesbodyleft li:nth-child(1)').on("mouseleave", function() {
							$('.servicesexpand').hide()
							$('#fulldesign').hide()
						})
						$('.servicescapabilitiesbodyleft li:nth-child(2)').on("mouseover", function() {
							$('.servicesexpand').show()
							$('#costsaving').show()
						})
						$('.servicescapabilitiesbodyleft li:nth-child(2)').on("mouseleave", function() {
							$('.servicesexpand').hide()
							$('#costsaving').hide()
						})
						$('.servicescapabilitiesbodyleft li:nth-child(3)').on("mouseover", function() {
							$('.servicesexpand').show()
							$('#reviewingprints').show()
						})
						$('.servicescapabilitiesbodyleft li:nth-child(3)').on("mouseleave", function() {
							$('.servicesexpand').hide()
							$('#reviewingprints').hide()
						})
					})

					$(window).on("scroll touchmove", function() {
						$('#scrolldiv').toggleClass("scroll", $(document).scrollTop() > 100);
						$('#step1left').toggleClass("slide", $(document).scrollTop() > 100);
						$('#step1right').toggleClass("slide", $(document).scrollTop() > 100);
						$('#number1').toggleClass("show", $(document).scrollTop() > 100)
						$('#details1').toggleClass("show", $(document).scrollTop() > 100)

						$('#step2left').toggleClass("slide", $(document).scrollTop() > 250);
						$('#number2').toggleClass("show", $(document).scrollTop() > 250);
						$('#details2').toggleClass("show", $(document).scrollTop() > 250);
						$('.drawing').toggleClass("show", $(document).scrollTop() > 250);
						$('#step2right').toggleClass("slide", $(document).scrollTop() > 350);

						$('#number3').toggleClass("show", $(document).scrollTop() > 600);
						$('#details3').toggleClass("show", $(document).scrollTop() > 600);
						$('#step3left').toggleClass("slide", $(document).scrollTop() > 600);
						$('#step3right').toggleClass("slide", $(document).scrollTop() > 600);
						$('#step4left').toggleClass("slide", $(document).scrollTop() > 850);
						$('#step4right').toggleClass("slide", $(document).scrollTop() > 850);
					});

				</script>
			</footer>
		</div>
	</body>
</html>














