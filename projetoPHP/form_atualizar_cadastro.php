<?php 
    //1º incluir o arquivo de conexão com o banco de dados
    include "database.php";

    //2º Resgatar o id passado via GET
    $id_aluno = $_GET['id_aluno'];

    //3º Declarar uma variavel para receber a instrução de SQL
    $sql_por_id = "SELECT * FROM cadastro_alunos WHERE cadastro_alunos.id = '$id_aluno' ";

    //4º Declarar uma variavel para executar a funçao mysqli_query que necessita de dois parametros, sendo eles, a variavel de conexão ao banco de dados e a instrução  em SQL
    $resultado_consulta_por_id = mysqli_query($conexao, $sql_por_id);

    //5º Declarar uma variavel para receber a funcção que converte o resultado em um array associativo 
    $dados_id = mysqli_fetch_assoc($resultado_consulta_por_id);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=], initial-scale=1.0">
        <link rel="stylesheet" href="css/form.css">
        <title>Atualizar Cadastro de Alunos </title>
    </head>
    <body>
        <h3 class="title_form"> Formulario de atualização de cadastro dos alunos: </h3>

        <form action="atualizar_cadastro.php" method="post">
            <label for="nome_aluno" class="minhaClasse">Nome: </label>
            <input type="text" name="nome_aluno" id="nome_aluno"  value=<?php echo $dados_id['nome_aluno'] ?>>

            <label for="email_aluno">E-mail: </label>
            <input type="text" name="email_aluno" id="email_aluno" value=<?php echo $dados_id['email_aluno'] ?> >

            <label for="celular_aluno">Celular: </label>
            <input type="text" name="celular_aluno" id="celular_aluno" value=<?php echo $dados_id['celular_aluno'] ?>>

            <input type="submit" value="Atualizar">
        </form>
        
    </body>
</html>