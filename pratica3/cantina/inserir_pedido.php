<?php
    include 'conexao.php';

    $nome = $_POST['nome_cliente'];
    $produto_id = $_POST['produto_id'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO pedidos (nome_cliente, produto_id, quantidade)
            VALUES ('$nome', $produto_id, $quantidade)";
    $conn->query($sql);

    $sql_pedidos = "SELECT pedidos.id, produtos.nome AS produto, pedidos.quantidade
                    FROM pedidos
                    JOIN produtos ON pedidos.produto_id = produtos.id
                    WHERE pedidos.nome_cliente = '$nome'";

    $result = $conn->query($sql_pedidos);
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Pedidos de <?= htmlspecialchars($nome) ?></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main style="text-align:center">
            <h2>Olá <?= htmlspecialchars($nome) ?>, pedido realizado!</h2>

            <ul>
                <?php
                if ($result->num_rows > 0):
                    while ($row = $result->fetch_assoc()):
                ?>
                    <li><?= $row['produto'] ?>  >>  Quantidade: <?= $row['quantidade'] ?></li>
                <?php
                    endwhile;
                else:
                    echo "<p>Nenhum pedido encontrado.</p>";
                endif;
                ?>
            </ul>

            <div class="grupoBotoes">
                <a href="index.php" class="botao btnInicio">Início</a>
                <a href="produtos.php" class="botao btnVerProdutos">Voltar aos produtos</a>
            </div>
        </main>
    </body>
</html>

<?php $conn->close(); ?>
