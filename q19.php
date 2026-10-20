<?php
$soma = 0;

for ($i = 1; $i <= 5; $i++) {
    $nota = (float) readline("Digite a nota do aluno $i: ");
    $soma += $nota;
}

$media = $soma / 5;

echo "A média da turma é: " . number_format($media, 2, ',', '.') . "\n";
?>
