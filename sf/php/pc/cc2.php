<html>
<body bgcolor="#4F4F4F">
<font color="white"><h2>

<?php
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$datnasc = $_POST['datnasc'];	
	$sexo = $_POST['sexo'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	
	$conexao = mysql_connect("localhost", "root", "123456");
	$banco   = mysql_select_db("BANCOSF", $conexao);
	
	$inserir = "INSERT INTO clientes (NOME, DATANASCIMENTO, SEXO, CPF, EMAIL, TELEFONE, ENDERECO)
	VALUES ('$nome', '$datnasc', '$sexo', '$cpf', '$email','$telefone','$endereco')";
	
	
	$executar = mysql_query($inserir, $conexao);
	
	echo("Cliente Cadastrado Com Sucesso");
?>
</h2></font>
<p><h2><a href="http://localhost/sf/homefuncionario.php"><font color="WHITE">Volte ao painel</font></a></h2></p>
</body>
</html>