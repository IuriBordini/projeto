<?php 
    include('conexao.php');
    $id = $_REQUEST['x'];
    $sql = "delete from tbendereco where id=$id";
    mysqli_query($conexao, $sql);
    header('location: tabela-pessoas.php');
?>