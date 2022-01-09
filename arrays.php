<?php
// $cars = array("Volvo", "BMW", "Toyota");
// // echo count($cars);
// $cars[0] = "Ferrari";
// $cars[1] = "Bentley";
// $cars[2] = "Subaru";
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// for($x = 0; $x < count($cars); $x++) {
//   echo $cars[$x];
//   echo "  ";
// }

// ASSOCIATIVE ARRAYS
// can be defined in both ways
// $age =array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// $age['Peter'] = "35";
// $age['Ben'] = "37";
// $age['Joe'] = "43"; 
// // echo "Peter is " . $age['Peter'] . " years old.";
// foreach($age as $key => $val) {
//   echo "Key=" . $key . ", Value=" . $val;
//   echo " ||  ";
// }

// MULTIDIMENSIONAL ARRAYS
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo $cars[2][1];
?> 