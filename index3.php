<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="main.css">
		<script src="jquery.js"></script>
		<script src="parallax.js"></script>
	</head>
	<body>
		<div class="page-container">
			<header class="toggle">
				<?php require("header.php");?>
			</header>
			<a href="services.php">
				<div id="requestquote" class="toggle">
					<p id="tellmore" class="toggle">Request a quote!</p>
					<p id="quotearrows">>></p>
				</div>
			</a>
			<main id="home">
				<div class="placeholder1" data-parallax="scroll" data-image-src="photos/placeholder1-2.jpg" data-speed=".05"></div>

				<div class="section1">
					<div id="okay" class="section1left">

						<img src="photos/popdisplay.jpg">
					</div>
					<div class="section1right">
						<div class="section1rightheader">
							Solving your challenges
						</div>
						<div class="section1rightbody">
							Imperial has become well know to provide fast solutions in retail fixtures and point of purchase displays. When others say it can’t be done call Imperial! We rise to the occasion and the opportunity to show you our dedication and commitment to your success.
						</div>
					</div>
				</div>
				<div class="section2">
					<div class="section2header">
						Devoted to Our Customers
					</div>
					<div class="section2body">
						Imperial has moved to greatly expanded facilities to increase overall capacity and implement new manufacturing processes. All this is designed to continue to rise to the challenges of the evolving retail industry. Imperials pledge is to support our customer base with expedient design and timely fulfillment of their display or fixture orders.
					</div>
				</div>
			</main>
			<footer>
				<?php require("footer.php");?>
				<script>
					<?php require("javascript.php");?>

					$(window).on("scroll touchmove", function() {
						$('.toggle').toggleClass("small", $(document).scrollTop() > 5);
						$('.headerlinkcontainer').toggleClass("small", $(document).scrollTop() > 5);
					});

					$('#requestquote').mouseover(function() {
						$('#requestquote').removeClass("small")
						$('#tellmore').removeClass("small")
					})

					$('#requestquote').mouseleave(function() {
						$('#requestquote').addClass("small")
						$('#tellmore').removeClass("small")
					})


				</script>
			</footer>
		</div>
	</body>
</html>