<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="contact.css">
		<script src="jquery.js"></script>
		<script src="parallax.js"></script>
	</head>
	<body>
		<div class="page-container">
			<header class="toggle">
				<?php require('header.php');?>
			</header>
			<main>
				<div class="contactcontainer">
					<div class="sectionbreakquote" style="height: 70px;margin-top:-100px;font-size: 2.5em;position: absolute;">
					Drop us a line
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