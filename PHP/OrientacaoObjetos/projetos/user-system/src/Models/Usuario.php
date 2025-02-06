<?php

namespace App\Models;

class Usuario
{
    public function __construct(
        public string $nome {
            get => $this->nome;
            set(string $novoNome) {
                if (!empty($novoNome)) {
                    $this->nome = $novoNome;
                } else {
                    throw new \InvalidArgumentException("O nome não pode ser vazio.");
                }
            }
        },
        public string $email {
        get => $this->email;
            set(string $novoEmail) {
                if (filter_var($novoEmail, FILTER_VALIDATE_EMAIL)) {
                    $this->email = $novoEmail;
                } else {
                    throw new \InvalidArgumentException("E-mail inválido.");
                }
            }
        }
    ) {}
}

