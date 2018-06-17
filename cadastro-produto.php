<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<?php include('menu.php');include('conexao.php');?>
    
<h1>Cadastro Produto</h1>

<form name="form1" method="post" action="insere-produto.php" enctype="multipart/form-data">
Nome: <input type="text" name="nome" />
<br>
<br>
Valor: <input type="text" name="valor" />
<br>
<br>
Foto: <input type="file" name="arquivo" />    
<br>
<br>
Descrição do produto: <input type="text" name="desc" />    
<br>
<br>
<input type="submit" value="Cadastrar" />
    
</form>
</body>

</html>