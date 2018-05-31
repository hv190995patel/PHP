<?php
	
	if($_SERVER["REQUEST_METHOD"] == "GET") {
			//Read Words from the file
		$file = file_get_contents("simplewords.txt", true);
		$words = str_word_count($file, 1);
			//print_r($words);
		
		//Randomly pick words from arrray?
				//print_r(array_rand($words,10));
		$length = count($words);
		
		$picked = []; //Put all position in the array
		$choices = []; //these are 10 randomyl numbers you choose
		for($i=0;$i<10;$i++) {
			while(1) {
				//Pick A Random Number
				$randomNumber = rand(0, $length - 1);
				
				//Check if random number already picked
				if(in_array($randomNumber,$picked) == true) {
					//Skip
					continue;
				} 
				else {
					//If you picked the position already
					//Then pick a new randon number
					array_push($choices,$words[$randomNumber]);
					break;
				}
				//Check if you picked this position already
				
			}
			echo $words[$randomNumber]."<br>";
		}
	}
	else if($_SERVER["REQUEST_METHOD"] == "POST") {
		//GTE word FROm UI
		$guess = $_POST["guess"];
		echo $guess."<br>";
		
		//2. Compare the guess to the password
		if($guess == $password) {
				echo "WINNER";
		}
		else {
				$correct = 0;
				for($i=0;$i<4;$i++) {
						if($guess[$i] == $password[$i]) {
								$correct = $correct + 1;
						}
				}
				echo "Number of correct letters:".$correct;
		}
	}
	
	
	
	
	//Pick a random word to be a password
	//Option1: $x = rand(0, count($choices))
	//Option2: $x = rand(0,10)
	
	
	
?>

<html>
	<head></head>
	<body>
		<form action="game.php" method="POST">
			<label>Enter A Word</label>
			<input type="text" name="guess">
			<button type="submit">Go</button>
		</form>
	</body>
</html>