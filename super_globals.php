<?php
// $x = 75;
// $y = 25;
// function addition() {
//   $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }
// addition();
// echo $z . "  "; 
// echo $y;

// $_SERVER is a PHP super global variable
// which holds information about headers, 
// paths, and script locations. 
// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['HTTP_REFERER'];
// echo $_SERVER['HTTP_USER_AGENT'];
// echo $_SERVER['SCRIPT_NAME'];
// so many more 
?>


<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
// PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // collect value of input field, (name value is taken)
//   $name = $_REQUEST['fname'];
//   if (empty($name)) {
//     echo "Name is empty";
//   } else {
//     echo $name;
//   }
// }
?>
</body>
</html> 

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   // collect value of input field
//   $name = $_POST['fname'];
//   if (empty($name)) {
//     echo "Name is empty";
//   } else {
//     echo $name;
//   }
// }
?>
</body>
</html> 

<!-- PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get". -->
<html>
<body>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>
</html> 