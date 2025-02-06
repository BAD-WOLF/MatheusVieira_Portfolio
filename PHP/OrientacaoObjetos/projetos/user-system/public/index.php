<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UsuarioController;
use App\Views\UsuarioView;

// Simulação de dados recebidos (em um caso real, viriam de uma requisição HTTP)
$nome = "João da Silva";
$email = "joao.silva@example.com";

$usuarioController = new UsuarioController();
$usuario = $usuarioController->criarUsuario($nome, $email);

$usuarioView = new UsuarioView();
$usuarioView->exibir($usuario);
