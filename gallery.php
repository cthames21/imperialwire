<!DOCTYPE html>
<html>
	<head>
		<title>Imperial Wire | Gallery</title>
		<meta charset="UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="C. S. Thames">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="gallery.css">
		<link rel="stylesheet" type="text/css" href="fonts/helveticaneue.css">
		<script src="jquery.js"></script>
		<script src="parallax.js"></script>
	</head>
	<body>
		<div class="page-container">
			<header>
				<?php include("header.php");?>
			</header>

			<div class="sectiongap" style="height: 75px"></div>

			<h1>
				Custom
			</h1>

			<div class="h1body">
				Get the job done right, with tailor made fixtures that fit your needs. Lorem ipsum boom bot bee tret ten trep pen ferutybopbim
			</div>
			<div class="gallery">
				<aside>
					<ul>
						<li id="category1selector">All</li>
						<li id="category2selector">Wire displays</li>
						<li id="category3selector">Stands / Bases</li>
						<li id="category4selector">Shelving</li>
						<li id="category5selector">Other</li>
					</ul>
				</aside>

				<main>
					<div class="hideme category1"><img onclick="openModal();currentSlide(1)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-1.jpg" alt></div>
					<div class="hideme category5"><img onclick="openModal();currentSlide(2)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-5.jpg" alt></div>
					<div class="hideme category4"><img onclick="openModal();currentSlide(3)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-4.jpg" alt></div>
					<div class="hideme category2"><img onclick="openModal();currentSlide(4)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-2.jpg" alt></div>
					<div class="hideme category3"><img onclick="openModal();currentSlide(5)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-3.jpg" alt></div>
					<div class="hideme category4"><img onclick="openModal();currentSlide(6)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-4.jpg" alt></div>
					<div class="hideme category3"><img onclick="openModal();currentSlide(7)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-3.jpg" alt></div>
					<div class="hideme category1"><img onclick="openModal();currentSlide(8)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-1.jpg" alt></div>
					<div class="hideme category5"><img onclick="openModal();currentSlide(9)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-5.jpg" alt></div>
					<div class="hideme category2"><img onclick="openModal();currentSlide(10)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-2.jpg" alt></div>
					<div class="hideme category3"><img onclick="openModal();currentSlide(11)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-3.jpg" alt></div>
					<div class="hideme category4"><img onclick="openModal();currentSlide(12)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-4.jpg" alt></div>
					<div class="hideme category2"><img onclick="openModal();currentSlide(13)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-2.jpg" alt></div>
					<div class="hideme category1"><img onclick="openModal();currentSlide(14)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-1.jpg" alt></div>
					<div class="hideme category5"><img onclick="openModal();currentSlide(15)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-5.jpg" alt></div>
					<div class="hideme category2"><img onclick="openModal();currentSlide(16)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-2.jpg" alt></div>
					<div class="hideme category3"><img onclick="openModal();currentSlide(17)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-3.jpg" alt></div>
					<div class="hideme category4"><img onclick="openModal();currentSlide(18)" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-4.jpg" alt></div>
				</main>


				<div id="myModal" class="modal">
				    <span class="close cursor" onclick="closeModal()">&times;</span>

				    <div class="modal-content">

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-1.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-4.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-3.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-2.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-4.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-1.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-3.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-2.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-4.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-1.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-4.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-3.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-2.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-4.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-1.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-3.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-2.jpg">
					    </div>

					    <div class="mySlides">
					      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/jeremiah-wilson-4.jpg">
					    </div>

				   		<div id="slidecountdisplay"></div>
					    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					    <a class="next" onclick="plusSlides(1)">&#10095;</a>

					    <div class="caption-container">
					      <p id="caption"></p>
					    </div>
				  	</div>
			    </div>

			</div>
			<footer>
				<?php include("footer.php");?>	
				<script>
					<?php include("javascript.php");?>	

					$(document).ready(function() {
						$('#category1selector').click(function() {
							$('.category1').css("display","block")
							$('.category2').css("display","block")
							$('.category3').css("display","block")
							$('.category4').css("display","block")
							$('.category5').css("display","block")
							$("#category1selector").addClass('filter')
							$("#category2selector").removeClass('filter')
							$("#category3selector").removeClass('filter')
							$("#category4selector").removeClass('filter')
							$("#category5selector").removeClass('filter')
						})
						$('#category2selector').click(function() {
							$('.category1').css("display","none")
							$('.category2').css("display","block")
							$('.category3').css("display","none")
							$('.category4').css("display","none")
							$('.category5').css("display","none")
							$("#category2selector").addClass('filter')
							$("#category1selector").removeClass('filter')
							$("#category3selector").removeClass('filter')
							$("#category4selector").removeClass('filter')
							$("#category5selector").removeClass('filter')
						})
						$('#category3selector').click(function() {
							$('.category1').css("display","none")
							$('.category2').css("display","none")
							$('.category3').css("display","block")
							$('.category4').css("display","none")
							$('.category5').css("display","none")
							$("#category3selector").addClass('filter')
							$("#category1selector").removeClass('filter')
							$("#category2selector").removeClass('filter')
							$("#category4selector").removeClass('filter')
							$("#category5selector").removeClass('filter')
						})
						$('#category4selector').click(function() {
							$('.category1').css("display","none")
							$('.category2').css("display","none")
							$('.category3').css("display","none")
							$('.category4').css("display","block")
							$('.category5').css("display","none")
							$("#category4selector").addClass('filter')
							$("#category1selector").removeClass('filter')
							$("#category2selector").removeClass('filter')
							$("#category3selector").removeClass('filter')
							$("#category5selector").removeClass('filter')
						})
						$('#category5selector').click(function() {
							$('.category1').css("display","none")
							$('.category2').css("display","none")
							$('.category3').css("display","none")
							$('.category4').css("display","none")
							$('.category5').css("display","block")
							$("#category5selector").addClass('filter')
							$("#category1selector").removeClass('filter')
							$("#category2selector").removeClass('filter')
							$("#category3selector").removeClass('filter')
							$("#category4selector").removeClass('filter')
						})
					})

					var slideIndex = 1;
					showSlides(slideIndex);

					function openModal() {
					  document.getElementById('myModal').style.display = "block";
					}

					function closeModal() {
					  document.getElementById('myModal').style.display = "none";
					}

					function plusSlides(n) {
					  showSlides(slideIndex += n);
					}

					function currentSlide(n) {
					  showSlides(slideIndex = n);
					}

					function showSlides(n) {
						var i;
						var slides = document.getElementsByClassName("mySlides");
						var captionText = document.getElementById("caption");
						if (n > slides.length) {slideIndex = 1}
						if (n < 1) {slideIndex = slides.length}
						for (i = 0; i < slides.length; i++) {
					    	slides[i].style.display = "none";
					  	}

						document.getElementById("slidecountdisplay").innerHTML = slideIndex + '/' +Object.keys(slides).length;
						slides[slideIndex-1].style.display = "grid";
						captionText.innerHTML = dots[slideIndex-1].alt;
					}



				</script>
			</footer>
		</div>
	</body>
</html>

