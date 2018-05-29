<h1>PHP</h1>
<h2>NEXT PAGE</h2>
<?php
		//build a program to check if the person came to this page usign get or post method
		
		//print_r($_SERVER);
		
		
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			//POST
			echo  "<br> The Studet NAme is: ". $_POST["studentName"]. "<br>";
		echo  "The Studet ID is: ".$_POST["id"]. "<br>";
		} else if($_SERVER["REQUEST_METHOD"] == "GET") {
			//GET
			echo  "<br> The Studet NAme is: ". $_GET["studentName"]. "<br>";
		echo  "The Studet ID is: ".$_GET["id"]. "<br>";
		}
		
		
		//Get Data From the form
		echo "Whats in GET? <br>";
		print_r($_GET). "<br>";
		
		echo "<br> Whats in POST? <br>";
		print_r($_POST). "<br>";
		
		
?>