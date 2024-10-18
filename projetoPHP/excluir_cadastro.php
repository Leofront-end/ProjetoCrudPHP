<?php 
    // 1º Passo - Incluir o arquivo de conexão com o banco de dados
    include "database.php";

    // 2º Passo - Resgatar o id via GET enviado pelo link criado
    $id_aluno = $_GET['id_aluno'];

    // 3º Passo - Construir uma string para realizar a consulta em SQL por id
    $sql_exclui_por_id = "DELETE FROM cadastro_alunos WHERE cadastro_alunos.id = '$id_aluno' ";

    // Comando Para Testar ---> echo "<h3>".$sql_exclui_por_id."</h3>";

    // 4º Passo - Vamo  realizar o mesmo procedimento realizado ao cadastrar uma informação no banco de dados
    if(mysqli_query($conexao, $sql_exclui_por_id)) {
        //Vamos utilizar um comando para redirecionar para outra pagina
        header("Location: listar_cadastro_alunos.php");
    } else {
        echo "Erro ao excluir cadastro!!";
    }
?>