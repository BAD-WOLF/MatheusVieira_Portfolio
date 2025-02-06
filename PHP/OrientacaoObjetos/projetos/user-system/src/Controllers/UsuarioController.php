<?php

namespace App\Controllers;

use App\Models\Usuario;

class UsuarioController
{
    public function criarUsuario(string $nome, string $email): Usuario
    {
        return new Usuario($nome, $email);
    }
}
