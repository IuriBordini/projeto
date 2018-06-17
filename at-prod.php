<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Editar</title>
</head>

<body>
<?php include('menu.php'); ?>
<h1>Atualização de Dados Produto</h1>
    
<?php
    include('conexao.php'); 
    
    
    
    
    
    $id = $_POST['tid'];
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $descricao = $_POST['desc'];
    $ativo      = (isset($_POST['ativo'])?$_POST['ativo']:$ativo ="0");
    
   

  

    if($_FILES['arquivo']['name']=="") {
        $sql = "update tbprodutos set
            nomeproduto='$nome',
            valorproduto='$valor',
            descricao='$descricao',
            ativo='$ativo'
            where id=$id";
    } else {
         $pasta_serv = 'img/';
          $arquivo_origem = $_FILES['arquivo']['tmp_name'];
    $arquivo = time() . ".jpg";     
    $arquivo_destino = $pasta_serv . $arquivo;

    $envio = move_uploaded_file($arquivo_origem, $arquivo_destino);
        
        
        $sql = "update tbprodutos set
            nomeproduto='$nome',
            valorproduto='$valor',
            fotoproduto='$arquivo',
            descricao='$descricao',
            ativo='$ativo'
            where id=$id";
    }
    
    $resultado = mysqli_query($conexao, $sql);
    
    if ($resultado==true){
?>
    <script>
        alert('Atualizado com sucesso!');
        location.href='tabela-produto.php';
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