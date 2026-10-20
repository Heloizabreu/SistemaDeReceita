<?php
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mini_sistema/style/style.css">
    <title>Receitas</title>
    
</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <main>
        <h2>Receitas</h2>
        <h2>˙ . ꒷ 🍰 . 𖦹˙—</h2>
        <?php
        listar($conexao);
        ?>
    </main>
    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>