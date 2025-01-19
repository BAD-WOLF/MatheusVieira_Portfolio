<?php
// Exemplo prático de herança em PHP8.4
abstract class Veiculo {
    // Propriedade 'marca' com hooks para get e set
    public string $marca {
        get => $this->marca;
        set(string $novaMarca) {
            if (!empty($novaMarca)) {
                $this->marca = $novaMarca;
            } else {
                throw new InvalidArgumentException("A marca não pode ser vazia.");
            }
        }
    }

    // Propriedade 'modelo' com hooks para get e set
    public string $modelo {
        get => $this->modelo;
        set(string $novoModelo) {
            if (!empty($novoModelo)) {
                $this->modelo = $novoModelo;
            } else {
                throw new InvalidArgumentException("O modelo não pode ser vazio.");
            }
        }
    }

    // Construtor
    public function __construct(
        string $marca,
        string $modelo
    ) {
      $this->marca = $marca;
      $this->modelo = $modelo;
    }

    // Método abstrato para descrever o veículo
    abstract public function descrever(): string;
}

// Subclasse para carros
class Carro extends Veiculo {
    // Propriedade 'numeroDePortas' com hooks para get e set
    public int $numeroDePortas {
        get => $this->numeroDePortas;
        set(int $novasPortas) {
            if ($novasPortas > 0) {
                $this->numeroDePortas = $novasPortas;
            } else {
                throw new InvalidArgumentException("O número de portas deve ser maior que zero.");
            }
        }
    }

    public function __construct(
        string $marca,
        string $modelo,
        int $numeroDePortas
    ) {
      parent::__construct($marca, $modelo);
      $this->numeroDePortas = $numeroDePortas;
    }

    // Implementação obrigatoria do metodo'descrever' na class 'Carro'
    public function descrever(): string {
        return "Carro: {$this->marca} {$this->modelo}, {$this->numeroDePortas} portas.";
    }
}

// Subclasse para motocicletas
class Motocicleta extends Veiculo {
    // Propriedade 'cilindradas' com hooks para get e set
    public int $cilindradas {
        get => $this->cilindradas;
        set(int $novasCilindradas) {
            if ($novasCilindradas > 0) {
                $this->cilindradas = $novasCilindradas;
            } else {
                throw new InvalidArgumentException("As cilindradas devem ser maiores que zero.");
            }
        }
    }

    public function __construct(
        string $marca,
        string $modelo,
        int $cilindradas
    ) {
      parent::__construct($marca, $modelo);
      $this->cilindradas = $cilindradas;
    }

    // Implementação obrigatoria do metodo'descrever' na class 'Motocicleta'
    public function descrever(): string {
        return "Motocicleta: {$this->marca} {$this->modelo}, {$this->cilindradas} cilindradas.";
    }
}

// Criando instâncias de Carro e Motocicleta
$carro = new Carro("Toyota", "Corolla", 4);
$motocicleta = new Motocicleta("Yamaha", "YZF-R3", 321);

// Fazendo função de Upcasting para exibir detalhes dos veículos
function exibirDetalhes(Veiculo $veiculo): void {
    echo $veiculo->descrever() . PHP_EOL;
}

// Usando função de Upcasting para exibir detalhes dos veículos
exibirDetalhes($carro); // Upcasting
exibirDetalhes($motocicleta); // Upcasting

// Fazendo função de Downcasting para modificar valores específicos
function ajustarEspecificacoes(Veiculo $veiculo): void {
    if ($veiculo instanceof Carro) {
        /** @var Carro $veiculo */
        $veiculo->numeroDePortas = 5; // Modifica propriedade específica
        echo "Portas ajustadas: {$veiculo->numeroDePortas}" . PHP_EOL;
    } elseif ($veiculo instanceof Motocicleta) {
        /** @var Motocicleta $veiculo */
        $veiculo->cilindradas += 50; // Modifica propriedade específica
        echo "Cilindradas ajustadas: {$veiculo->cilindradas}" . PHP_EOL;
    }
}

// Usando função de Downcasting para modificar valores específicos
ajustarEspecificacoes($carro); // Downcasting
ajustarEspecificacoes($motocicleta); // Downcasting

// Demonstrando com funça de Upcasting as alterações após downcasting
exibirDetalhes($carro);
exibirDetalhes($motocicleta);

?>

