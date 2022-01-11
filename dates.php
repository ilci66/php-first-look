<?php 
// formatting is convenient
// echo "Today is " . date("Y/m/d") . "   ";
// echo "Today is " . date("Y.m.d") . "   ";
// echo "Today is " . date("Y-m-d") . "   ";
// echo "Today is " . date("l") . "   ";

?>
<?php 
// echo date("Y") . "  ";
?>
<?php
// hour min second, very convenient
// echo "The time is " . date("h:i:sa");
?> 
<?php
// $d=mktime(11, 14, 54, 8, 12, 2014);
// echo "Created date is " . date("Y-m-d h:i:sa", $d);
?> 
<?php
// $d=strtotime("10:30pm April 15 2014");
// echo "Created date is " . date("Y-m-d h:i:sa", $d);
?> 
<?php
// php is awesome with dates
// $d=strtotime("tomorrow");
// echo date("Y-m-d h:i:sa", $d) . "   ";

// $d=strtotime("next Saturday");
// echo date("Y-m-d h:i:sa", $d) . "   ";

// $d=strtotime("+3 Months");
// echo date("Y-m-d h:i:sa", $d) . "   ";
?> 
<?php
$d1=strtotime("July 04");
echo "in utx ==> " . $d1 . "-----";
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?> 