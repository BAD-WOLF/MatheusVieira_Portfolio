<?php

// Solicita as notas do aluno
echo "Digite a primeira nota: ";
$nota1 = (float) fgets(STDIN);

echo "Digite a segunda nota: ";
$nota2 = (float) fgets(STDIN);

echo "Digite a terceira nota: ";
$nota3 = (float) fgets(STDIN);

// Calcula a média aritmética das notas
function calcularMedia($nota1, $nota2, $nota3) {
    return ($nota1 + $nota2 + $nota3) / 3;
}

$media = calcularMedia($nota1, $nota2, $nota3);

// Verifica a situação do aluno com base na média
function verificarSituacao($media) {
    if ($media >= 7) {
        return "Aprovado";
    } elseif ($media >= 5) {
        return "Recuperação";
    } else {
        return "Reprovado";
    }
}

$situacao = verificarSituacao($media);

// Exibe a média e a situação do aluno
echo "A média do aluno é: " . number_format($media, 2) . PHP_EOL;
echo "Situação: $situacao" . PHP_EOL;

?>

