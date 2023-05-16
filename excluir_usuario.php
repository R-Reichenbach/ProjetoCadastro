<?php 
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = "delete from usuario where id_usuario = $id_usuario";

    
    echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
    if($result)
    echo "Dados excluídos com sucesso!";
    else
    echo "Erro ao tentar excluir!";

?>