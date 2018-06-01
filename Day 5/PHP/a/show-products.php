<?php
	//@TODO: Put your PHP logic here

	
	//1. connect to database
	
	// 2. run your sql query
	
	
	// 3. get results from database
	
	
	
	// 4. after you get results, show in UI
	// (note -> this should be done inside the <table> tag below)
	//  do you know why?
	 
?>
<!DOCTYPE html5>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<style type="text/css">
		.mdl-grid {
			max-width:1024px;
			margin-top:40px;
		}
		
		h1 {
			font-size:36px;
		}
		h2 {
			font-size:30px;
		}
	</style>
</head>
<body>

	<div class="mdl-grid">
	  <div class="mdl-cell mdl-cell--12-col">
	  	<h1> Admin Panel </h1>
		<h2> Products are shown below: </h2>
	  
		<!-- products table -->
		<!-- @TODO: Insert PHP code here -->
		<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
		  <thead>
			<tr>
			  <th class="mdl-data-table__cell--non-numeric">Material</th>
			  <th>Quantity</th>
			  <th>Unit price</th>
			</tr>
		  </thead>
		  
		  <?php
			//@TODO: You need to jumble PHP and HTML code here.
		  ?>
		  <tbody>
			<tr>
			  <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
			  <td>25</td>
			  <td>$2.90</td>
			</tr>
			<tr>
			  <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
			  <td>50</td>
			  <td>$1.25</td>
			</tr>
			<tr>
			  <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
			  <td>10</td>
			  <td>$2.35</td>
			</tr>
		  </tbody>
		</table>
		<!-- end table -->
	
		<br>
		
		<a href="add-product.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
			+ Add Product 
		</a>
	  </div>
	</div>
	
</body>
</html>

<?php
	//@TODO: Be a good citizen and close your connection to hte DB!
?>




<?php
	// write the code to connect to the db
		
	// 1. WHAT IS YOUR INFO?
	// 		host ? db name? db user? db password?
	$dbhost = "localhost";		// address of your database
	$dbuser = "root";
	$dbpassword = "";			// on MAMP, this is "root"
	$dbname = "store";
	
	// 2.  CONNECT TO THE DATABASE
	$conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
	
	// 3.  MAKE a SQL QUERY 
	
	// make the query
	$query = "SELECT * from product";
	
	// 4. SEND QUERY TO DB & GET RESULTS 
	$results = mysqli_query($conn, $query);
	
	// 5. SHOW THE DATABASE RESULTS SOMEWHERE
		
	// loop through the database results
	while( $product = mysqli_fetch_assoc($results) ) {
		// show all row data
		print_r($product);
		echo "<br>";
	
		// print people's first names
		echo "<span style='color:red'>";
		echo $product["name"];
		echo "</span> <br>";
	}
		
	// 6. DISCONNECT FROM DATABSE
	mysqli_free_result($results); // clean up your row variable
	mysqli_close($conn);	// close connection to db
?>