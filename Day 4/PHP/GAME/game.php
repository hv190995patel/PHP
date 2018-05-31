<?php
	session_start();
	define("TOTAL_WORDS", 10);
	
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		//---------- MAX ATTEMPTS
		$_SESSION["attempts"] = 4;
		// --------- generate new words
		
		
		// read words from a file and put in array
		$file = file_get_contents("simplewords.txt", true);
		$words = str_word_count($file, 1);

		// get lenght of array
		$length = count($words);
		
		
		$positions = array_rand($words, TOTAL_WORDS);
		$choices = [];
		
		for ($i = 0; $i < count($positions); $i++) {
		  $x = $positions[$i];
		  array_push($choices, $words[$x]);
		}	
		var_dump($choices);
		$_SESSION["choices"] = $choices;
		// pick a random word to be a password!
		// OPTION 1: $x = rand(0, count($choices)-1);
		// OPTION 2: $x = rand(0, 10);
		$x = rand(0, count($choices)-1);
		$_SESSION["password"] = $choices[$x];
		//$password = ;
		
		// print out the words choices
		for ($j=0; $j < count($choices); $j++) {
			echo $choices[$j] . "<br>";
		}
		
		echo "random password: ".  $_SESSION["password"] ."<br>";
	}
	else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		var_dump($_SESSION["choices"]);
		print_r($_SESSION["choices"]);
		$choices = $_SESSION["choices"];
		echo "<ul>";
		for($i =0 ; $i <count($choices);$i++)
		{
			echo"<li>";
			echo $choices[$i] . "<br>";
			echo "</li>";
		}
		echo"</ul>";
		
		echo "============<br>";

		// 1. get the word from the UI
		$guess = $_POST["guess"];
		echo $guess . "<br>";
		
		// 2. Compare the guess to the password;
		if ($guess == $_SESSION["password"]) {
			//Correct
			echo "WINNER!";
		}
		else {
			//Wrong
			/*
				1. Check number of atempts
				if not then reduce
			*/
			
			
			if($_SESSION["attempts"] == 0) {
				echo "GAME OVER<br>";
			}
			else
			{
				$_SESSION["attempts"] = $_SESSION["attempts"] - 1;
				for ($i = 0; $i < 4; $i++) {
					if ($guess[$i] == $_SESSION["password"][$i]) {
						$correct = $correct + 1;
					}
				}
				echo "Number of correct letters: " . $correct."<br>";
				echo "You Have ".$_SESSION["attempts"]."Attempts left<br>";
			}
				
			$correct = 0;
			
		}
	}
	
?>



<html>
<head>

</head>
<body>

<form action="game.php" method="POST">
	<label> Enter a word: </label>
	<input name="guess" type="text">
	<button type="submit">Go!</button>
</form>

<a href="game.php">STart New Game</a>

</body>
</html>
