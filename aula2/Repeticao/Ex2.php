<?php
    //FOR
    echo "<h1> Usando o FOR </h1>";
    for ($i = 5; $i <= 200;$i++){
        echo $i."<br>";
    }

    // WHILE
    echo "<h1> Usando o WHILE </h1>";
    $i = 5;
    while ($i <= 200) {
        echo $i."<br>";
        $i = $i + 1;
    }

    // DO WHILE
    echo "<h1> Usando o DO WHILE </h1>";
    $i = 5;
    do {
        echo $i."<br>";
        $i = $i + 1;
    } while ($i <= 200) 
?>