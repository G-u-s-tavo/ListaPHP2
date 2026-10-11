<?php
$numero = 1;
$soma = 0;

while ($numero != 0) {
    $numero = readline("Digite um numero (0 para sair): ");

    $soma = $soma + $numero;
}

echo "Soma: " . $soma;
?>
