<?php
require_once __DIR__ . '/../database/connect.php';

function cadastrar($conexao, $nome, $tempo, $ingredientes)
{
    $sql = "INSERT INTO receitas (nome, tempo, ingredientes) VALUES (:nome, :tempo, :ingredientes)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":tempo", $tempo);
    $stmt->bindParam(":ingredientes", $ingredientes);

    $stmt->execute();

    echo "Receita: $nome cadastrada!.";
    
    
    header("Location: select.php");
    exit();
}

function deletar($conexao, $nome)
{
    $sql = "DELETE FROM receitas WHERE nome = :nome";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->execute();

    echo "<div style='display: block; width: 100%; margin-top: 15px; text-align: center;'><p>Receita $nome deletada.</p></div>";
}

function listar($conexao)
{
    $sql = "SELECT * FROM receitas";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    $receitas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($receitas as $receita) {
        echo "<hr>";
        echo "<a href='select_w.php?id={$receita['id']}'>{$receita['nome']}</a><br>";
    }
}

function consultar($conexao, $id)
{
    $sql = "SELECT nome, tempo, ingredientes FROM receitas WHERE id = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $receita = $stmt->fetch(PDO::FETCH_ASSOC);

     if ($receita) {
        echo "<table class='tabela-receita'>";
        echo "  <thead>";
        echo "      <tr>";
        echo "          <th>Nome da Receita</th>";
        echo "          <th>Tempo de Preparo</th>";
        echo "          <th>Ingredientes</th>";
        echo "      </tr>";
        echo "  </thead>";
        echo "  <tbody>";
        echo "      <tr>";
        echo "          <td>" . htmlspecialchars($receita['nome']) . "</td>";
        echo "          <td>" . htmlspecialchars($receita['tempo']) . "</td>";
        echo "          <td>" . htmlspecialchars($receita['ingredientes']) . "</td>";
        echo "      </tr>";
        echo "  </tbody>";
        echo "</table>";
    } else {
        echo "<p>Receita não encontrada.</p>";
    }
}

function atualizar($conexao, $nome, $ingredientes, $tempo)
{
    $sql = "UPDATE receitas SET tempo = :tempo, ingredientes = :ingredientes WHERE nome = :nome";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":tempo", $tempo);
    $stmt->bindParam(":ingredientes", $ingredientes);
    $stmt->bindParam(":nome", $nome);
    $stmt->execute();
    echo "Receita: $nome atualizada!.";
}


function cadastrar_user($conexao, $email, $senha)
{
    $sql = "INSERT INTO usuarios (email, senha) VALUES (:email, :senha)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":senha", $senha);

    $stmt->execute();
    echo "Usuário cadastrado com sucesso!";
}

function consulta_user($conexao, $email)
{
    $sql = "SELECT id, email, senha FROM usuarios WHERE email = :email";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    return $usuario;

    function deletar($conexao, $nome)
{
    $sql = "DELETE FROM receitas WHERE nome = :nome";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->execute();

    echo "<div style='margin-top: 15px; text-align: center;'><p>Receita $nome deletada.</p></div>";
}
}