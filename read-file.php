<?php
// echo readfile("object-types.csv");
?> 
<?php
// one to test the error
// $myfile = fopen("object-tyes.csv", "r") or die("Unable to open file!");
// $myfile = fopen("object-types.csv", "r") or die("Unable to open file!");

// echo fread($myfile,filesize("object-types.csv"));
// fclose($myfile);

// $myfile = fopen("object-types.csv", "r") or die("Unable to open file!");
// // gets the first line, can be used to see the structure 
// echo fgets($myfile);
// fclose($myfile);
?> 
<?php
$myfile = fopen("object-types.csv", "r") or die("Unable to open file!");
// Output one line until end-of-file, it returns a boolean value cheking if the end of the file is reached
while(!feof($myfile)) {
  echo fgets($myfile) . " ";
}
fclose($myfile);
?> 