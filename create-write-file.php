<?php 
// $myfile = fopen("testfile.txt", "w") 
?>
<?php
// creates a file 
// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "John Doe\n";
// // fwrite writes inside the file created
// fwrite($myfile, $txt);
// $txt = "Jane Doe\n";
// fwrite($myfile, $txt);
// fclose($myfile);
?> 
<?php
// erasing all and adding new info into the file I created above
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
?> 