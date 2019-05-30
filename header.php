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
		grid-template-columns: 15% 70% 0% 15%;
		grid-row: 2;
		top: 13px;
		width: 100vw;
		height: 210px;
		align-items: center;
		justify-items: center;
		transition: 1s;
		background-color: var(--color-0);
		z-index: 5;
		box-shadow: 0px 3px 10px 0px var(--main-shadow);
	}

	#headermain.small {
		height: 100px;
		grid-template-columns: 15% 35% 40% 10%;
		transition: 1s;
	}

	#linkbarcontainer {
		display: grid;
		position: absolute;
		grid-template-columns: repeat(4, auto);
		grid-template-rows: 100%;
		grid-gap: 40px;
		width: 100%;
		height: 25px;
		top: 207px;
		justify-content: center;
		overflow: hidden;
		transition: 1s;
	}

	#linkbarcontainer.small {
		top: 97px;
	}

	.linkbar {
		width: 120px;
		height: 100%;
		border-top: 4px solid var(--acc-color);
		grid-row: 1;
		white-space: nowrap;
		text-align: center;
		overflow: hidden;
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

	.linkbar > a {
		text-align: center;
		font-size: 18px;
		z-index: 1;     
		padding: 2em;     
		margin: -2em;
		text-decoration: none;
	}

	.linkbar > a:hover {
		color: var(--acc-color)
	}

	#externallinks {
		display: grid;
		grid-template-columns: repeat(3,1fr);
		grid-gap: 15px;
		width: 100px;
		z-index: 10;
		grid-column: 1;
	}

	#externallinks svg {
		display: none;
		fill: slategray;
	}

	#slogan {
		grid-column: 3;
		grid-row: 1;
		opacity: 0;
		color: var(--alt-txt-color);
	}

	#slogan.small {
		font-size: 1.1em;
		transition: 1s;
		opacity: 1;
	}

	#imperialwire {
		width: 100%;
		grid-column: 2;
		grid-row: 1;
		font-size: 100px;
		font-style: italic;
		font-weight: 500;
		letter-spacing: .06em;
		text-align: center;
		opacity: 0;
		transition: 2s;
		white-space: nowrap;
	}

	#imperialwire a {
		text-decoration: none;
		color: var(--alt-txt-color);
	}
		
	#imperialwire.small {
		transition: 1s;
		font-size: 48px;
	}

	#menucontainer {
		display: flex;
		position: absolute;
		right:0px;
		top:30px;
		width: 120px;
		height:225px;
		z-index: 10;
		justify-content: center;
		visibility: hidden;
		opacity: 0;
		transition: 1s;
	}

	#menucontainer.small {
		visibility: visible;
		opacity: 1;
		transition: 1s;
		transition-delay: visibility 1s;
	}

	#menuicon {
		grid-row: 1;
		grid-column: 4;
		justify-self: center;
		opacity: 1;
		transition: 1s;
		height: 40px;
	}

	.menudropdown {
		position: absolute;
		right:40px;
		top:45px;
		width: 120px;
		height:150px;
		z-index: 10;
		visibility: hidden;
	}

	#menuoption1,#menuoption2,#menuoption3,#menuoption4 {
		display: block;
		height: 30px;
		font-weight: bold;
		text-align: right;
		text-decoration: none;
		color: var(--acc-color);
		opacity: 0;
		transition: .5s;
		padding: 8px;
	}

	#menuoption1:hover,#menuoption2:hover,#menuoption3:hover,#menuoption4:hover {
		color: var(--color-1);
	}

	#hamburgermenu {
		fill: var(--color-3);
	}

</style>

<div class="colorbar"></div>

<div class="toggle" id="headermain">
	<div class="toggle" id="externallinks">
		<svg id="facebook" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path stroke-width="1" stroke-miterlimit="10" d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
		</svg>
		<svg id="linkedin" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path stroke-width="1" stroke-miterlimit="10" d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
		</svg>
		<svg id="instagram" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path stroke-width="1" stroke-miterlimit="10" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
		</svg>
	</div>
	<div class="toggle" id="slogan">
		Custom Retail Fixtures and Point of Purchase Displays
	</div>
	<div class="toggle" id="imperialwire">
		<a href="index.php"> Imperial Wire </a>
	</div>

<!--	
	<div class="toggle" id="menucontainer">
		<g id="menuicon">
			<svg id="hamburgermenu" height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink" ><path class="path"stroke-miterlimit="10" d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg>
		</g>
		<div class="menudropdown">
			<a id="menuoption1" href="index2.php">Home</a>
			<a id="menuoption2" href="services.php">Solutions</a>
			<a id="menuoption3" href="howitworks.php">How it Works</a>
			<a id="menuoption4" href="contact.php">Contact</a>
		</div>
	</div>
-->

	<div id="linkbarcontainer" class="toggle">
		<div id="linkbar1" class="linkbar">
			<a href="index2.php"> Home </a>
		</div>
		<div id="linkbar2" class="linkbar">
			<a href="services.php"> Solutions </a>
		</div>
		<div id="linkbar3" class="linkbar">
			<a href="howitworks.php"> How it works </a>
		</div>
		<div id="linkbar4" class="linkbar">
			<a href="contact.php"> Contact </a>
		</div>
	</div>
	<a id="requestquote" class="toggle" href="contact.php">
		<p id="tellmore" class="toggle"> Quick quote </p>
		<p id="quotearrows"><<</p>
	</a>
</div>










