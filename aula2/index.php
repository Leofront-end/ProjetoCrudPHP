<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Link Externo CSS -->
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <p><a href="../projetoPHP/form_cadastro_aluno.php">Formulario de Cadastro</a></p>

    <p><a href="../projetoPHP/listar_cadastro_alunos.php">Listar Cadastro</a></p>
    <h1>Tabuada em PHP</h1>
    <h1>
        <?php
        $titulo = "Aula 02 - Tabuada em PHP ";
        $titulo = "Aula de PHP";
        $titulo = "Fatec Ferraz Vasconcelos";
        $titulo = 2024;
        $titulo = 2000.00;
        $titulo = true;
        echo $titulo . "<br>";
        ?>
    </h1>

    <br>
    <h3>Método GET e POST</h3>
    <form action="calculadora.php" method="get">
        <label for="numero1">Número 1:</label>
        <input type="text" name="numero1" placeholder="Digite algo" id="numero1">
        <br>

        <label for="numero2">Número 2: </label>
        <input type="number" name="numero2" placeholder="Digite algo" id="numero2">
        
        <br>
        <label for="numero3">Número 3:</label>
        <select name="numero3" id="numero3">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <input type="submit" value="Calcular">

    </form>

    <p>
        <img src="img/urso.jpg" alt="">
    </p>

</body>
</html>