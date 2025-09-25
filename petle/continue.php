<?php
for($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue; // Pominięcie iteracji, gdy i osiągnie wartość 5
    }
    echo "Wartość i to: $i<br>";
}
echo "Pętla zakończona.";
?>
