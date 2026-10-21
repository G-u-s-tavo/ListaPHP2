<?php
$pequenos = 0;
$medios = 0;
$grandes = 0;

for ($lote = 1; $lote <= 10; $lote++) {
    $peso = (float) readline("Peso médio do lote $lote em gramas: ");

    if ($peso < 100) {
        echo "Lote $lote: pequeno.\n";
        $pequenos++;
    } elseif ($peso <= 200) {
        echo "Lote $lote: médio.\n";
        $medios++;
    } else {
        echo "Lote $lote: grande.\n";
        $grandes++;
    }
}

echo "\nTotal de lotes pequenos: $pequenos\n";
echo "Total de lotes médios: $medios\n";
echo "Total de lotes grandes: $grandes\n";
?>
