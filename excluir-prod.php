<?php 
    include('conexao.php');
    $id = $_REQUEST['x'];
    $sql = "delete from tbprodutos where id=$id";
    mysqli_query($conexao, $sql);
    header('location: tabela-produto.php');
?>