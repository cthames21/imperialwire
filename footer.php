<style>
	.footertop {
		display: grid;
		grid-template-columns: repeat(3,auto);
		grid-template-rows: 100%;
		grid-gap: 20px;
		background-color: var(--color-0);
		padding: 20px 0px;
		width: 90%;
		margin: 0 5%;
		grid-row: 1;
		letter-spacing: .1em;
		border-top: 1px solid var(--acc-color2)
	}

	.footertop1, .footertop2, .footertop3 {
	}

	.footertop1 {
		grid-column: 1;
	}

	.footertop1header,.footertop2header,.footertop3header {
		font-size: 1.15em;
		padding:20px 0;
		color: var(--color-5);
	}

	.footertop1body,.footertop2body,.footertop3body {
		color: var(--main-txt-color);
		line-height: 2.25em;
		font-size: .90em
;	}

	.footertop2 {
		grid-column: 2;
		text-align: center;
	}

	.footertop3 {
		grid-column: 3;
		text-align: right;
	}

	.footermid {
		display: grid;
		width: 100%;
		height: 60px;
		grid-template-columns: 60% 40%;
		grid-template-rows: 100%;
		grid-row: 2;
		background: var(--color-0);
		align-items: center;
		border-bottom: 1px solid var(--acc-color2);
	}

	#footerlinkbarcontainer {
		display: grid;
		grid-template-columns: repeat(5, auto);
		grid-template-rows: 100%;
		grid-gap: 20px;
		width: 100%;
		margin-left: 5vw;
		transition: 1s;
		grid-row: 1;
		grid-column: 1;
		justify-content: left;
		transition: 0s;
	}

	#externallinks {
		display: grid;
		grid-template-columns: repeat(3,1fr);
		grid-gap: 15px;
		height: 25px;
		margin-right: 5vw;
		grid-column: 2;
		grid-row: 1;
		justify-self: right;
		justify-items: right;
	}

	#externallinks svg {
		fill: var(--acc-color2);
	}

	#externallinks svg:hover {
		fill: var(--acc-color);
		cursor: pointer;
	}

	.footerbottom {
		text-align: center;
		width: 100%;
		height: 45px;
		padding: 10px;
		grid-row: 3;
		background-color: var(--acc-color2-alt);
	}

	#copyright {
		display: flex;
		height: 100%;
		font-size: .8em;
		color: var(--color-4);
		align-items: center;
		justify-content: center;
	}


@media only screen and (max-width: 620px) {
	.footertop {
		grid-template-columns: 100%;
		grid-template-rows: 1fr 1fr 1fr;
		padding: 20px 0px;
		width: 98%;
		margin: 0 1%;
		border: none;
	}

	.footertop1 {
		grid-row: 3;
		grid-column: 1;
		justify-self: center;
		text-align: center;
	}

	.footertop2 {
		grid-row: 2;
		grid-column: 1;
		justify-self: center;
		text-align: center;
	}

	.footertop3 {
		grid-row: 1;
		grid-column: 1;
		justify-self: center;
		text-align: center;
	}

	.footertop1header,.footertop2header,.footertop3header {
		padding: 10px 0;
		border-bottom: 1px solid var(--acc-color)
	}

	#footerlinkbarcontainer {
		grid-template-rows: repeat(2,1fr);
		grid-template-columns: repeat(3,1fr);
		grid-gap: 10px;
		font-size: .9em;
		margin-left: 0;
	}

	#linkbar1 {
		grid-row: 1;
		grid-column: 1;
	}

	#linkbar2 {
		grid-row: 1;
		grid-column: 2;
	}

	#linkbar3 {
		grid-row: 1;
		grid-column: 3;
	}

	#linkbar4 {
		grid-row: 2;
		grid-column: 1 / span 2;
	}

	#linkbar5 {
		grid-row: 2;
		grid-column: 2 / span 2;
	}


	#externallinks {
		grid-gap: 10px;
		height: 10px;
		padding-bottom: 26px;
}

@media only screen and (max-width: 960px) {
	.footertop {	
		padding: 20px 0px;
		width: 94%;
		margin: 0 3% 3%;
	}

}

</style>

<div class="footertop">
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
		<div class="footertop3header">
			Contact
		</div>
		<div class="footertop3body">
			763-391-7798
			<br>
			billybob@iwdisplay.com
		</div>
	</div>
</div>
<div class="footermid">
	<div id="footerlinkbarcontainer">
		<div id="linkbar1" class="linkbar">
			<a href="index.php"> Home </a>
		</div>
		<div id="linkbar2" class="linkbar">
			<a href="solutions.php"> Solutions </a>
		</div>
		<div id="linkbar3" class="linkbar">
			<a href="about.php"> About </a>
		</div>
		<div id="linkbar4" class="linkbar">
			<a href="gallery.php"> Gallery </a>
		</div>
		<div id="linkbar5" class="linkbar">
			<a href="contact.php"> Contact </a>
		</div>
	</div>
	<div id="externallinks">
			<svg id="facebook" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path stroke-width="1" stroke-miterlimit="10" d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
			</svg>
			<svg id="linkedin" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path stroke-width="1" stroke-miterlimit="10" d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
			</svg>
			<svg id="instagram" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path stroke-width="1" stroke-miterlimit="10" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
			</svg>
		</div>
</div>
<div class="footerbottom">
	<div id="copyright">
		© 2019 ImperialWire. All Rights Reserved.
	</div>
</div>
