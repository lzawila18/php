<?php
$myfile = fopen("webdictionary.txt", "w")
            or die("Umable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
$txt = "Łukasz Zawiła\n";
fwrite($myfie, $txt);
fclose($myfie);
?>