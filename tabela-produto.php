<!DOCTYPE html>
<html>
<head>
<style>
    table {
        font-family: verdana;
    }
    thead tr {
        text-align: center;
        font-weight: bold;
        background-color: #c6c6c6;
    }
    tbody tr:nth-child(odd) {
        background-color: #abc;
    }
    tbody tr:nth-child(even) {
        background-color: #cba;
    }
    tbody tr:hover {
        background-color: darksalmon;
    }
    td {
        text-align: center;
    }
</style>    
    
</head>

<body>
<?php 
    include('menu.php');
    include('conexao.php');
   
?>
<h1>Tabela Produtos</h1>

<table border="0" cellspacing="0">
 <thead>
    <tr>
        <td width="150">Foto</td>
        <td width="300">Nome</td>
        <td width="150">Valor</td>
        <td width="150">Descriçao do Produto</td>
        <td width="50">Ações</td>
        <td width="50">Ativo</td>
    </tr>
 </thead>    
 <tbody>
 <?php
    
    $sql = "select * from tbprodutos";
     
    $resultado = mysqli_query($conexao, $sql);
     
   while ($dados = mysqli_fetch_array($resultado)) {
 if ($dados['ativo']=='1') {
        $chk1 = "Sim";
    } else {
        $chk1 = "Não";
    }  
     
     ?>
     <tr>
        <td><img src="img/<?= $dados['fotoproduto']; ?>" width=250 /></td>
        <td><?= $dados['nomeproduto']; ?></td>
        <td>R$ <?= $dados['valorproduto']; ?></td>
        <td><?= $dados['descricao']; ?></td>
        <td>
            <a href="alterar-prod.php?x=<?= $dados['id']; ?>"><img src="imagem/edit.png" height="40" title="Editar"/></a>
            <br>
            <br>
            <a href="excluir-prod.php?x=<?= $dados['id']; ?>" onclick="return confirma()"><img src="imagem/delete.png" height="40" title="Excluir"/></a>
        </td>
         <td><?= $chk1?></td>
    </tr>
<?php
   }

?>

<script>
    function confirma(){
        var a = confirm('Deseja excluir esse produto?');
        if (a){
            return true;
        }
        else {
            return false;
        }
    }
</script> 
    
 </tbody>        
</table>
    
</body>
</html>