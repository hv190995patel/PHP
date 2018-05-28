<h1>PHP BASICS</h1>

<?php
//Code Here

//Comments
/* comments */

//Variables
$x = 25;
$y = "harsh";
$z = 30.36;
$h = $x;
 /*
 //output to screen
  echo $x;
  //Adding css 
 echo "<h2 style='color:red'>HELLO</h2>";
 echo "Hello" . "Goodbye";
 echo $x + $z;
 */
 
 //If Statements
$abc = 30;
 if ($abc < 25) {
	echo "HELLO <BR>";
 } 
 else if($abc > 27) {
	 echo "Apple <BR>";
 }
 else {
	 echo "GOODBYE <BR>";
 }
 
 //For Loop  -> Loop That Repeats Fixed NUmber of Time 
//			-> Tell The loop how many times you waana loop

	for($i=0;$i<5;$i++) {
		//	echo "HELLO! <BR>";
	}
//While loop-> Loop that repeats until the condition is met
//			->Doesn't Stop untill a condition is met

$b = 5;
while($b < 8) {
	//echo "BYE! <br>";
	$b = $b + 1;
}

//Function
function sayHello() {
	echo "ABACAXI<br>";
	echo "ANANAS<br>";
	echo "PINEAPPLE<br>";
}

function pineapple($lang) {
	if($lang == 'gujarati' || $lang == 'punjabi') {
		echo "ANANAS";
	}
	else if($lang == 'malayalam') {
			echo "KAITHAKACHA";
	}
	else if($lang == "br") {
		echo "ABACAXI";
	}
	else if($lang == "viet") {
		echo "DUA";
	}
	else {
		sayHello();
	}
}	

//pineapple("gujarati");

$w = "viet";
//pineapple($w);


///Arrays///

//Create Empty Arrays
$animals = [];
$animals = array();

//Add Thing to the array
$animals[] = "dog";
$animals[] = "cat";

//Another Method to add Array
//This will add to the end of the array
array_push($animals,"fox");


//Length of the array
 echo "The array lenght is: " .count($animals). "<br>";
 
 
 ////Assopciative Array///
 $easy = array (
	"en" => "easy",
	"fr" => "facile",
	"vt" => "de",
	"br" => "facil",
	"my" => "elupam",
	"gu" => "saral",
	"pu" => "sokha"
 );
 print_r($easy);
 
 //Single Item from dictionary
 echo $easy["my"]. "<br>";
 
 //looping through an associative array
 foreach($easy as $k => $v) {
	 echo "Key Is: " . $k. "<br>";
	  echo "VAlue Is: " . $v. "<br>";
	   echo "------- " . "<br>";
 }
//Command to output array
//print_r($animals);
?>


