<?php
$idcliente     = $_REQUEST['x'];
     $nomeendereco = $_POST['tnomeendereco'];
    $endereco     = $_POST['tendereco'];
    $bairro       = $_POST['tbairro'];
    $cidade       = $_POST['tcidade'];
    $estado       = $_POST['testado']; 
    
        
     $sql = "insert into tbendereco values (null, '$idcliente', '$endereco', '$bairro', '$estado', '$cidade', '$nomeendereco',  1)";
    
    $resultado = mysqli_query($conexao, $sql);
    
    $dadosend = mysqli_fetch_assoc($resultado);
    
    if ($resultado==true){
        ?>
    <script>
        location.href='tabela-pessoas.php';
    </script>
    <?php
    } else {
        echo "Cadastro não foi realizado com sucesso :(";
    }
    ?> 