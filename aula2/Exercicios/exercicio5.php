<?php
    $nome = $_GET["nome"];
    $tipoAp = $_GET["tipoAp"];
    $diaria = $_GET["diaria"];
    $consumo = $_GET["consumo"];

    if ($tipoAp == 'A') {
        $valorDiaria = 150 * $diaria;
    } else {
        if ($tipoAp == 'B') {
            $valorDiaria = 100 * $diaria;
            
        } else {
            if ($tipoAp == 'C') {
                $valorDiaria = 75 * $diaria;
                
            } else {
                if ($tipoAp == 'D') {
                    $valorDiaria = 50 * $diaria;
                    
                } else {
                    echo "invalido o tipo";
                }
            }
        }
    }

    $subtotal = $valorDiaria + $consumo;
    $taxa = 0.10 * $subtotal;
    $total = $subtotal + $taxa;
    echo "Total ".$total;
?>