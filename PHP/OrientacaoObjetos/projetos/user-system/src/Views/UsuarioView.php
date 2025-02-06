<?php

namespace App\Views;

use App\Models\Usuario;

class UsuarioView
{
    public function exibir(Usuario $usuario): void
    {
        echo "Nome: " . htmlspecialchars($usuario->nome . "<br>");
        echo "E-mail: " . htmlspecialchars($usuario->email) . "<br>";
    }
}
