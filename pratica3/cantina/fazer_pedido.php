<?php
    include 'conexao.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $result = $conn->query($sql);
    $produto = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Pedido</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <h1> Pedido </h1>
        </header>

        <main class="fazerPedido">
            <h2> <?= $produto['nome'] ?> </h2>
            <div class="imagemDoPedido">
                <img src="imagens/<?= $produto['imagem'] ?>" alt="<?= $produto['nome'] ?>">
            </div>

            <form action="inserir_pedido.php" method="post">
                <input type="hidden" name="produto_id" value="<?= $produto['id'] ?>">

                <label>Seu nome:</label>
                <input type="text" name="nome_cliente" required autofocus><br>

                <label>Quantidade:</label>
                <input type="number" name="quantidade" value="1" min="1"><br>

                <button type="submit" class="botao confirmar-pedido"> Confirmar Pedido </button>
            </form>

            <div style="margin-top: 20px;">
                <a href="index.php" class="botao btnInicio">Início</a>
                <a href="produtos.php" class="botao btnVerProdutos">Ver mais produtos</a>
            </div>
        </main>

        <footer>
            <p>&copy; 2025 Cantina Italiana </p>
        </footer>
    </body>
</html>
