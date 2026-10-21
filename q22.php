<?php
$total = 0;

for ($dia = 1; $dia <= 5; $dia++) {
    $vendas = (int) readline("Unidades vendidas no dia $dia: ");
    $total += $vendas;
}

echo "Total de unidades vendidas: $total\n";
?>
