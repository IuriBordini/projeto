<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Atualizar Cliente</title>
</head>

<body>
<?php include('menu.php');include('conexao.php');
    
    $cliente = $_REQUEST['x'];
    
    $sql = "select * from tbclientes where id=$cliente";
    
    $resultado = mysqli_query($conexao, $sql);
    
    $dados = mysqli_fetch_assoc($resultado);
    
    echo "<h1> Nome: " . $dados['nome'] . "</h1>";
    
    ?>
<h1>Atualização de Cliente/ADM</h1>
<form name="form1" method="post" action="at-cliente.php">
<fieldset>
<legend>Cadastro</legend>
<label for="tnome">Nome:</label>
<input type="text" name="tnome" id="tnome" value="<?= $dados['nome']; ?>" required /> <br/>
Nascimento: <input type="text" name="tnasc" value="<?= $dados['nascimento']; ?>"/>
<br>
Telefone: <input type="text" name="tfone" value="<?= $dados['telefone']; ?>" required />
<br>
Sexo: <input type="radio" name="sex" id="sex1" value="1" <?= ($dados['sexo']==1?'checked':''); ?>> 
            <label for="sex1">Masculino</label>
                <input type="radio" name="sex" id="sex2" value="2" <?= ($dados['sexo']==2?'checked':''); ?>>
            <label for="sex2">Feminino</label>
        <br>
E-mail: <input type="text" name="temail" required value="<?= $dados['email']; ?>" />
<br>
Login: <input type="text" name="tlogin" required value="<?= $dados['login']; ?>" />
<br>
Senha: <input type="text" name="tsenha" required value="<?= $dados['senha']; ?>" />
<br>
Tipo:
        <select name="ttipo">
            <option value="" >Escolha</option>
            <option value="1" <?= ($dados['tipo']==1?'selected':''); ?> >Cliente</option>
            <option value="2" <?= ($dados['tipo']==2?'selected':''); ?>>Administrador</option>
        </select>

<br> 
Ativo: <input type="checkbox" name="ativo" value="1" <?= ($dados['ativo']==1?'checked':''); ?>>
<br>
<br>    
    
<input type="submit" value="Atualizar" />
<input type="hidden" name="tid" value="<?= $_REQUEST['x'] ?>"/> 
</fieldset>    
</form>
   
    
</body>
</html>