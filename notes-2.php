<?php declare(strict_types=1); // strict requirement
// strict declaration must be on line 1

// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// this throws a fatal error because the types dn't match
// echo addNumbers(5, "5 days");
// echo addNumbers(5, 7);
// since strict is enabled and "5 days" is not an integer, an error will be thrown

// function setHeight(int $minheight = 50) {
//   echo "The height is : $minheight  ";
// }
// setHeight(350);
// setHeight(); // will use the default value of 50
// setHeight(135);
// setHeight(80);

// return can also have types, like typescript (): type
// function sum(int $x, int $y): int {
//   $z = $x + $y;
//   // return logic is the same
//   return (int)$z;
// }
// echo "5 + 10 = " . sum(5, 10) . "  ";
// echo "7 + 13 = " . sum(7, 13) . "  ";
// echo "2 + 4 = " . sum(2, 4);

// the fucntion returns the integer, not the deciaml 
// part, a little strange looking but ok 
// function addNumbers(float $a, float $b) : int {
//   // type should mathc the the defined above 
//   return (int)($a + $b);
// }
// echo addNumbers(1.2, 5.2); 

// the value changes with the usage of "&"
function add_five(&$value) {
  $value += 5;
}
$num = 2;
add_five($num);
echo "instead of 2 the num is " . $num;
?>