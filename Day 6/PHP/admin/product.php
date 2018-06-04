<?php
	include "conn.php";
	//@TODO: Put your PHP logic here

	// QUESTION - FOR THIS PAGE, DO YOU NEED TO CONNECT TO THE DATABASE?
	// 	a) YES
	//	b) NO
	// If you picked A) - give reason why!
	// If you picked B) - give reason why!
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
			 $name = $_POST['name'];
			 $price = $_POST['price'];
			 $desc = $_POST['desc'];
			 
			 echo $query = 
					'INSERT INTO product (name, price, description) ' .
					'VALUES ("' .$name . '","' . $price . '","' . $desc . '")';
			 $results = mysqli_query($conn,$query);
			 header('Location: '. "admin.php");
	}
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
	  	<h1> Add Product </h1>
		<h2> Enter new products: </h2>

		<!-- form -->
		<!-- @TODO: Update your form action/method here -->
		<form method="POST" action="product.php">
		
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<!-- @TODO: update NAME and ID! -->
				<input class="mdl-textfield__input" type="text" id="name" name="name">
				<label class="mdl-textfield__label" for="sample3">Product Name</label>
			</div>
			<br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<!-- @TODO: update NAME and ID! -->
				<input class="mdl-textfield__input" type="text" id="desc" name="desc">
				<label class="mdl-textfield__label" for="sample3">Description</label>
			</div>
			<br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<!-- @TODO: update NAME and ID! -->
				<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="price" name="price">
				<label class="mdl-textfield__label" for="sample2">Price</label>
				<span class="mdl-textfield__error">Input is not a number!</span>
			</div>
			<br>
				  
		  <!-- @TODO: Update the link  -->
		  <button name="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
			+ Add Product
		  </button>
		</form>
		
		<br>
		
		<a href="admin.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
			< Go Back 
		</a>
	  </div>
	</div>
	
</body>
</html>
<?php
	
		mysqli_close($conn);
?>