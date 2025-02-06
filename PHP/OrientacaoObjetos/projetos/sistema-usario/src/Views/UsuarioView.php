<?php

namespace App\Views;

use App\Models\Usuario;

class UsuarioView
{
    public function exibir(Usuario $usuario): void
    {
        echo "Nome: " . htmlspecialchars($usuario->getNome()) . "<br>";
        echo "E-mail: " . htmlspecialchars($usuario->getEmail()) . "<br>";
    }
}
