<?php 
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../login/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>A Receita</title>
</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    
    <?php
    if (isset($_GET['id'])) {
        consultar($conexao, $_GET['id']);
    } else {
        echo "<p>Selecione uma receita na lista.</p>";
    }
    
    include __DIR__ . '/../includes/footer.php';
    ?>
</body>
</html>