<?php

// Exemplo prático de polimorfismo

// Classe Animal - base para todos os animais
abstract class Animal {
    protected string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    // Método abstrato: obriga as subclasses a implementar o comportamento
    abstract public function emitirSom(): string;

    // Método comum: usado por todas as subclasses
    public function descricao(): string {
        return "Sou um animal chamado {$this->nome}.";
    }
}

// Classe Dog - representa um cachorro
class Dog extends Animal {
    public function emitirSom(): string {
        return "Au! Au!";
    }

    public function descricao(): string {
        return parent::descricao() . " E sou um cachorro.";
    }
}

// Classe Cat - representa um gato
class Cat extends Animal {
    public function emitirSom(): string {
        return "Miau! Miau!";
    }

    public function descricao(): string {
        return parent::descricao() . " E sou um gato.";
    }
}

// Classe Cow - representa uma vaca
class Cow extends Animal {
    public function emitirSom(): string {
        return "Muuu! Muuu!";
    }

    public function descricao(): string {
        return parent::descricao() . " E sou uma vaca.";
    }
}

// Função para exibir informações de um animal - exemplo prático do polimorfismo
function descreverAnimal(Animal $animal): void {
    echo $animal->descricao() . PHP_EOL;
    echo "Som que faço: " . $animal->emitirSom() . PHP_EOL;
}

// Testando o polimorfismo
$dog = new Dog("Max");
$cat = new Cat("Luna");
$cow = new Cow("Mimosa");

// Todas as classes são chamadas com o mesmo método
// Isso mostra o polimorfismo em prática, pois o comportamento depende do objeto
descreverAnimal($dog);
descreverAnimal($cat);
descreverAnimal($cow);
