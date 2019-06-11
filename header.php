<style>
	.colorbar {
		position: fixed;
		grid-row: 1;
		top:0;
		height:13px;
		width: 100vw;
		background-color: var(--color-4);
		z-index: 10;
	}

	#headermain {
		display: grid;
		position: fixed;
		grid-template-columns: 40% 20% 40%;
		grid-row: 2;
		width: 100vw;
		height: 130px;
		padding-top: 10px;
		align-items: center;
		justify-items: center;
		z-index: 5;
	}

	#headermain.small {
		height: 70px;
		padding-top: 10px;
		transition: height 1s;
		background-color: rgba(33,33,33,.95);
		box-shadow: 0px 0px 5px 0px var(--color-2);
	}

	#linkbarcontainer {
		display: grid;
		grid-template-columns: repeat(5, auto);
		grid-template-rows: 100%;
		grid-gap: 10px;
		grid-column: 3;
		width: 100%;
		justify-content: center;
		transition: 1s;
	}

	.linkbar {
		width: 80px;
		grid-row: 1;
		text-align: center;
		transition: .3s;
	}

	#linkbar1 {
		grid-column: 1;
	}

	#linkbar2 {
		grid-column: 2;
	}

	#linkbar3 {
		grid-column: 3;
	}

	#linkbar4 {
		grid-column: 4;
	}

	#linkbar4 {
		grid-column: 5;
	}

	.linkbar > a {
		text-align: center;
		font-size: 1em;
		font-weight: 400;
		padding: 11px 10px 7px;
		text-decoration: none;
		color: var(--main-txt-color)
	}

	.linkbar > a:hover {
		color: var(--acc-color);
		text-shadow: 0 0 3px var(--acc-color);
	}

	#imperialwire {
		width: 100%;
		grid-column: 1;
		grid-row: 1;
		font-size: 4em;
		font-style: italic;
		font-weight: 500;
		letter-spacing: .06em;
		text-align: center;
		opacity: 0;
		transition: 1.5s;
		white-space: nowrap;
	}

	#imperialwire a {
		text-decoration: none;
		color: var(--main-txt-color);
	}
		
	#imperialwire.small {
		transition: 1s;
		font-size: 3em;
	}

	#phonenumber {
		grid-column: 2;
		font-weight: 400;
		font-size: 1.6em;
		color: var(--main-txt-color);
	}

</style>
<!--
<div class="colorbar"></div>
-->
<div class="toggle" id="headermain">
	<div class="toggle" id="imperialwire">
		<a href="index.php"> Imperial Wire </a>
	</div>

	<div id="phonenumber">
		763-391-7798
	</div>

	<div id="linkbarcontainer">
		<div id="linkbar1" class="linkbar">
			<a href="index2.php" style="border: 1px solid var(--acc-color)"> Home </a>
		</div>
		<div id="linkbar2" class="linkbar">
			<a href="services.php"> Solutions </a>
		</div>
		<div id="linkbar3" class="linkbar">
			<a href="howitworks.php"> About </a>
		</div>
		<div id="linkbar4" class="linkbar">
			<a href="gallery.php"> Gallery </a>
		</div>
		<div id="linkbar5" class="linkbar">
			<a href="contact.php"> Contact </a>
		</div>
	</div>

</div>

<script>
	$("#imperialwire").css("opacity","1")
</script>








