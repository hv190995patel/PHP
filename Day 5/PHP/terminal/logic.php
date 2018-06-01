<?php

	define("TOTAL_WORDS", 10);

  function showWords($words) {
    echo "<ul>";
    for ($i = 0; $i < count($words); $i++) {
      echo "<li>";
        echo "<span class='selectedWord'>";
          echo $words[$i];
        echo "</span>";
        echo "<br>";
      echo "</li>";

    }
    echo "</ul>";
  }

	if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // -------- lets do max attempts!
		$_SESSION["attempts"] = 4;

		// --------- generate new words

		// read words from a file and put in array
		$file = file_get_contents("simplewords.txt", true);
		$words = str_word_count($file, 1);

		// get lenght of array
		$length = count($words);

		// pick 10 random random word
		$positions = array_rand($words, TOTAL_WORDS);
		$choices = [];
		for ($i = 0; $i < count($positions); $i++) {
		  $x = $positions[$i];
		  array_push($choices, $words[$x]);
		}

		// store the random words into a session variable
		$_SESSION["choices"] = $choices;

		// pick a random word to be a password!
		// OPTION 1: $x = rand(0, count($choices)-1);
		// OPTION 2: $x = rand(0, 10);
		$x = rand(0, count($choices)-1);

		$password = $choices[$x];
		$_SESSION["password"] = $password;

		// print out the words choices
    showWords($choices);

		//echo "random password: ".  $password ."<br>";
	}
	else if ($_SERVER["REQUEST_METHOD"] == "POST") {

		// @UI NONSENSE: print out the list of possible words
		// for user to pick from
		$choices = $_SESSION["choices"];
		showWords($choices);

    // 1. get password and guess & convert both to uppercase
    // i am converting to uppercase so i can match the User Interface
		$password = strtoupper($_SESSION["password"]);
		$guess = strtoupper($_POST["guess"]);

		// 2. Compare the guess to the password;
		if ($guess == $password) {
			// correct
      $_SESSION["result"] = "win";

      ?>
        <script type="text/javascript">
          window.location.href = 'result.php';
        </script>
      <?php

		} // this is the closing brakcet for the if $guess = $password tag
		else {
      // wrong
      $_SESSION["attempts"] = $_SESSION["attempts"] - 1;

			if ($_SESSION["attempts"] == 0) {
        $_SESSION["result"] = "lose";

        ?>
          <script type="text/javascript">
            window.location.href = 'result.php';
          </script>
        <?php

      }  // this is the closing brakcet for the if $session_attempts = 0 tag

			else {
				// wrong

				$correct = 0;
				for ($i = 0; $i < 4; $i++) {
					if ($guess[$i] == $password[$i]) {
						$correct = $correct + 1;
					}
				}
				echo "ACCESS DENIED: " . $correct . "/4  <br>";


				echo "You have: " . $_SESSION["attempts"] . " attempts left <br>";
			}
		}
	}

?>
