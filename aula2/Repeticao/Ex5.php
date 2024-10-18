<?php
    //Coloque os dados no Teste Ex4

    //FOR
    echo "<h1>Usando o FOR</h1>";
    $Num = $_GET["Num"];
    for ($j = 1; $j <= 20; $j++){
        $metade = $Num/2;
        echo $metade."<br>";
    }

    //WHILE
    echo "<h1>Usando o WHILE</h1>";
    $Num = $_GET["Num"];
    $j = 1;
    while ( $j <= 20){
        $metade = $Num/2;
        echo $metade."<br>";
        $j = $j+1;
    }

    //DO WHILE
    echo "<h1>Usando o DO WHILE</h1>";
    $Num = $_GET["Num"];
    $j = 1;
    do {
        $metade = $Num/2;
        echo $metade."<br>";
        $j = $j+1;
    } while ( $j <= 20)
?>