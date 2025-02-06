<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Voos</title>
</head>
<body>
    <h1>Lista de Voos</h1>
    <ul>
        <?php foreach ($voos as $voo): ?>
            <li>
                Voo <?= htmlspecialchars($voo->Numero) ?> para <?= htmlspecialchars($voo->Destino) ?> às <?= $voo->Horario->format('H:i') ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
