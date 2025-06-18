<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Cantina Italiana</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <h1> Cantina Italiana </h1>
            <nav>
                <a href="index.php">Início</a>
                <a href="produtos.php">Produtos</a>
            </nav>
        </header>
        
        <section class="apresentacao">
            <h2>Bem-vindo(a) à nossa cantina!</h2>
            <p>Servimos o melhor da culinária italiana com tradição, sabor e carinho. Confira nossos pratos e produtos artesanais.</p>
        </section>

        <main class="container-home">
            <section class="servicos">
                <h2>Serviços</h2>
                <ul>
                    <li>Almoço e jantar no local</li>
                    <li>Pratos tradicionais e exóticos</li>
                    <li>Entrega para toda a cidade</li>
                    <li>Eventos e reservas para grupos</li>
                    <li>Venda de massas artesanais e molhos caseiros</li>
                    <li>Oferecemos buffet</li>
                </ul>
                <p>Entre em contato conosco e saiba mais sobre nos serviços. Ficaremos felizes em te atender. </p>
            </section>

            <section class="historia">
                <h2>Nossa História</h2>
                <div class="imagens-home">
                    <img src="imagens/historia.png" alt="Fachada e porta de entrada de um restaurante italiano">
                </div>
                <p>Fundada por uma família tradicional italiana em 1950, nossa cantina nasceu da paixão pela gastronomia e tradição local. Cada prato nosso carrega um pedacinho da Itália.</p>

            </section>
        </main>

        <section class="contato">
            <h2> Contato </h2>

            <form action="" method="post" class="formContato">

                <label> Seu nome: </label>
                <input type="text" name="nome" required autofocus>

                <label> Email: </label>
                <input type="email" name="email" id="email" required>

                <label for="mensagem"> Mensagem: </label>
                <textarea name="mensagem" id="mensagem" required rows="4" cols="41" placeholder="Digite sua mensagem aqui" ></textarea>

                <button type="submit" class="botao"> Enviar </button>
            </form>

            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7918.187162514661!2d-34.89062528192128!3d-7.11515338767609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ace797bbeff72f%3A0x127d1d009c8d254e!2sRodovi%C3%A1ria%20de%20Jo%C3%A3o%20Pessoa!5e0!3m2!1spt-BR!2sbr!4v1750213540657!5m2!1spt-BR!2sbr" 
                    width="500" 
                    height="350" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </section>

        <footer>
            <p>&copy; 2025 Cantina Italiana </p>
        </footer>
    </body>
</html>

