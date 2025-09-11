<?php
echo 'Arnold once said: "I\'ll be back"<br>';

echo "You deleted C:\\Windows\\System32<br>";

//stringi w cudzyslowach interpretują znaki modyfikacji
echo "To jest pierwszy wiersz\nTo jest drugi wiersz<br>";

//stringi w apostrofach nie interpretują znaków modyfikacji
echo 'To jest pierwszy wiersz\nTo jest drugi wiersz<br>';

echo <<<END
        a
      b
    c
\n<br>
END;
echo <<<END
        a
      b
    c
<br>
END;
//Nowdoc generuje sformatowany tekst bez interpretacji znaków modyfikacji
echo <<<'EOD'
        a
      b
    c
<br>
EOD;
//strlen, mb_strlen - długość stringa i liczba znaków
echo strlen("Grzegżółka");
echo "<br>";
echo mb_strlen("Grzegżółka");
echo "<br>";

//str_replace - zamiana fragmentu stringa
echo str_replace("Grzegżółka", "Kowalski", "Pan Grzegżółka to kolega");
echo "<br>";

//strpos - pozycja pierwszego wystąpienia podanego fragmentu stringa
echo strpos("Pan Kowalski to kolega", "Kowalski");
echo "<br>";

//funkcja print sluzy do generowania sformatowanego tekstu
$tekst = "Hello";
printf("[%s]\n", $tekst); // wypisze [Hello]
printf("[%10s]\n", $tekst); // wypisze [     Hello]
printf("[%-10s]\n", $tekst); // wypisze [Hello     ]  
printf("[%.3s]\n", $tekst); // wypisze [Hel]
printf("[%10.3s]\n", $tekst); // wypisze [       Hel
printf("[%-10.3s]\n", $tekst); // wypisze [Hel       ]
echo "<br>";
  
$n = 43951789;
printf("%%d = '%d'\n", $n);
echo "<br>";
printf("%%f = '%f'\n", $n);
echo "<br>";
printf("%%e = '%e'\n", $n);
echo "<br>";
printf("%%b = '%b'\n", $n);
echo "<br>";
printf("%%o = '%o'\n", $n);
echo "<br>";
printf("%%s = '%s'\n", $n);
echo "<br>";
printf("%%x = '%x'\n", $n);
?>