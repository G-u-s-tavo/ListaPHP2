<?php
$qtdModelos = (int) readline("Quantidade de modelos de IA: ");
$qtdTestes = (int) readline("Quantidade de testes por modelo: ");

if ($qtdModelos <= 0 || $qtdTestes <= 0) {
    echo "As quantidades devem ser maiores que zero.\n";
} else {
    $maiorMedia = null;
    $melhorModelo = 0;

    for ($modelo = 1; $modelo <= $qtdModelos; $modelo++) {
        $soma = 0;

        echo "\n--- Modelo $modelo ---\n";

        for ($teste = 1; $teste <= $qtdTestes; $teste++) {
            do {
                $nota = (float) readline(
                    "Nota do teste $teste (0 a 100): "
                );

                if ($nota < 0 || $nota > 100) {
                    echo "Nota inválida. Digite de 0 a 100.\n";
                }
            } while ($nota < 0 || $nota > 100);

            $soma += $nota;

            if ($nota < 50) {
                echo "Classificação: baixa\n";
            } elseif ($nota < 80) {
                echo "Classificação: moderada\n";
            } else {
                echo "Classificação: alta\n";
            }
        }

        $media = $soma / $qtdTestes;

        echo "Média do modelo $modelo: "
            . number_format($media, 2, ',', '.') . "\n";

        if ($maiorMedia === null || $media > $maiorMedia) {
            $maiorMedia = $media;
            $melhorModelo = $modelo;
        }
    }

    echo "\n--- Resultado final ---\n";
    echo "Modelo com maior média: Modelo $melhorModelo\n";
    echo "Maior média: "
        . number_format($maiorMedia, 2, ',', '.') . "\n";
}
?>
