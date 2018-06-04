<?php
	include("../admin/conn.php");
	include("header.php");
	
	$query = "select * from product";
	$results = mysqli_query($conn,$query);
	 
?>

    <!-- BACKPACKS and BAGS -->
    <section class="section">
      <div class="container">
        <h1 class="title">Backpacks & Bags</h1>
        <h2 class="subtitle">
          A selection of awesome backpacks for your everyday commute.
        </h2>
      </div>
    </section>

    <section class="section">
      <div class="container">
		
		<?php  
		while($product = mysqli_fetch_assoc($results)) {
		?>
			<img src="images/burnt-toast-donut.jpg">
			<p><?php echo $product['name'] ?></p>
			<p><?php echo $product['description'] ?></p>
			<p><?php echo $product['price'] ?></p>
		<?php
		}
		?>
      </div>
    </section>
	<script type="text/javascript">
    </script>
  </body>
</html>
