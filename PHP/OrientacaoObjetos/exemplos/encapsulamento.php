<?php
// Exemplo prático de encapsulamento em PHP8.4
class ContaBancaria {
    // Propriedade 'titular' com hooks para get e set
    public string $titular {
        get => $this->titular;
        set(string $novoTitular) {
            if (!empty($novoTitular)) {
                $this->titular = $novoTitular;
            } else {
                throw new InvalidArgumentException("O nome do titular não pode ser vazio.");
            }
        }
    }

    // Propriedade 'saldo' com hooks para get e set
    public float $saldo {
        get => $this->saldo;
        set(float $novoSaldo) {
            if ($novoSaldo >= 0) {
                $this->saldo = $novoSaldo;
            } else {
                throw new InvalidArgumentException("O saldo não pode ser negativo.");
            }
        }
    }

    // Construtor
    public function __construct(string $titular, float $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    // Método para depositar um valor na conta
    public function depositar(float $valor): string {
        if ($valor > 0) {
            $this->saldo += $valor;
            return "Depósito de R\$ {$valor} realizado com sucesso!" . PHP_EOL;
        } else {
            return "Valor para depósito inválido!" . PHP_EOL;
        }
    }

    // Método para sacar um valor da conta
    public function sacar(float $valor): string {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return "Saque de R\$ {$valor} realizado com sucesso!" . PHP_EOL;
        } else {
            return "Saque inválido! Saldo insuficiente ou valor inválido." . PHP_EOL;
        }
    }
}

// Criando uma conta com saldo inicial
$conta = new ContaBancaria("Matheu Vieira", 1000);

// Exibindo informações iniciais
echo "Titular da conta: " . $conta->titular . PHP_EOL;
echo "Saldo atual: R\$ " . $conta->saldo . PHP_EOL;

// Realizando um depósito
echo $conta->depositar(500);

// Realizando um saque
echo $conta->sacar(300);

// Tentando sacar um valor inválido
echo $conta->sacar(2000);

// Alterando o titular da conta
$conta->titular = "João Lima";
echo "Novo titular: " . $conta->titular . PHP_EOL;

// Exibindo saldo final
echo "Saldo final: R\$ " . $conta->saldo . PHP_EOL;
?>

