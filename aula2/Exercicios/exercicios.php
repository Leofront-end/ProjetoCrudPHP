<?php
    /*
        1 - Criar um algoritmo que receba a média de um aluno e mostre a situação do aluno:
        a. Aprovado -> media maior ou igual a 5
        b. Exame   -> média entre 3 e 5
        c. Reprovado -> média menor do que 3
    */
    echo "<h1>Exercicio 1 </h1>";
    $media = $_GET["media"];
    if ($media>= 0 && $media <= 10) {
        if ($media >= 5) {
            echo "Aprovado";
        } else {
            if ($media < 3) {
                echo "Reprovado";
            } else {
                echo "Exame";
            }
        }
    } else {
        echo "Média Invalida";
    }

    echo "<a href='Teste_exercicios.php'>Voltar</a>";

    

?>