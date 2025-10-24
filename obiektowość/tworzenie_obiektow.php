<?php
include 'obiekt_schemat.php';
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple'); // tworzenie obiektu
$banana->set_name('Banana'); //tworzenie obiektu

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>