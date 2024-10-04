<?php
    //Incluir arquivo de conexão ao banco de dados
    include "database.php";

     //Recuperando as informações do formulario
     $nome_aluno = $_POST['nome_aluno'];
     $email_aluno = $_POST['email_aluno'];
     $celular_aluno = $_POST['celular_aluno'];
 

    //Construir uma string com comando em SQL
    $sql = "INSERT INTO cadastro_alunos (nome_aluno, email_aluno, celular_aluno) VALUES ('$nome_aluno', '$email_aluno', '$celular_aluno')";

   
    // Criar uma condicional para inserção de valores no banco de dados
    
    if (mysqli_query($conexao, $sql)) {
        echo "Cadastro realizado com sucesso";
    } else {
        echo "Erro ao cadastrar";
    }

