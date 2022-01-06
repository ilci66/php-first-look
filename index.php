<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

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
$x = 5;
$y = 10;

function myTest() {
  // to use global variables inside functions
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?> 


</body>
</html> 