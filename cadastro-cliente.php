<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro Cliente</title>
</head>

<body>
<?php include('menu.php');include('conexao.php');?>
<h1>Formulário de cadastro cliente/adm</h1>
<form name="form1" method="post" action="insere-cliente.php">
<fieldset>
<legend>Cadastro</legend>
<label for="tnome">Nome:</label>
<input type="text" name="tnome" id="tnome" required /> <br/>
Nascimento: <input type="text" name="tnasc" />
<br>
Telefone: <input type="text" name="tfone" required />
<br>
Sexo: <input type="radio" name="sex" id="sex1" value="1" > 
            <label for="sex1">Masculino</label>
                <input type="radio" name="sex" id="sex2" value="2">
            <label for="sex2">Feminino</label>
        <br>
E-mail: <input type="text" name="temail" required />
<br>
Login: <input type="text" name="tlogin" required />
<br>
Senha: <input type="text" name="tsenha" required />
<br>
tipo:
        <select name="ttipo">
            <option value="">Escolha</option>
            <option value="1">Cliente</option>
            <option value="2">Administrador</option>
        </select>
<br>

<br> 
    
    
<input type="submit" value="Avançar" />
  
</fieldset>    
</form>
   
    
</body>
</html>