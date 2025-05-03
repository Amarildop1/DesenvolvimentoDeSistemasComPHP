<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> PESO CORPORAL - IMC </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="form-container">
            <h1> Calculadora de IMC </h1>

            <form action="" method="GET">
                <label for="peso">Peso (kg):</label>
                <input type="number" name="peso" id="peso" required step="0.1" min="1" placeholder="Ex: 60">

                <label for="altura">Altura (em metros): </label>
                <input type="number" name="altura" id="altura" required step="0.01" min="1" placeholder="Ex: 1.65">

                <button type="submit"> Calcular </button>
            </form>

            <?php

                if($_GET){

                    $peso = $_GET['peso'];
                    $altura = $_GET['altura'];
                    
                    $imc =  $peso / ($altura * $altura) ;
    
                    echo "<div class='resultado'>Seu IMC é: " . number_format($imc, 2, ',') . "</div>";
    
                    $classe = '';
                    $conceito = '';

                    if($imc >= 40 ){
                        $classe = 'grau3';
                        $conceito = 'Obesidade Grau 3';
                    }elseif($imc >= 35){
                        $classe = 'grau2';
                        $conceito = 'Obesidade Grau 2';
                    }elseif($imc >= 30){
                        $classe = 'grau1';
                        $conceito = 'Obesidade Grau 1';
                    }elseif($imc >= 25){
                        $classe = 'excesso';
                        $conceito = 'Excesso de Peso';
                    }elseif($imc >= 18.5){
                        $classe = 'normal';
                        $conceito = 'Normal';
                    }else{
                        $classe = 'baixoPeso';
                        $conceito = 'Baixo Peso';
                    }
                    
                    echo "<div class='conceito $classe'> $conceito </div>";

                }

            ?>
        </div> <!-- Final .form-container -->

        
    </body>
</html>

