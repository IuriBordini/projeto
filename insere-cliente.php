<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>

<?php
include('menu.php');    
include('conexao.php');
    
$nome       = $_POST['tnome'];
$nascimento = $_POST['tnasc'];
$telefone   = $_POST['tfone'];
$email      = $_POST['temail'];
$login      = $_POST['tlogin'];
$senha      = $_POST['tsenha'];
$tipo      = $_POST['ttipo'];
//$ativo      = (isset($_POST['ativo'])?$_POST['ativo']:$ativo ="0");
$sexo   = $_POST['sex'];
    
     
$sql = "insert into tbclientes values (null, '$nome', '$telefone', '$email', '$nascimento', '$login', '$senha', '$tipo', 1,'$sexo')";

//echo $sql;    
$vai = mysqli_query($conexao, $sql);

if ($vai == true)  {
    if ($tipo==1){
    echo "<script>location.href='endereco.php?x=".mysqli_insert_id($conexao)."'</script>";
    } elseif ($tipo==2) {
    echo "Adm cadastrado com sucesso.";
}
}else {
    echo "Deu ruim ao cadastrar.";
}
    
?>    
    
</body>
</html>
