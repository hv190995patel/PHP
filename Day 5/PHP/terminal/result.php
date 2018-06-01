<?php
	session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/spectre.min.css">
	<link href="https://fonts.googleapis.com/css?family=Overpass+Mono" rel="stylesheet">
	<style type="text/css">
		body{
			font-family: 'Overpass Mono', monospace;
			background-color:black;
			color:#00ff00;
			text-transform:uppercase;
		}
		input {
			border:1px solid #00ff00;
			background-color:black;
			color: #00ff00;
			padding:5px;
		}

		button {
			background-color:transparent;
			padding:5px;
			color:#00ff00;
			background-color:black;
			border:1px solid #00ff00;
		}
		a:hover {
			color: #068706;
		}
		a {
			color:#068706;
		}
		.container {
			margin-top:40px;
		}
	</style>
</head>
<body>


	<div class="container">
	  <div class="columns">
	    <div class="column col-8 col-mx-auto">
				<p> MAINFRAME INDUSTRIES (TM) TERMINAL </p>

				<?php
					if ($_SESSION["result"] == "win") {
						echo "<p> TERMINAL UNLOCKED! </p>";
						echo "<p> C:\ </p>";
					}
					else {
						echo "<P> HACKING DETECTED - ACCESS PERMANTENTLY DENIED <P>";
						echo "<P> TERMINAL WILL SELF DESTRUCT IN 10 SECONDS </P>";
					}
				?>

				<a href="main.php"> CREATE NEW CONNECTION </a>
			</div>
	  </div>
	</div>


</body>
</html>
