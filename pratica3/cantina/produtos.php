<?php
$produtos = [
    ["nome" => "Lasanha à Bolonhesa", "preco" => 45.00],
    ["nome" => "Ravioli de Ricota", "preco" => 38.00],
    ["nome" => "Spaghetti ao Pesto", "preco" => 36.50],
    ["nome" => "Molho Pomodoro 500ml", "preco" => 18.00],
    ["nome" => "Tiramisu Tradicional", "preco" => 22.00]
];
?>


<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Produtos</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <h1>Produtos</h1>
            <nav>
                <a href="index.php">Início</a>
                <a href="produtos.php">Produtos</a>
            </nav>
        </header>

        <main>
            <section class="produtos">
                <?php
                $sql = "SELECT * FROM produtos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0):
                    while ($row = $result->fetch_assoc()):
                ?>
                    <div class="produto">
                        <img src="imagens/<?= $row['imagem'] ?>" alt="<?= $row['nome'] ?>">

                        <h3> <?= $row['nome'] ?> </h3>
                        <p> R$ <?= number_format($row['preco'], 2, ',', '.') ?> </p>
                        <a href="fazer_pedido.php?id=<?= $row['id'] ?> " class="botao"> Fazer Pedido </a>
                    </div>
                <?php
                    endwhile;
                else:
                    echo "<p>Nenhum produto cadastrado.</p>";
                endif;

                $conn->close();
                ?>
            </section>
        </main>

        <footer>
            <p>&copy; 2025 Cantina Italiana </p>
        </footer>
    </body>
</html>
