<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<?php 
    include('menu.php');include('conexao.php');
    
     $prod = $_REQUEST['x'];
    
    $sql = "select * from tbprodutos where id=$prod";
    
    $resultado = mysqli_query($conexao, $sql);
    
    $dados = mysqli_fetch_assoc($resultado);
?> 

 <h1>Produto: <?=$dados['nomeproduto'];?></h1>

    
<h2>Alterar Produto</h2>

<form name="form1" method="post" action="at-prod.php" enctype="multipart/form-data">
Nome: <input type="text" name="nome" value="<?= $dados['nomeproduto']; ?>" />
<br>
<br>
Valor: <input type="text" name="valor" value="<?= $dados['valorproduto']; ?>"/>
<br>
<img src="img/<?= $dados['fotoproduto']; ?>" width="200">
<br>
Foto: <input type="file" name="arquivo" />    
<br>
<br>
Descrição do produto: <input type="text" name="desc" value="<?= $dados['descricao']; ?>"/>    
<br>
<br> 
Ativo: <input type="checkbox" name="ativo" value="1" <?= ($dados['ativo']==1?'checked':''); ?>>
<br>
<br>
<input type="submit" value="Atualizar" />
<input type="hidden" name="tid" value="<?= $_REQUEST['x'] ?>"/>   
</form>
</body>

</html>