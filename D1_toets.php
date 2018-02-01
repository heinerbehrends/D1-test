<?php
// Exercise1
/*  echo​ "Sed ut perspiciatis unde omnis iste natus error sit
voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
dicta sunt explicabo.";
*/
// for​($i=0; $i<100; $i++) {}


// Excercise 2
// $a = 1000;
// $b = 1200;
// $c = 1400;
//
// echo "The sum of the three numbers is " . ($a + $b + $c);

// Exercise 3
// $number1 = 100;
// $number2 = 500;
// function​ addNumbers​() {
//   echo​ ($number1 + $number2);
// }
// the variables are not passed to the function
// $number1 = 100;
// $number2 = 500;
// function​ addNumbers​($number1, $number2) { // syntax highlight shows addNumbers is not a function
// }
// addNumbers​($number1, $number2);

// function addNumbers() {
//   echo​ $number1 + $number2;
// }
// echo addNumbers(100, 500);

// Exercise 4
$testString = "Hello World";
echo strtolower($testString);

// Exercise 5
$name = "George";
$age = 50;
$male = True​;
$list = [1,2,5,8,9];

// echo "Value is " . gettype($name);
// echo "Value is " . gettype($age);
// echo "Value is " . gettype($male); // returns error undefined constant
// echo "Value is " . gettype($list);

// Excercise 6

$sum = 5 + 10;
$subtraction = 5 - 10;
$division = 5 / 10;
$product = 5 * 10;
$exp = 5 ** 10;

// Exercise 7
$str = "the quick brown fox jumps over the lazy dog.";
$newstr = str_replace("the", "That", "the quick brown fox jumps over the lazy dog.", $count); // replaces both the's
// echo $newstr;

// Exercise 8
// $temperature = 10;
// if ($temperature <= 50) {
//   echo "temperature is low";
// }
// else {
//   echo "temperature is ok";
// }

// Exercise 9
$cities = array("New York City", "Seoul", "Tokyo", "Mexico City", "Shanghai", "Lagos", "Cairo", "Buenos Aires"," London", "Mumbai");
natcasesort($cities);


// Exercise 11


?>
