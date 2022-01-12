<html>
<body>

<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Gonna get some info from another file</p>
<p>With include if the file is not there the execution will continue</p>
<?php include 'footer.php';?>

<p>this will cause a fatal error</p>
<?php require 'noFileExists.php';
echo "I have a $color $car.";
?>

</body>
</html> 