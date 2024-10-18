<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $opcao = $_GET["opcao"];

    if ($opcao < 1 || $opcao > 5) {
        echo "Opção Invalida";
    } else {
        if ($opcao == 1) {
            $R = $num1 + $num2;
            echo $R;
        } else {
            if ($opcao == 2) {
                $R = $num1 * $num2;
                echo $R;
            } else {
                if ($opcao == 3) {
                    $R = $num1 * $num2;
                    echo $R;
                } else {
                    if ($num2 == 0) {
                        echo "Não há divisão por 0";
                    } else {
                        $R = $num1 / $num2;
                        echo $R;
                    }
                }
            }
        }
    }
?>