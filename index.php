<!DOCTYPE html>
<html>
<body>
  <h1>My first PHP page</h1>
</body>
</html> 

<?php
// ECHO "Hello World!<br>";
// echo "Hello World!<br>";
// EcHo "Hello World!<br>";
?>
<?php
// variables are case sensitive 
// $color = "red";
// echo "My car is " . $color . "<br>";
// echo "My house is " . $COLOR . "<br>";
# echo "My boat is " . $coLOR . "<br>";
/* 
multiple 
lines 
commented
*/
?>
<?php
// $y = 10.5;
// $age = 22;
// $AGE = 55;
// // the usage of "." is kinda weird but ok
// echo "the y ==> " . $y . "  age ==>" . $age . "  AGE ==>" . $AGE ;
?>
<?php
// a lot easier than the one I wrote above
// $txt = "this be a variable!!!";
// echo "now $txt";
?>
<?php /* $aq = 4;$gq = 6;echo $aq + $gq; */ ?> 
<?php
// throwing an error as it logically should
// $aq = 4 + "asd"
// echo $aqg
?> 
<?php
// $gl = 5; // global scope

// function myTest() {
//   $la = 7;
//   // using x inside this function will generate an error
//   // echo "<p>Variable x inside function is: $gl $la</p>";
//   echo "<p>Variable la inside function is: $la</p>";
// }
// myTest();

// echo "<p>Variable x outside function is: $gl</p>";
?> 
<?php
// $x = 5;
// $y = 10;
// function myTest() {
//   // to use global variables inside functions
//   global $x, $y;
//   $y = $x + $y;
// }
// myTest();
// echo $y; // outputs 15
?> 
<?php
// $x = 5;
// $y = 10;
// // $GLOBALS[index] ==> can use globals this way as well
// function myTest() {
//   $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// myTest();
// echo $y; // outputs 15
?> 
<?php
// function myTest() {
//   // with static keyword the local variable can be used outside the 
//   // function, it persists like the example here
//   static $x = 0;
//   echo "    x is ==> " . $x;
//   $x++;
// }
// myTest();
// myTest();
// myTest();
?> 
<?php
// echo "<h2>PHP is Fun!</h2>";
// echo "Hello world!<br>";
// echo "I'm about to learn PHP!<br>";
// echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>
<?php
// $txt1 = "Learn PHP";
// $txt2 = "W3Schools.com";
// $x = 5;
// $y = 4;

// print "<h2>" . $txt1 . "</h2>";
// print "Study PHP at " . $txt2 . "<br>";
// print $x + $y;
?> 
<?php
// $x = 5985;
// $y = 10.365;
// $z = false;
// $cars = array("Volvo","BMW","Toyota");
// var_dump($cars);
// var_dump($x);
// var_dump($y);
// var_dump($z);
?>
<?php
// class Car {
//   public $color;
//   public $model;
//   public function __construct($color, $model) {
//     $this->color = $color;
//     $this->model = $model;
//   }
//   public function message() {
//     return "My car is a " . $this->color . " " . $this->model . "!";
//   }
// }

// $myCar = new Car("black", "Volvo");
// echo $myCar -> message();
// echo "<br>";
// $myCar = new Car("red", "Toyota");
// echo $myCar -> message();
?> 
<?php
// class Car {
//   public $color;
//   public $model;
//   public function __construct($color, $model) {
//     $this->color = $color;
//     $this->model = $model;
//   }
//   public function message() {
//     return "My car is a " . $this->color . " " . $this->model . "!";
//   }
// }
// $myCar = new Car("black", "Volvo");
// echo $myCar -> message();
// echo "<br>";
// $myCar = new Car("red", "Toyota");
// echo $myCar -> message();
?> 
<?php 
// echo "length is ==> " . strlen("Hello world!");
// echo "   word count is ==>  " . str_word_count("Hello world!");
// echo "  now this is kewl ==>  " . strrev("Hello world!");
// echo "  finds the index ==>  " . strpos("Hello world!", "world");
?>
<?php
// echo str_replace("world", "Dolly", "Hello world!"); 
// outputs Hello Dolly!
?> 
<?php
// var_dump(is_int(45.55));
// var_dump(PHP_FLOAT_MIN, PHP_FLOAT_MAX );
// var_dump(is_int(PHP_FLOAT_MIN));
// var_dump(is_infinite(1.9e411));
// // string + integer doesn't throw an error, cool
// var_dump("59.85" + 100);
// var_dump(is_numeric("59.85" + 100));
?>
<?php
// this is array in php
// echo(min(0, 150, 30, 20, -8, -200));  // returns -200
// echo(max(0, 150, 30, 20, -8, -200));  // returns 150
// echo(abs(-6.7));  // returns 6.7
// echo(sqrt(64));  // returns 8
// to the closest integer
// echo(round(0.60));  // returns 1
// echo(round(0.49));  // returns 0

// this is out of all the numbers, unlike js'
// echo(rand());

// echo(" & " . rand(10, 100));
?> 
<?php
// constants are defined like this, case sensitive too
// constants are global can be used accross the script
// define("GREETING", "Welcome to W3Schools.com!");
// define("GREETING", "Welcome to W3Schools.com!", true);
// echo GREETING;
// function myTest() {
//   echo GREETING;
// }
// myTest();

// defining an array like this
// define("cars", [
//   "Alfa Romeo",
//   "BMW",
//   "Toyota"
// ]);
// echo cars[0];
?> 
<?php
// <!-- Gonna write the interesting stuff i see in the docs here -->
// <!-- 
//   ++$x 	Pre-increment 	Increments $x by one, then returns $x
//   $x++ 	Post-increment 	Returns $x, then increments $x by one 

//   xor 	Xor 	$x xor $y 	True if either $x or $y is true, but not both

//   . 	Concatenation 	$txt1 . $txt2 	Concatenation of $txt1 and $txt2
//   .= 	Concatenation assignment 	$txt1 .= $txt2 	Appends $txt2 to $txt1

// -->
?>

<?php
// can check the equality and even the order
// $x = array("a" => "red", "b" => "green");  
// $y = array("a" => "red", "b" => "green");  
// $y = array("b" => "green", "a" => "red" );  
// $y = array("c" => "blue", "d" => "yellow");  
// var_dump($x == $y);
// var_dump($x === $y);
?>  
<?php
// Ternary operator also exists here( ? : )
// ?? 	Null coalescing 	$x = expr1 ?? expr2 	
// Returns the value of $x.
// The value of $x is expr1 if expr1 exists, and is not NULL.
// If expr1 does not exist, or is NULL, the value of $x is expr2.
// Introduced in PHP 7
?>  

<?php
// $t = date("H");

// if ($t < "20") {
//   echo "Hour less than 20";
// } elseif ("22" > $t && $t > "20") {
//   echo "21";
// }
// else{
//   echo "Else!";
// }
?> 

<?php
// Switch is very similar in javascript
// $favcolor = "red";

// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     break;
//   case "blue":
//     echo "Your favorite color is blue!";
//     break;
//   case "green":
//     echo "Your favorite color is green!";
//     break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
      // default doesn't take the break
// }
?> 

<?php
// LOOPS

// while loop is also similar to the js'
// $x = 1;
// while($x <= 5) {
//   echo "The number is: $x <br>";
//   $x++;
// }
// echo "The number is: $x <br>";
// do while executes the code once and then checks the condition
// do {
//   echo "The number is: $x <br>";
//   $x++;
// } while ($x <= 5);
// echo "The number is: $x <br>";

?> 