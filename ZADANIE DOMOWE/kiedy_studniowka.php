<?php
$matura = mktime(0,0,0,05,04,2026);
$dni= 100*24*60*60;
echo "<br>Studniówka będzie: ". 
    date("d.m.Y", $matura-$dni);

    ?>