<?php 
    //$+GET["nome do campo do formulario"]

    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];
    $numero3 = $_GET["numero3"];

    //Teste verificando
    echo "<br>". $numero1 ."<br>". $numero2 ."<br>". $numero3 ."<br>";

    for($a = 1; $a <= 10; $a++){
        echo "<h1>Tabuada do $a: </h1><br>";
        for($b =  1;$b <= 10; $b++){
            $resultado = $a * $b;
            echo "$a x  $b  = $resultado <br>";
        }
        echo "<hr>";
    }
?>