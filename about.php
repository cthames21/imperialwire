<!DOCTYPE html>
<html>
	<head>
		<title>Imperial Wire - About</title>
		<meta charset="UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="C. S. Thames">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="about.css">
		<link rel="stylesheet" type="text/css" href="fonts/helveticaneue.css">
		<script src="jquery.js"></script>
		<script src="parallax.js"></script>
	</head>
	<body>
		<header>
			<?php include("header.php");?>
		</header>
		<main class="contained">
			<div class="pageheader">
				<h1>
					Home > About
				</h1>
			</div>

			<div class="aboutcontainer">
				<div class="aboutbody">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
					<br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>

				<img id="aboutvideo" src="photos/youtube.gif" />

				<img id="teamphoto" src="photos/team2.png" />

			</div>
		</main>
		<footer>
			<?php require("footer.php");?>

			<script>
				<?php require("javascript.php");?>


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
