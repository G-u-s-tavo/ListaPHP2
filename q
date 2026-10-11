<?php
$secreto = 616;
$numero = 0;

while ($numero != $secreto) {
    $numero = readline("Adivinhe se conseguir, mas se conseguir é bruxa: ");

    if ($numero > $secreto) {
        echo "O número digitado é maior.\n";
    }

    if ($numero < $secreto) {
        echo "O número digitado é menor.\n";
    }
}

echo "Parabéns! Você acertou e vai queimar!";
?>
