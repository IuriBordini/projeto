<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro Endereços</title>
</head>

<body>
<?php include('menu.php');include('conexao.php');
    $idcliente     = $_REQUEST['x'];
   
    
    $ident = "select * from tbclientes where id=$idcliente";
    $result =   mysqli_query($conexao, $ident);
    $dados = mysqli_fetch_assoc($result);
  
?>

<h2>Adicionar endereços do cliente: <em><?=$dados['nome'];?> </em>, com login:<em> <?=$dados['login'];?></em></h2>
<form name="form1" method="post" action="">

<label for="tnend">Nome do Local:</label>
<input type="text" name="tnomeendereco" id="tnend" placeholder="exemplo: casa, cada da mãe"required /> <br/>
<br>
Endereço: <input type="text" name="tendereco" required/>    
<br>
<br>
Bairro: <input type="text" name="tbairro" required/>    
<br>
<br>
Cidade: <input type="text" name="tcidade" required/>    
<br>
<br>
Estado: <input type="text" name="testado" required/>    
<br>
<br> 
<input type="submit"  value="Cadastrar" name="btn"/>
 <input type="hidden" name="tid" value="<?= $_REQUEST['x'] ?>"/> 
</form>
<br>
<br>
<?php
    $idc = $_POST['tid'];
     $nomeendereco = $_POST['tnomeendereco'];
    $endereco     = $_POST['tendereco'];
    $bairro       = $_POST['tbairro'];
    $cidade       = $_POST['tcidade'];
    $estado       = $_POST['testado']; 
    
        
     $sql = "insert into tbendereco values (null, '$idc', '$endereco', '$bairro', '$estado', '$cidade', '$nomeendereco',  1)";
    
    $resultado = mysqli_query($conexao, $sql);
    
    if ($resultado==true  && $_POST['btn']){
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Cadastro não foi realizado com sucesso :(";
    }
   ?> 

</body>
</html>