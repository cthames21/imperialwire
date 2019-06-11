<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="contact.css">		
		<link rel="stylesheet" type="text/css" href="fonts/helveticaneue.css">
		<script src="jquery.js"></script>
		<script src="parallax.js"></script>
	</head>
	<body>
		<div class="page-container">
			<header class="toggle">
				<?php require('header.php');?>
			</header>
			<main>
				<div class="letstalk">
					Let's Talk
				</div>
				<div class="letstalkbody">
					<p>Have any questions about our services, how to place an order, or need a quote?<br>
					Email us today: sales@imperialwire.com</p>
				</div>
				<div class="footertop" style="background: none;border-bottom: 1px solid var(--acc-color);margin:0 5%;width: 90%;">
					<div class="footertop1">
						<div class="footertop1header">
							Hours
						</div>
						<div class="footertop1body">
							​Weekdays / 8AM – 4PM
							<br>
							Saturday & Sunday / Closed
						</div>
					</div>
					<div class="footertop2">
						<div class="footertop2header" style="text-align: center">
							Headquarters
						</div>
						<div class="footertop2body" style="text-align: center">
							21050 Commerce Blvd
							<br>
							Rogers, MN 55374
						</div>
					</div>
					<div class="footertop3">
						<div class="footertop3header" style="text-align: right">
							Contact
						</div>
						<div class="footertop3body" style="text-align: right">
							763-391-7798
							<br>
							billybob@impwire.com
						</div>
					</div>
				</div>
				<div class="contactcontainer">
					<div class="name">
						Name
					</div>
					<div class="phone">
						Phone
					</div>
					<div class="email">
						Email
					</div>
					<div class="message">
						Message
					</div>
					<input class="namefield">

					</input>
					<input class="phonefield">

					</input>
					<input class="emailfield">

					</input>
					<textarea class="messagefield">

					</textarea>
					<button class="send">
						Send
					</button>
				</div>
				<div class="customerquote">
					<p><span style="color: var(--acc-color);font-size: 1.5em;">"</span>
					Imperial is super great and awesome and they built the bestest display for my merchandise. I love their impecable eye for detail and ensuring the entire structure is at the highest quality. 100% recommend for all of your fixture needs!
					<span style="color: var(--acc-color);font-size: 2em;">"</span></p>
					<p style="position: absolute;bottom: 0;padding: 0;margin:10px 60%"><span style="color: var(--acc-color);font-size: 2em;">-</span>Stacy</p>
				</div>
			</main>
			<footer>
				<?php require("footer.php");?>	
				<script>
					<?php require("javascript.php");?>	

					$(document).ready(function() {
						$('.toggle').toggleClass("small")
						$('.send').click(function() {
							$('.send').html("Sent!")
						})
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

				</script>
			</footer>
		</div>
	</body>
</html>