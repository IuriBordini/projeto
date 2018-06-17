<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
</head>

<body>
<?php include('menu.php');?>
<h1>Buscar</h1>
<form name="form1" method="post" action="">

<h2>- Buscar por Cliente</h2>
<label for="cliente">Nome:</label>
<input type="text" name="cliente" id="cliente" />

<input type="submit" value="Ok" name="btn"/>

</form>
    
<?php
include('conexao.php');
$cliente = isset($_POST['cliente']) ? $_POST['cliente'] : '';

$sql = "select * from tbclientes where nome like '%$cliente%' order by nome"; 

$resultado = mysqli_query($conexao, $sql);

$numero = mysqli_num_rows($resultado);

if($numero>=1) {
    echo "<p><b>Total de registros:</b> $numero</p>";

    while ($dados = mysqli_fetch_array($resultado)) {

        echo " nome: <b>" . $dados['nome'] . " </b> - login: <b>" . $dados['login']. " </b>";
        echo "<br>";
    }
} else {
    echo "<p>Não encontrou nenhum aluno</p>";
}
?>    

