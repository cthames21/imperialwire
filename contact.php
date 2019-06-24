<!DOCTYPE html>
<html>
	<head>
		<title>Imperial Wire - Contact</title>
		<meta charset="UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="C. S. Thames">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="contact.css">		
		<link rel="stylesheet" type="text/css" href="fonts/helveticaneue.css">
		<script src="jquery.js"></script>
		<script src="parallax.js"></script>
	</head>
	<body>
		<header>
			<?php include('header.php');?>
		</header>
		<main class="contained">
			<h1 style="text-align: center;">
				Let's Talk
			</h1>
			<div class="h1body" style="text-align: center;padding: 0">
				<p>Questions about our services, how to place an order, or need a quote?<br>
				Email us today: sales@iwdisplay.com</p>
			</div>
			<div class="footertop" style="background: none;width: 90%;margin: 50px 5% 0px; height: 90%">
				<div class="footertop1">
					<div class="footertop1header" style="text-align: left;">
						Hours
					</div>
					<div class="footertop1body">
						​
					</div>
				</div>
				<div class="footertop2">
					<div class="footertop2header">
						Address
					</div>
					<div class="footertop2body">
						21050 Commerce Blvd
						<br>
						Rogers, MN 55374
					</div>
				</div>
				<div class="footertop3">
					<div class="footertop3header" style="text-align: right;">
						Contact
					</div>
					<div class="footertop3body">
						763-391-7798
						<br>
						billybob@iwdisplay.com
					</div>
				</div>
			</div>
			<div class="contactcontainer">
				<div class="contactheader">
					Send us a message
				</div>
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
				<p><span style="color: var(--acc-color2-alt);font-size: 1.5em;padding:0 10px">"</span>
				Imperial is super great and awesome and they built the bestest display for my merchandise. I love their impecable eye for detail and ensuring the entire structure is at the highest quality. 100% recommend for all of your fixture needs!
				<span style="color: var(--acc-color2-alt);font-size: 2em;">"</span></p>
				<p style="position: absolute;bottom: 0;padding: 0;margin:10px 60%"><span style="color: var(--acc-color2-alt);font-size: 2em;">-</span>Stacy</p>
			</div>
		</main>
		<footer>
			<?php include("footer.php");?>	
			<script>
				<?php include("javascript.php");?>	

				$(document).ready(function() {
					$('.send').click(function() {
						$('.send').html("Sent!")
					})
				})


				function shrinkHeader(e) {

					var scroll = $(window).scrollTop();

					if (scroll > 50 && $(window).width() > 620) {
						$('#headermain').css("box-shadow", "0 0 3px 0 var(--color-4)");
					}

					if (scroll <= 50) {
						$('#headermain').css("box-shadow", "none");
						$('#headermain').css("background", "transparent");

					}
				}

				function logKey(e) {

				}

			</script>
		</footer>
	</body>
</html>