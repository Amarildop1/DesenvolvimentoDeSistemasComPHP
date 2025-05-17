<?php

    function gerarCalendario($ano) {
        $meses = [
            1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março',
            4 => 'Abril', 5 => 'Maio', 6 => 'Junho',
            7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro',
            10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
        ];

        $feriadosFixos = [
            "01-01" => "Ano Novo",
            "04-21" => "Tiradentes",
            "05-01" => "Dia do Trabalho",
            "09-07" => "Independência",
            "10-12" => "Nossa Senhora Aparecida",
            "11-02" => "Finados",
            "11-15" => "Proclamação da República",
            "11-20" => "Dia Nacional de Zumbi",
            "12-25" => "Natal"
        ];

        echo '<div class="calendario">';

            // Iterar por cada mês do ano
            for ($mes = 1; $mes <= 12; $mes++) {
                echo '<div class="mes">';

                    echo '<h2>' . $meses[$mes] . ' ' . $ano . '</h2>';

                    echo '<table>';
                        echo '<tr>';

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

                                $dataAtual = sprintf("%02d-%02d", $mes, $dia);
                                $classe = '';
                                $titulo = '';

                                if (isset($feriadosFixos[$dataAtual])) {
                                    $classe = 'feriado';
                                    $titulo = 'title="' . $feriadosFixos[$dataAtual] . '"';
                                }

                                if (($i % 7) == 0 && $i != 0) {
                                    echo '</tr><tr>';
                                }

                                echo "<td class='$classe' $titulo>$dia</td>";
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

