<?php
$acimaLimite = 0;

for ($aluno = 1; $aluno <= 12; $aluno++) {
    $faltas = (int) readline("Faltas do aluno $aluno: ");

    if ($faltas > 15) {
        echo "Aluno $aluno: acima do limite.\n";
        $acimaLimite++;
    } else {
        echo "Aluno $aluno: dentro do limite.\n";
    }
}

echo "Alunos acima do limite: $acimaLimite\n";
?>
