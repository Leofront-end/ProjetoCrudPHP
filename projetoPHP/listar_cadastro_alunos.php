<?php 
    // 1ª Incluir o arquivo de conexão com o banco de dados
    include 'database.php';

    // 2ª Declarou uma variavel que recebera o comando em SQL que sera executado
    $sql_listar = "SELECT * FROM cadastro_alunos";

    // 3 ª Declarar uma variavel que irá receber o resultado da função mysqli_query ao qual ira realiza a conexão com o banco de dados e executa o coamdo em SQL
    $resultado = mysqli_query($conexao, $sql_listar);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listar.css">
    <title>Document</title>
</head>
<body>
    <table border = '1'>
        <thead>
            <tr>
                <th>Nome :</th>
                <th>Email: </th>
                <th>Celular: </th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($dados = mysqli_fetch_assoc($resultado)){


            ?>
            <tr>
                <td><?php echo $dados['nome_aluno']; ?></td>
                <td><?php echo $dados['email_aluno']; ?></td>
                <td><?php echo $dados['celular_aluno'] ?></td>
            </tr>
            <?php
                }
            ?>

            
        </tbody>
        <h3><a href="../aula2/index.php">Voltar</a></h3>
    </table>
</body>
</html>