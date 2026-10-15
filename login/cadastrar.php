<?php
require_once __DIR__ . '/../includes/functions.php';

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    cadastrar_user($conexao, $_POST['email'], $_POST['senha']);
    $mensagem = 'Usuário cadastrado com sucesso!';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Cadastre-se</title>
</head>
<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>

    <h2>Cadastre-se</h2>
    <h2>══════════════</h2>

    <form action="" method="post">
        <label for="email">e-mail: </label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="senha">senha: </label>
        <input type="password" name="senha" id="senha" required><br><br>

        <input type="submit" value="cadastrar">

        <?php if ($mensagem != ''): ?>
            <p class="mensagem-sucesso">
                <?= htmlspecialchars($mensagem) ?>
            </p>
        <?php endif; ?>
    </form>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>