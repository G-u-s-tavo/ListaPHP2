<?php
$num = (int) readline("Digite um número inteiro positivo: ");

if ($num < 1) {
    echo "Digite um número positivo.\n";
} else {
    for ($i = 0; $i <= $num; $i += 2) {
        echo $i . "\n";
    }
}
?>
