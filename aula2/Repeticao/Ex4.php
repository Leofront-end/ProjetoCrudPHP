<?php
    //Coloque os dados no Teste Ex4

    //FOR
    echo "<h1>Usando o FOR</h1>";
    $N = $_GET["N"];
    for ($j = 1; $j <= $N; $j++){
        $Num = $_GET["Num"];
        $Quad = $Num * $Num;
        echo $Quad."<br>";
    }

    //WHILE
    echo "<h1>Usando o WHILE</h1>";
    $N = $_GET["N"];
    $j = 1;
    while ( $j <= $N){
        $Num = $_GET["Num"];
        $Quad = $Num * $Num;
        echo $Quad."<br>";
        $j = $j+1;
    }

    //DO WHILE
    echo "<h1>Usando o DO WHILE</h1>";
    $N = $_GET["N"];
    $j = 1;
    do {
        $Num = $_GET["Num"];
        $Quad = $Num * $Num;
        echo $Quad."<br>";
        $j = $j+1;
    } while ( $j <= $N)
?>