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
   
  
    $idcliente     = $_REQUEST['x'];
   
    
    $ident = "select * from tbclientes where id=$idcliente";
    $result =   mysqli_query($conexao, $ident);
    $dados2 = mysqli_fetch_assoc($result);
    
    
    
?>
Login: <?=$dados2['login'];?> <br>
    Cliente: <?=$dados2['nome'];?>
<h1>Endereços <a href="add-endereco.php?x=<?= $dados2['id']; ?>"><img src="imagem/add2.png"title="Adicionar"/></a></h1>


<table border="0" cellspacing="0">
 <thead>
    <tr>
        <td width="150">Nome do Local</td>
        <td width="300">Endereço</td>
        <td width="150">Bairro</td>
        <td width="150">Cidade</td>
        <td width="150">Estado</td>
        <td width="50">Ativo</td>
        <td width="50">Ações</td>
        
    </tr>
 </thead>    
 <tbody>
 <?php
    
    $sql = "select * from tbendereco where idcliente=$idcliente";
     
    $resultado = mysqli_query($conexao, $sql);
     
   while ($dados = mysqli_fetch_array($resultado)) {
 if ($dados['ativo']=='1') {
        $chk1 = "Sim";
    } else {
        $chk1 = "Não";
    }  
     
     ?>
     <tr>
        <td><?= $dados['nomeendereco']; ?></td>
        <td><?= $dados['endereco']; ?></td>
        <td><?= $dados['bairro']; ?></td>
         <td><?= $dados['cidade']; ?></td>
        <td><?= $dados['estado']; ?></td>
        
          <td><?= $chk1?></td>
        <td>
            <a href="alterar-end.php?x=<?= $dados['id']; ?>"><img src="imagem/edit.png" height="40" title="Editar"/></a>
            <br>
            <br>
            <a href="excluir-end.php?x=<?= $dados['id']; ?>" onclick="return confirma()"><img src="imagem/delete.png" height="40" title="Excluir"/></a>
        </td>
        
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