<?php

    $peso = 70;
    $altura = 1.70;

    $IMC =  $peso / ($altura * $altura) ;

    echo 'IMC: '. $IMC. '</br>';

    if($IMC >= 40 ){
        echo 'Obesidade Grau 3';
    }elseif($IMC >= 35){
        echo 'Obesidade Grau 2';
    }elseif($IMC >= 30){
        echo 'Obesidade Grau 1';
    }elseif($IMC >= 25){
        echo 'Excesso de Peso';
    }elseif($IMC >= 18.5){
        echo 'Normal';
    }else{
        echo 'Baixo Peso';
    }


?>

