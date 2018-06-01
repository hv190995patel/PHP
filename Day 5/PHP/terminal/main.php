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
			outline: none;
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
				<p> THIS TERMINAL IS LOCKED. ENTER UNLOCK CODE </p>

				<?php include "logic.php";?>

				<form action="main.php" method="POST">
					<label> ENTER YOUR PASSWORD: </label>
					<input id="guess" name="guess" type="text" style="text-transform:uppercase;" maxlength="4">
					<button type="submit">GO</button>
				</form>

				<a href="main.php"> CREATE NEW CONNECTION </a>
			</div>
	  </div>
	</div>
	<script type="text/javascript">

	</script>

</body>
</html>
