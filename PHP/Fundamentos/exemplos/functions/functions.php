<?php

// Exemplo simples de uma função
// A função sayHello não recebe parâmetros e simplesmente imprime uma mensagem na tela
function sayHello() {
    echo "Hello, World!" . PHP_EOL;
}

sayHello();

// Função com parâmetro
// A função greet recebe o parâmetro $name e imprime uma mensagem personalizada
function greet($name)  {
    echo "Hello, $name!" . PHP_EOL;
}

greet("Matheus");

// Função com retorno
// A função add recebe dois parâmetros ($a e $b) e retorna a soma desses valores
function add($a, $b) {
    return $a + $b;
}

$result = add(2, 3);  // Chama a função, que retorna a soma de 2 e 3
echo "A soma é: $result" . PHP_EOL;

// Demonstrando escopo de variáveis
// O escopo define onde uma variável pode ser acessada
// Variáveis podem ser locais, quando estão dentro de uma função, ou globais, quando são acessíveis em qualquer parte do código
$globalVar = "Estou no escopo global.";  // Variável global

function demoScope() {
    $localVar = "Estou no escopo local.";  // Variável local
    echo $localVar . PHP_EOL;
}

demoScope();  // Chama a função e exibe a variável local
echo $globalVar . PHP_EOL;

// Parâmetro com valor padrão
// A função welcome tem um valor padrão para o parâmetro $name
// Caso nenhum valor seja passado, ela utilizará "Visitante" como valor padrão
function welcome($name = "Visitante") {
    echo "Bem-vindo, $name!" . PHP_EOL;
}

welcome();
welcome("Matheus"); 

// Passagem por valor
// O PHP, por padrão, passa parâmetros para funções por valor
// Ou seja, a função recebe uma cópia do valor da variável, e alterações feitas dentro da função não afetam a variável original.
function modifyValue($param) {
    $param += 5;
}

$value = 10;
modifyValue($value);
echo "Valor, após 'passagem por valor': $value" . PHP_EOL;


// Passagem por referência
// Podemos usar o símbolo "&" para passar uma variável por referência, permitindo que a função altere o valor da variável original
function modifyReference(&$param) {
    $param += 5;
}

$refValue = 10;
modifyReference($refValue);
echo "Valor após passagem por referência: $refValue" . PHP_EOL;


// Exemplo de recursão
// È quando uma função chama a si mesma dentro de sua própria definição.
// Um caso comum de uso é o cálculo do fatorial de um número.
function factorial($number) {
    // Caso base: quando o número for 1, retorna 1.
    if ($number === 1) {
        return 1;
    }

    // Caso recursivo: multiplica o número atual pelo resultado da função com (número - 1).
    return $number * factorial($number - 1);
}

// Testando a função de recursão para calcular o fatorial de 5
echo "Fatorial de 5 é: " . factorial(5) . PHP_EOL;



// Variável fora do escopo da função
 $outsideVariable = 10;

// Função anônima que usa a variável externa com a diretiva "use"
// Aqui, o "use" permite que a função anônima acesse a variável $outsideVariable fora de seu escopo (Ainda continua sendo por valor, não por rêferencia)
// O valor da $outsideVariable nao vai ser alterad
$anonymousFunction = function ($factor) use ($outsideVariable) {
  $outsideVariable *= $factor;
  return $outsideVariable;
};

// Exemplo de chamada da função anônima
echo "Função Anônima: " . $anonymousFunction(2) . PHP_EOL;

// Arrow function também pode acessar variáveis de escopo externo
$arrowFunction = fn($factor) => $outsideVariable * $factor;

// Exemplo de chamada da arrow function
echo "Arrow Function: " . $arrowFunction(3) . PHP_EOL;

// Agora com uma variável mutável
$mutableVariable = 5;

// Função anônima que altera o valor da variável fora de seu escopo utilizando referência
// A variável $mutableVariable é passada por referência, o que permite modificar seu valor original
$modifyValue = function () use (&$mutableVariable) {
    $mutableVariable += 10;
};

// Chama a função para modificar a variável
$modifyValue();
echo "Novo valor da variável após Função Anônima: $mutableVariable" . PHP_EOL;

// Arrow function que não modifica a variável externa diretamente, mas pode usar o valor da mesma
$newArrowFunction = fn() => $mutableVariable + 5;

// Exemplo de chamada da nova arrow function
echo "Arrow Function (sem modificar valor externo): " . $newArrowFunction() . PHP_EOL; 


