<?php 
ob_start();
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/SistemaDeReceita/style/style.css">
    <title>Cadastrar Receita</title>
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main>
        <h2>Cadastrar Receita</h2>
        <h2>𖦹 ׂ 𓈒 🥞 ／ ⋆ ۪</h2>
        <form action="" method="post">
            <label for="nome">Nome da Receita:</label>
            <input type="text" name="nome" id="nome" placeholder="Ex: Bolo de Cenoura" required>

            <label for="tempo">Tempo de preparo:</label>
            <input type="text" name="tempo" id="tempo" placeholder="Ex: 40 minutos" required>

            <label for="ingredientes">Ingredientes:</label>
            <textarea name="ingredientes" id="ingredientes" rows="5" placeholder="Digite os ingredientes..." required></textarea>

            <div style="margin-top: 10px;">
                <input type="reset" value="Limpar">
                <input type="submit" value="Cadastrar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") { 
            cadastrar($conexao, $_POST['nome'], $_POST['tempo'], $_POST['ingredientes']);
        }
        ?>
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>