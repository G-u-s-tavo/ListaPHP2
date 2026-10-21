<?php
$valor = (int) readline("Digite o valor do saque em reais: ");

if ($valor <= 0 || $valor % 2 != 0) {
    echo "Saque não pode ser realizado com o valor exato.\n";
} else {
    $notas10 = 0;
    $notas2 = 0;

    for ($restante = $valor; $restante >= 10; $restante -= 10) {
        $notas10++;
    }

    $notas2 = $restante / 2;

    echo "Notas de R$ 10,00: $notas10\n";
    echo "Notas de R$ 2,00: $notas2\n";
}
?>
