<?php
$soma = 0;
$maior = null;

for ($dia = 1; $dia <= 7; $dia++) {
    $temperatura = (float) readline("Temperatura do dia $dia: ");

    $soma += $temperatura;

    if ($maior === null || $temperatura > $maior) {
        $maior = $temperatura;
    }
}

$media = $soma / 7;

echo "Temperatura média: " . number_format($media, 2, ',', '.') . " °C\n";
echo "Maior temperatura: $maior °C\n";
?>
