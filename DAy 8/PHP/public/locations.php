<?php
	// about us
	include("header.php");
	
	// LOGIC => getting all the products from the db
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "store";

	$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

	$query = "SELECT * from products";

	$results = mysqli_query($conn, $query);
?>

<h1> LOCATIONS </h1>
