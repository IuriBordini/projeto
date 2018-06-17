<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
</head>

<body>
<?php include('menu.php'); ?>
<h1>Atualização de Dados</h1>
    
<?php
    include('conexao.php'); 
    
    
    $id         = $_POST['tid'];
    $nome       = $_POST['tnome'];
    $nascimento = $_POST['tnasc'];
    $telefone   = $_POST['tfone'];
    $email      = $_POST['temail'];
    $login      = $_POST['tlogin'];
    $senha      = $_POST['tsenha'];
    $tipo      = $_POST['ttipo'];
    $ativo      = (isset($_POST['ativo'])?$_POST['ativo']:$ativo ="0");
    $sexo   = $_POST['sex'];
   

    $sql = "update tbclientes set
            nome='$nome',
            telefone='$telefone',
            email='$email',
            nascimento='$nascimento',
            login='$login',
            senha='$senha',
            tipo='$tipo',
            ativo='$ativo',
            sexo='$sexo'
            where id=$id";
    
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