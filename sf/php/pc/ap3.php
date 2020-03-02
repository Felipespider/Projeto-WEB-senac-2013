<html><head><title>Alterar Perfil</title></head>
<body bgcolor="#4F4F4F">
<font color="white"><h2>
<?php
	$nome = $_POST['nome'];
	$datnasc = $_POST['datnasc'];
	$sexo = $_POST['sexo'];
	$cpf = $_POST['cpf'];	
	$email = $_POST['email'];	
	$telefone = $_POST['telefone'];	
	$endereco = $_POST['endereco'];	
	
	$conexao = mysql_connect("localhost", "root", "123456");
	$banco   = mysql_select_db("BANCOSF", $conexao);
	
	$altera = "UPDATE CLIENTES SET NOME='$nome', DATANASCIMENTO='$datnasc', SEXO='$sexo', CPF='$cpf', EMAIL='$email', TELEFONE='$telefone',ENDERECO='$endereco' WHERE CPF = '$cpf'";
	
	
	$executar = mysql_query($altera, $conexao);
	
	echo("Perfil Alterado com Sucesso");
?>
</h2></font>

<p><h2><a href="http://localhost/sf/homefuncionario.php"><font color="WHITE">Volte ao painel</font></a></h2></p>
</body>
</html>
