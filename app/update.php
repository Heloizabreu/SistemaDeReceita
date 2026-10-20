<?php
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/SistemaDeReceita/style/style.css">
    <title>Atualizar Receita</title>
</head>

<body>
    <?php include '../includes/header.php'; ?>

    <main>
        <h2>Atualizar Receita</h2>
        <h2>.𖥔 ݁ ˖🍪── .✦</h2>
        <form action="" method="post">
            <label for="nome">Nome da Receita: </label>
            <input type="text" name="nome" id="nome" required>

            <label for="ingredientes">Ingredientes: </label>
            <input type="text" name="ingredientes" id="ingredientes" required>

            <label for="tempo">Tempo de Preparo: </label>
            <input type="text" name="tempo" id="tempo" required>

            <div>
                <input type="reset" value="Limpar">
                <input type="submit" value="Atualizar">
            </div>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            atualizar($conexao, $_POST['nome'], $_POST['ingredientes'], $_POST['tempo']);
        }
        ?>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>
