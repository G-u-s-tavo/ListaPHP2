<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Registre a nota do aluno $i.\n";
    $nota = (float) readline("Nota: ");

    echo "Aluno $i: nota registrada = $nota\n";
}
?>
