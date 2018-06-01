<?php
	
		include "conn.php";
		
		//3. Make Sql Query 
		$query = "SELECT * FROM product";
		
		//4. Get Results from Database ANd Send to database
		$results = mysqli_query($conn,$query);
		
?>
<html>
	<head>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		
	</head>
	<body>
		<div class="mdl-grid">
	  <div class="mdl-cell mdl-cell--12-col">
	  	<h1> Admin Panel </h1>
		<h2> Products are shown below: </h2>
	  
		<!-- products table -->
		<table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
		  <thead>
			<tr>
			  <th class="mdl-data-table__cell--non-numeric">Name</th>
			  <th class="mdl-data-table__cell--non-numeric">Price</th>
			  <th class="mdl-data-table__cell--non-numeric">Description</th>
			 
			</tr>
		  </thead>
		  <tbody>
			
				<?php
					
					while($product = mysqli_fetch_assoc($results)) {
					?>
					<tr class="mdl-data-table__cell--non-numeric">
						<td class="mdl-data-table__cell--non-numeric"><?php echo $product['name']; ?></td>
						<td class="mdl-data-table__cell--non-numeric"><?php echo $product['price']; ?></td>
						<td class="mdl-data-table__cell--non-numeric"><?php echo $product['description']; ?></td>
						<td> <a href="product_edit.php?id=<?php echo $product['p_id']; ?>">EDIT</a></td>
						<td> <a href="">DELETE</a></td>
					</tr>
				<?php } ?>
			  
		  </tbody>
		</table>
		<!-- end table -->
		<br>
		<a href="product.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
			+ Add Product </a>
	  </div>
	</div>
	</body>
</html>
<?php
	mysqli_free_result($results);
		mysqli_close($conn);
?>