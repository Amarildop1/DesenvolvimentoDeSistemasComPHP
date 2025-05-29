<?php
    include 'conexao.php';

    $nome = $_POST['nome_cliente'];
    $produto_id = $_POST['produto_id'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO pedidos (nome_cliente, produto_id, quantidade)
            VALUES ('$nome', $produto_id, $quantidade)";

    if ($conn->query($sql) === TRUE) {
        echo "<p> Pedido realizado com sucesso! </p>";
        echo "<a href='produtos.php'> Voltar aos produtos </a>";
    } else {
        echo "Erro: " . $conn->error;
    }

    $conn->close();
?>
