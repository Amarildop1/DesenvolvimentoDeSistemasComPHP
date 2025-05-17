<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Calendário PHP </title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <header class="menu">
            <form method="GET">
                <label for="ano">Escolha o ano:</label>
                <select name="ano" id="ano" onchange="this.form.submit()">
                    <?php
                        $anoAtual = date('Y');
                        $anoSelecionado = $_GET['ano'] ?? $anoAtual;

                        for ($ano = $anoAtual - 5; $ano <= $anoAtual + 5; $ano++) {
                            $selected = ($ano == $anoSelecionado) ? 'selected' : '';
                            echo "<option value='$ano' $selected>$ano</option>";
                        }
                    ?>
                </select>
            </form>
        </header>

        <div class="calendario-container">
            <?php
                include 'calendario.php';

                gerarCalendario($anoSelecionado);
            ?>
        </div>

    </body>
</html>

