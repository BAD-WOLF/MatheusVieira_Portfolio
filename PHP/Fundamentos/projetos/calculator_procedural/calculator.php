<?php

// Função para somar dois números
function add($a, $b) {
    return $a + $b;
}

// Função para subtrair dois números
function subtract($a, $b) {
    return $a - $b;
}

// Função para multiplicar dois números
function multiply($a, $b) {
    return $a * $b;
}

// Função para dividir dois números
function divide($a, $b) {
    if ($b == 0) {
        return "Erro: Divisão por zero!";
    }
    return $a / $b;
}

// Função para exibir o menu de operações
function displayMenu() {
    echo "Escolha uma operação:" . PHP_EOL;
    echo "1. Soma" . PHP_EOL;
    echo "2. Subtração" . PHP_EOL;
    echo "3. Multiplicação" . PHP_EOL;
    echo "4. Divisão" . PHP_EOL;
    echo "0. Sair" . PHP_EOL;
}

// Função para processar a escolha do usuário
function processChoice($choice, $num1, $num2) {
    switch ($choice) {
        case 1:
            return "Resultado da Soma: " . add($num1, $num2);
        case 2:
            return "Resultado da Subtração: " . subtract($num1, $num2);
        case 3:
            return "Resultado da Multiplicação: " . multiply($num1, $num2);
        case 4:
            return "Resultado da Divisão: " . divide($num1, $num2);
        default:
            return "Opção inválida!";
    }
}

// Programa principal
do {
    displayMenu();
    $choice = intval(readline("Digite o número da operação desejada (0 para sair): "));

    if ($choice === 0) {
        echo "Saindo da calculadora..." . PHP_EOL;
        break;
    }

    if ($choice >= 1 && $choice <= 4) {
        $num1 = floatval(readline("Digite o primeiro número: "));
        $num2 = floatval(readline("Digite o segundo número: "));
        echo processChoice($choice, $num1, $num2) . PHP_EOL;
    } else {
        echo "Opção inválida, tente novamente!" . PHP_EOL;
    }
} while (true);


