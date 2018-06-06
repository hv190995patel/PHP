<?php
	//echo "Hello";
	//Connect To Database
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "store";

	$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
	
	//Grab All the locations
	$query = "SELECT * from locations";
	
	$results = mysqli_query($conn, $query);
	$stores = array();
	while($item = mysqli_fetch_assoc($results)) {
			array_push($stores,$item);
	}
	
	//Return location as JSON
		//Tell browser we r sending json_encode
		header("Content-Type: application/JSON");
		
		//Convert our Array into  a json dictionary
		$json = json_encode($stores);
		//Deal with any errors during the conversion
		//NOte this is error handling
		if($json == false) {
			$error = array("error"=>json_last_error_msg());
			$json = json_encode($json);
			http_response_code(500);
		}
		//send json dictionary to the browser
		echo $json;
?>