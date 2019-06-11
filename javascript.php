$(document).ready(function() {
	document.addEventListener('mousemove', logKey);
	document.addEventListener('wheel', logKey);
	document.addEventListener('click', logKey);
	window.addEventListener('load', logKey);

	$('#imperialwire').css("opacity", "1");

	$('#facebook').mouseover(function() {
		$('#facebook').css("fill","#2DA3F2")
	})
	$('#facebook').mouseleave(function() {
		$('#facebook').css("fill","slategray")
	})
	$('#linkedin').mouseover(function() {
		$('#linkedin').css("fill","#2DA3F2")
	})
	$('#linkedin').mouseleave(function() {
		$('#linkedin').css("fill","slategray")
	})
	$('#instagram').mouseover(function() {
		$('#instagram').css("fill","#2DA3F2")
	})
	$('#instagram').mouseleave(function() {
		$('#instagram').css("fill","slategray")
	})



})



