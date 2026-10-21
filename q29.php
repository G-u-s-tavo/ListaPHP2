<?php
for ($pedido = 1; $pedido <= 8; $pedido++) {
    $compra = (float) readline("Valor da compra do pedido $pedido: R$ ");

    if ($compra >= 300) {
        $frete = 0;
    } elseif ($compra >= 150) {
        $frete = 15;
    } else {
        $frete = 25;
    }

    echo "Pedido $pedido - Frete: R$ "
        . number_format($frete, 2, ',', '.') . "\n";
}
?>
