<?php
$contador = 1;
$soma = 0;

while ($contador <= 5) {
    $nota = readline("Digite a nota: ");
    $soma = $soma + $nota;
    $contador++;
}

echo "Soma das notas: " . $soma;
?>
