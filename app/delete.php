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
    <title>Excluir Receita</title>
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <main>
        <h2>Excluir Receita</h2>
        <h2>꒷꒦︶꒷꒦︶ ๋ ࣭ ⭑꒷꒦</h2>

        <form action="" method="post">
            <label for="nome">Nome da receita</label><br><br>
            <input type="text" name="nome" id="nome" required><br><br>

            <input type="submit" value="excluir">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            deletar($conexao, $_POST['nome']);
        }
        ?>
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>