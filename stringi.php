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
echo strlen("Ala ma kota") . "<br>";
echo mb_strlen("Ala ma kota<br>") . "<br>";
  
?>