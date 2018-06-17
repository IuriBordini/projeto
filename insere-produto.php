<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<?php
 include('menu.php');include('conexao.php');


$nome = $_POST['nome'];
$valor = $_POST['valor'];
$descricao = $_POST['desc'];

$pasta_serv = 'img/';

$arquivo_origem = $_FILES['arquivo']['tmp_name'];
$arquivo = time() . ".jpg";     
$arquivo_destino = $pasta_serv . $arquivo;

$envio = move_uploaded_file($arquivo_origem, $arquivo_destino);
     
if($envio==true) {
    $sql = "insert into tbprodutos values (null, '$nome', '$valor', '$arquivo', '$descricao', 1)";
    mysqli_query($conexao, $sql);
    echo "arquivo enviado com sucesso";
} else {
    echo "deu ruim ao enviar";
}

?>    
</body>

</html>