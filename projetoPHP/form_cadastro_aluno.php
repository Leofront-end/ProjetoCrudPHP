<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=], initial-scale=1.0">
        <link rel="stylesheet" href="css/form.css">
        <title>Cadastro de Alunos </title>
    </head>
    <body>
        <h3 class="title_form"> Formulario de cadastro de alunos: </h3>

        <div id="meuID">Meu ID </div>
        <div class="minhaClasse">Minha Classe</div>

        <form action="cadastro_aluno.php" method="post">
            <label for="nome_aluno" class="minhaClasse">Nome: </label>
            <input type="text" name="nome_aluno" id="nome_aluno" placeholder="Informe seu nome: ">

            <label for="email_aluno">E-mail: </label>
            <input type="text" name="email_aluno" id="email_aluno" placeholder="Informe seu email: ">

            <label for="celular_aluno">Celular: </label>
            <input type="text" name="celular_aluno" id="celular_aluno" placeholder="Informe seu telefone: ">

            <input type="submit" value="Cadastrar">
        </form>
        
    </body>
</html>