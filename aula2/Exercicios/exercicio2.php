<?php
    $codigo = $_GET["codigo"];
    if ($codigo == 1) {
        echo "Escriturário";
    } else {
        if ($codigo == 2) {
            echo "Secretario";
        } else {
            if ($codigo == 3) {
                echo "Caixa";
            } else {
                if ($codigo == 4) {
                    echo "Gerente";
                } else {
                    if ($codigo == 5) {
                        echo "Diretor";
                    } else {
                        echo "Codigo invalido";
                    }
                }
            }
        }
    }
?>