<?php
$myfile = fopen("webdictionary.txt", "r")
            or die("Umable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfie);
?>