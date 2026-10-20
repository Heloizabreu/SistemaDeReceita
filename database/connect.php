<?php 
$host = "192.168.10.25";
$dbname = "receitas";
$user = "receitas";
$pass = "receitas";
try {
    $conexao = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pass
        );
//       echo "Conexão com o Postgres realizada!<br>";
        return $conexao;
} catch (PDOException $e) {
    echo "Erro: ". $e->getMessage();
}
?>