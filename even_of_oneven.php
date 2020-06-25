<?php


        $line = readline("Vul een getal in: ");
        $rest = $line % 2;
if ($rest == 0) {
            echo  "Dit is een even getal";
} elseif ($rest != 0) {
        echo "Dit is een oneven getal";
}
?>