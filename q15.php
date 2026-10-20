<?php
$num = (int) readline("Digite um número: ");

for ($i = 1; $i <= 10; $i++) {
    $resultado = $num * $i;
    echo "$num x $i = $resultado\n";
}
?>
