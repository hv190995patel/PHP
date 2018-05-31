<h1>Connecting To Database</h1>
<?php
	//Connect To Database
	
		//1. Database Information
		$dbhost = "localhost";
		$dbuser = "root";		//MAMP       //USERNAME AND PASSWORD IS root and root
		$dbpassword = "";
		$dbname="mad3134";

				
		
		//2. Connect To Database
		$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
		
		//3. Make Sql Query 
		$query = "SELECT * FROM employees";
		
		//4. Get Results from Database ANd Send to database
		$results = mysqli_query($conn,$query);
		
		//5. Show the Database Results
		
			//Loop Through the databse results
			while($employee = mysqli_fetch_assoc($results)) {
					echo "ID: ".$employee['id']."<br>";
					echo "FirstName: ".$employee['firstname']."<br>";
					echo "LastName: ".$employee['lastname']."<br>";
					echo "Department: ". $employee['department']."<br>";
					echo "<br>";
					
					
			}	
		
		//6. Disconnect From database
		
		mysqli_free_result($results);
		mysqli_close($conn);
?>