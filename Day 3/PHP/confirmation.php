
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        Order Confirmation
      </h1>
	   <a href="checkout.php" > Go Back </a>
	  <?php
	
	//LOGIC 
	//print_r($_POST);
	
	//test for error conditions
	$name = $_POST["firstname"];
	$email = $_POST["email"];
	$cc = $_POST["cc"];
	
	
		//1..Check if fields are blank
		
		if(empty($name) || empty($email) || empty($cc)) {
				echo "Name, Email OR CC Is Blank!!!!";
		}
		
		//Check if credit card is valid
		if(strlen($cc) !=16){
		echo "<br>.Credit Card Number Must Be 16 Digits. <br>";
		}
		
		//Check if credit card passess validation
		if(ccisValid($cc) == false) {
				echo "Invalid CC";
		} else {
			//echo "VALID CC";
		}
		
		function ccisValid($cc) {
			//$cc ="4288631468815465";
			//$cc = "6046460479341256";
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
					return true;
			}
			else {
					return false;
			}
			
			//5. If total %10 == 0, WINNER!!!!
			} else {
					return false;
			}
		}
		
	//if all conditoins PASS then show SUccess Message
	echo "<br>Hey, ". $name."<br>";
	echo "Thanks For Your Order"."<br>";
	echo "we Sent a Copy of your receipt to: ";
	echo "<span style = 'color:blue'; text-decoration:none>";
	echo "$email";
	echo "</span>";
?>
     
    </div>
  </section>
  </body>
</html>