<?php
$myfile = fopen("abc.txt", "r") or die("Unable to open file!");
$id = fread($myfile,filesize("abc.txt"));
echo "$id";
$num = intval("$id")+1;

fclose($myfile);
$myfile = fopen("abc.txt", "w") or die("Unable to open file!");

fwrite($myfile, $num);
fclose($myfile);


?>
