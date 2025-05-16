<?php

    function gerarCalendario($ano) {

        echo '<div class="calendario">';

            // Iterar por cada mês do ano
            for ($mes = 1; $mes <= 12; $mes++) {
                echo '<div class="mes">';
                    echo '<h2>' . date('F', mktime(0, 0, 0, $mes, 10)) . ' ' . $ano . '</h2>';

                    echo '<table>';
                        echo '<tr>';
                            /* Dias da semana */
                            $diaDaSemana = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];
                            foreach ($diaDaSemana as $dia) {
                                echo '<th>' . $dia . '</th>';
                            }
                        echo '</tr><tr>';

                            /* Primeiro dia do mês */
                            $primeiroDia = strtotime("$ano-$mes-01");
                            $diasNoMes = date('t', $primeiroDia); // Total de dias no mês
                            $diaDaSemanaDoPrimeiroDiaDoMes = date('w', $primeiroDia); // Dia da semana do primeiro dia do mês

                            // Preenchendo os dias antes do primeiro dia do mês
                            for ($i = 0; $i < $diaDaSemanaDoPrimeiroDiaDoMes; $i++) {
                                echo '<td></td>';
                            }

                            // Preenchendo os dias do mês
                            for ($dia = 1; $dia <= $diasNoMes; $dia++) {
                                if (($i % 7) == 0 && $i != 0) {
                                    echo '</tr><tr>';
                                }
                                echo '<td>' . $dia . '</td>';
                                $i++;
                            }

                            // Preenchendo os dias restantes do mês
                            while ($i % 7 != 0) {
                                echo '<td></td>';
                                $i++;
                            }

                        echo '</tr>';
                    echo '</table>';

                echo '</div>'; /* Final .mes */
            } /* Final do "for" dos meses do ano */
        echo '</div>'; /* Final .calendario */
    }


    gerarCalendario(2025);
?>

