<?php

    include("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];


    

    echo "<h3>Dados do Usuário";
    echo "<hr>";
    echo "nome: $nome <br>";
    echo "email: $email <br>";
    echo "telefone: $telefone <br>";
    echo "senha: $senha <br>";


$sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario, senha_usuario)";

    $sql .= " VALUES ('".$nome."', '".$email."', '".$fone."', '".$senha."')";

    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
    echo "Dados cadastrados com sucesso!";
    else
    echo "Erro ao tentar cadastrar!";

?>