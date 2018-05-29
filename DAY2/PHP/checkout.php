<?php
	//$cc ="4288631468815465";
	$cc = "6046460479341256";
	//echo "Your Credit Card Number is:" .$cc."<br>";
	if(strlen($cc) == 16) {
			//0. Reverse a string to match the position with algorithm
			$reversed= strrev($cc);
			
			//1. Loop through the number is the cc
			$total = 0;
			for($i=0;$i<16;$i++) {
					//@debug: print out each character
					 $reversed[$i];
			
			//2. If position = odd
				//2.1 multiply by 2
				//2.2 if multiply > 9 then convert
				//		o/w do nothing
				
				if($i %2 == 1) {
					//Do Multiply + convert
					$num = $reversed[$i] * 2;
					if($num > 9) {
							$num = $num - 9;
					}
				} else {
						//Do Nothing
						$num = $reversed[$i];
				}
				//echo "---Converted Number is: ".$num. "<br>";
				//3. Add to the total
				$total = $total + $num;
			}// End Loop
			
			
			//4. After Looping, do total % 10
			
			if($total%10 == 0) {
					echo "VALID CREDIT CARD NUMBER";
			}
			else {
					echo "Not Valid CREDIT CARD NUMBER";
			}
			
			//5. If total %10 == 0, WINNER!!!!
	} else {
			echo "Your Card Number is NOt 16 Digits";
	}
?>
<html>
	<head>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<form action="" method="POST">
			<div class="container">
				<h1>Checkout</h1>
				<div class="col-md-6">
					<div class="form-group">
					  <label>FIRSTNAME</label>
						<input type="text" class="form-control" name="fname" placeholder="Enter First Name:">
					</div>
					
					 <div class="form-group">
					  <label>LASTNAME</label>
						<input type="text" class="form-control" name="lname" placeholder="Enter LastName:">
					 </div>
					
					 <div class="form-group">
					  <label>EMAIl</label>
						<input type="email" class="form-control"  name="email" placeholder="Enter Email:">
					 </div>
					
					 <div class="form-group">
					  <label>CREDIT CARD INFO</label>
						<input type="text" class="form-control" name="cnumber" id="cnumber" placeholder="Enter Credit Card Number:">
					 </div>
					
					 <button type="submit" class="btn btn-default" name="submit">Submit</button>
				</div>
				
			</div>
		</form>
	</body>
</html>