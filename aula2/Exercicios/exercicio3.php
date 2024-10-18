<?php
    $idade = $_GET["idade"];

    if ($idade < 1 || $idade > 120) {
        echo "Idade invalida";
    } else {
        if ($idade < 16)
            echo "Não eleitor";
        else {
            if ($idade >= 18 && $idade <= 65) {
                echo "Eleitor Obrigatório";
            }else {
                echo "Eleitor facultativo";
            }
        }
    }
?>