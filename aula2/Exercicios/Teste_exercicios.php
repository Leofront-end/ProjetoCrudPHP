<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Exercicio 1 - Calcular a media</h3>
    <p>    1 - Criar um algoritmo que receba a média de um aluno e mostre a situação do aluno:</p>
        <p>a. Aprovado -> media maior ou igual a 5</p>
        <p>b. Exame   -> média entre 3 e 5</p>
        <p>c. Reprovado -> média menor do que 3</p>
    <form action="exercicios.php" method="get">
        <label for="media"> Média do aluno</label>
        <input type="number" name="media" id="media">
        <input type="submit" value="Calcular">

    </form>

    <h3>Exercicio 2</h3>
    <p>Criar um algoritmo que receba o código correspondente ao cargo de um funcionario e mostre o cargo</hp>
    <form action="exercicio2.php" method="get">
        <label for="codigo">Digite um numero de 1 a 5</label>
        <input type="number" name="codigo" id="codigo">
        <input type="submit" value="Enviar">
    </form>

    <h3>Exercicio 3</h3>
    <p>Criar um algoritmo que leia a idade de uma pessoa e informar a sua classe eleitoral</p>
    <p>a. Não-eleitor (abaixo de 16 anos)</p>
    <p>b. Eleitor obrigatorio (entre 18 e 65 anos)</p>
    <p>c. Eleitor facultativo (entre 16 e 18 e maior de 65 anos)</p>
    <form action="exercicio3.php" method="get">
        <label for="idade">Informe sua idade: </label>
        <input type="number" name="idade" id="idade">
        <input type="submit" value="Ver se pode votar">
    </form>

    <h3>Exercicio 4</h3>
    <p>Criar um algoritmo que mostre o menu de opções a seguir, receba a opção dousuario e os dados necessários para executar cada operação</p>
    <ol>
        <li>1 - Somar dois números</li>
        <li>2 - Multiplicar dois números</li>
        <li>3 - Subtrair dois números</li>
        <li>4 - Dividir dois números</li>
    </ol>
    <form action="exercicio4.php" method="get">
        <label for="num1">Numero 1</label>
        <input type="number" name="num1" id="num1"><br>

        <label for="num2">Numero 2</label>
        <input type="number" name="num2" id="num2"><br>

        <label for="opcao">Opção</label>
        <input type="number" name="opcao" id="opcao">

        <input type="submit" value="Enviar">
    </form>

    <h3> Exercicio 5 </h3>
    <p>A = 150</p>
    <p>B = 100</p>
    <p>C = 75</p>
    <p>D = 50</p>
    <form action="exercicio5.php" method="get">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br>
        
        <label for="tipoAp">Tipo do armazenamento: </label>
        <input type="text" name="tipoAp" id="tipoAp"><br>

        <label for="diaria">Numero de diaria:</label>
        <input type="number" name="diaria" id="diaria"><br>

        <label for="consumo">Consumo interno</label>
        <input type="number" name="consumo" id="consumo">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>