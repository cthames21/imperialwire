<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="howitworks.css">
		<link rel="stylesheet" type="text/css" href="fonts/helveticaneue.css">
		<script src="jquery.js"></script>
		<script src="parallax.js"></script>
	</head>
	<body>
		<div class="page-container">
			<header class="toggle">
				<?php include('header.php');?>
			</header>
			<main>
				<div style="height: 600px">
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
												<path stroke-width="8" stroke="white" d="M429.976,90c-0.001-2.601-0.993-5.159-2.905-7.071l-80-80c-1.912-1.913-4.469-2.904-7.071-2.905V0H70
													c-5.522,0-10,4.477-10,10v470c0,5.523,4.478,10,10,10h350c5.522,0,10-4.477,10-10V90H429.976z M350,34.142L395.857,80H350V34.142
													z M410,470H80V20h250v70c0,5.523,4.478,10,10,10h70V470z"/>
												<path class="path" stroke="#000000" fill="transparent" stroke-width="8" stroke-miterlimit="10" d="M260,187.038V190c0,56.349-23.208,96.94-68.979,120.645c-35.059,18.156-70.926,19.349-71.284,19.358L120,340l0.25,9.997
													c1.624-0.041,40.229-1.225,79.311-21.254C236.257,309.937,280,270.6,280,190v-2.962l23.415,20.488l13.17-15.052l-40-35
													c-3.77-3.299-9.4-3.299-13.17,0l-40,35l13.17,15.052L260,187.038z"/>
												<path class="path" stroke="#000000" fill="transparent" stroke-width="8" stroke-miterlimit="10"  d="M270,135c22.056,0,40-17.944,40-40c0-22.056-17.944-40-40-40c-22.056,0-40,17.944-40,40C230,117.056,247.944,135,270,135"/>
												<polygon class="path" stroke="#000000" fill="transparent" stroke-width="8" stroke-miterlimit="10" points="147.071,202.929 132.929,217.071 155.857,240 132.929,262.929 147.071,277.071 170,254.143 192.929,277.071 
													207.071,262.929 184.143,240 207.071,217.071 192.929,202.929 170,225.857 			"/>
												<polygon class="path" stroke="#000000" fill="transparent" stroke-width="8" stroke-miterlimit="10"points="302.071,262.929 287.929,277.071 310.857,300 287.929,322.929 302.071,337.071 325,314.143 347.929,337.071 
													362.071,322.929 339.143,300 362.071,277.071 347.929,262.929 325,285.857 			"/>
												<rect fill="transparent" stroke="black" stroke-width="8" x="105" y="40" width="80" height="20"/>
												<rect fill="transparent" stroke="black" stroke-width="8" x="105" y="80" width="50" height="20"/>
												<rect fill="transparent" stroke="black" stroke-width="8" x="115" y="380" width="50" height="20"/>
												<rect fill="transparent" stroke="black" stroke-width="8" x="115" y="420" width="210" height="20"/>
												<rect fill="transparent" stroke="black" stroke-width="8" x="185" y="380" width="50" height="20"/>
												<rect fill="transparent" stroke="black" stroke-width="8" x="255" y="380" width="50" height="20"/>
												<rect fill="transparent" stroke="black" stroke-width="8" x="325" y="380" width="50" height="20"/>
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
							</div>
						</div>


						<div id="step4left">
							<div class="image">
								<img src="photos/ipad.jpg">
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

					$(document).ready(function() {
						$('.toggle').toggleClass("small")
					})

					document.addEventListener('mousemove', logKey);
					document.addEventListener('wheel', logKey);

					function logKey(e) {
						if ($(window).scrollTop() < 5) {
							$('.linkbar').css("height","25px")
						}
						else if (event.clientY < (window.innerHeight)/3) {
							$('.linkbar').css("height","25px")
						}
						else if (event.clientY > (window.innerHeight)/3) {
							$('.linkbar').css("height","0px")
						}
					}

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