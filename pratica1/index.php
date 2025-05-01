<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PESO CORPORAL - imc</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="form-container">
            <h1>Calculadora de IMC</h1>

            <form action="" method="GET">
                <label for="peso">Peso (kg):</label>
                <input type="number" name="peso" id="peso" required step="0.1" min="1" placeholder="Ex: 60">

                <label for="altura">Altura (em metros): </label>
                <input type="number" name="altura" id="altura" required step="0.01" min="1" placeholder="Ex: 1.65">

                <button type="submit"> Calcular </button>
            </form>

            <?php
                /* $peso = 70;
                $altura = 1.70; */

                if($_GET){

                    $peso = $_GET['peso'];
                    $altura = $_GET['altura'];
                    
                    $imc =  $peso / ($altura * $altura) ;
    
                    echo "<div class='resultado'>Seu IMC é: " . $imc . "</div>";
    
                    echo "<div class='conceito'>";
                        if($imc >= 40 ){
                            echo 'Obesidade Grau 3';
                        }elseif($imc >= 35){
                            echo 'Obesidade Grau 2';
                        }elseif($imc >= 30){
                            echo 'Obesidade Grau 1';
                        }elseif($imc >= 25){
                            echo 'Excesso de Peso';
                        }elseif($imc >= 18.5){
                            echo 'Normal';
                        }else{
                            echo 'Baixo Peso';
                        }
                    echo "</div>";
                }

            ?>
        </div> <!-- Final .form-container -->

    </body>
</html>

