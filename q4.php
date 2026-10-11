<?php
$numero = readline("Digite um numero: ");
$contador = 1;

while ($contador <= 10) {
    echo $numero . " x " . $contador . " = " . ($numero * $contador) . "\n";
    $contador++;
}
?>
