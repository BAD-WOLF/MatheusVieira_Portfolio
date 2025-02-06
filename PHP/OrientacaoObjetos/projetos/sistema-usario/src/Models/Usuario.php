<?php

namespace App\Models;

class Usuario
{
    private string $nome;
    private string $email;

    public function __construct(string $nome, string $email)
    {
        $this->setNome($nome);
        $this->setEmail($email);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {
        if (!empty($novoNome)) {
            $this->nome = $novoNome;
        } else {
            throw new \InvalidArgumentException("O nome não pode ser vazio.");
        }
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $novoEmail): void
    {
        if (filter_var($novoEmail, FILTER_VALIDATE_EMAIL)) {
            $this->email = $novoEmail;
        } else {
            throw new \InvalidArgumentException("E-mail inválido.");
        }
    }
}

