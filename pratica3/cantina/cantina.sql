CREATE DATABASE cantina;

USE cantina;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    preco DECIMAL(10,2),
    imagem VARCHAR(255)
);

INSERT INTO produtos (nome, preco, imagem) VALUES
    ('Lasanha à Bolonhesa', 45.00, 'LasanhaBolonhesa.png'),
    ('Spaghetti ao Pesto', 36.50, 'Spaghetti.png'),
    ('Ravioli', 25.00, 'Ravioli.png'),
    ('Tiramisu Tradicional', 30.00, 'Tiramisu.png'),
    ('Molho Pomodoro', 15.00, 'MolhoPomodoro.png');

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(100),
    produto_id INT,
    quantidade INT,
    data_pedido DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (produto_id) REFERENCES produtos(id)
);
