<?php
$urodziny = '2006-11-08';

list($rok, $miesiac, $dzien) = explode('-', $urodziny);

$czas = mktime(0, 0, 0, $miesiac, $dzien, $rok);

$dzienEng = date('l', $czas);

echo "Dzień tygodnia urodzin: $dzienEng";
?>