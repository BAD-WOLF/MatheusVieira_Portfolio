# Calculadora Procedural

Nessa **calculadora procedural** simples, até então o foco está no estilo de programação procedural, que utiliza funções, variáveis globais e controle direto do fluxo do programa.

---

## **Visão Geral**
A calculadora é capaz de realizar as seguintes operações:  

- Soma (`+`)  
- Subtração (`-`)  
- Multiplicação (`*`)  
- Divisão (`/`)  

Ela utiliza a entrada de dados do **usuário** para capturar dois números e o operador desejado. Com base nesses dados, o programa realiza o cálculo correspondente.

---

## **Estrutura do Código**

1. **Captura dos Dados**
   - A calculadora obtém os números e o operador do usuário diretamente pelo terminal (modo CLI) ou via entrada HTTP, dependendo do ambiente de execução.

2. **Validação dos Dados**
   - O programa verifica se:
     - Os números fornecidos são válidos.
     - O operador é compatível com as operações permitidas.

3. **Funções Utilizadas**
   - As operações básicas são implementadas por funções simples para manter o código modular:
     - `add($a, $b)`
     - `subtract($a, $b)`
     - `multiply($a, $b)`
     - `divide($a, $b)`

4. **Exibição do Resultado**
   - O resultado do cálculo é exibido para o usuário com mensagens formatadas.

---

