<?php
    //Coloque os dados no Teste Ex4

    //FOR
    echo "<h1>Usando o FOR</h1>";
    $Num = $_GET["Num"];
    for ($j = 2; $j <= $Num; $j += 2){
        echo $j."<br>";
    }

    //WHILE
    echo "<h1>Usando o WHILE</h1>";
    $Num = $_GET["Num"];
    $j = 2;
    while ( $j <= $Num){
        echo $j."<br>";
        $j += 2;
    }

    //DO WHILE
    echo "<h1>Usando o DO WHILE</h1>";
    $Num = $_GET["Num"];
    $j = 2;
    do {
        echo $j."<br>";
        $j += 2;
    } while ( $j <= $Num)
?>