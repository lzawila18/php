<?php
$myfile = fopen("webdictionary.txt", "r")
            or die("Umable to open file!");
echo fgets($myfile,filesize("webdictionary.txt"));
fclose($myfie);
?>