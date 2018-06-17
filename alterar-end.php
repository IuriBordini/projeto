<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Editar Endereço</title>
</head>

<body>
<?php include('menu.php');include('conexao.php');
    $id     = $_REQUEST['x'];
   
    
    $ident = "select * from tbendereco where id=$id";
    $result =   mysqli_query($conexao, $ident);
    $dados = mysqli_fetch_assoc($result);
  
?>

<h2>Atualizar endereço</h2>
<form name="form1" method="post" action="">

<label for="tnend">Nome do Local:</label>
<input type="text" name="tnomeendereco" id="tnend" placeholder="exemplo: casa" value="<?= $dados['nomeendereco']; ?>" required /> <br/>
<br>
Endereço: <input type="text" name="tendereco" value="<?= $dados['endereco']; ?>" required/>    
<br>
<br>
Bairro: <input type="text" name="tbairro" value="<?= $dados['bairro']; ?>" required/>    
<br>
<br>
Cidade: <input type="text" name="tcidade" value="<?= $dados['cidade']; ?>" required/>    
<br>
<br>
Estado: <input type="text" name="testado" value="<?= $dados['estado']; ?>" required/>    
<br>
<br> 
Ativo: <input type="checkbox" name="ativo" value="1" <?= ($dados['ativo']==1?'checked':''); ?>>
<br>
<br>
<input type="submit"  value="Atualizar" name="btn"/>
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
    $ativo        = (isset($_POST['ativo'])?$_POST['ativo']:$ativo ="0");
        
     $sql = "update tbendereco set
            endereco='$endereco',
            bairro='$bairro',
            estado='$estado',
            cidade='$cidade',
            nomeendereco='$nomeendereco',
            ativo='$ativo'
            where id=$idc";
   
    
    $resultado = mysqli_query($conexao, $sql);
    
    if ($resultado==true){
?>
    <script>
        alert('Atualizado com sucesso!');
        location.href='tabela-pessoas.php';
    </script>
<?php
    } 
    else {
        echo "Erro ao atualizar.";
        echo "<br>";
    }
 
?>
    
</body>
</html>