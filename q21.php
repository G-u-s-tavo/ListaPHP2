<?php
$total = 0;

for ($dia = 1; $dia <= 7; $dia++) {
    $consumo = (float) readline("Consumo do dia $dia em litros: ");
    $total += $consumo;
}

echo "Consumo total da semana: $total litros\n";
?>
