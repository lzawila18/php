<?php
$plik=fopen("owoce.csv", "r");
$wiersz=fgets($plik);
$owoce=explode(";", $wiersz); //tablica
foreach($owoce as $owoc){
    echo $owoc . "<br>";
}   
var_dump($owoce);
?>