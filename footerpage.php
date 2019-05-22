<!DOCTYPE html>
<html>
	<head>
		<style>

			main {
				padding-bottom: 200px;
			}

			.page-container {
			 min-height: 100vh; /* will cover the 100% of viewport */
			 overflow: hidden;
			 display: block;
			 position: relative;
			}

			footer {
			 position: absolute;
			 bottom: 0;
			 width: 100%;
			 height: 200px;
			 background-color: blue;
			}


		</style>
	</head>
	<body>
		<div class="page-container">
			<header>
				header
			</header>
			<main>
				<div style="height: 2000px; background-color: red; border-bottom: 5px solid green;">
					Body
				</div>
			</main>
			<footer>
				footer
			</footer>
		</div>
	</body>
</html>