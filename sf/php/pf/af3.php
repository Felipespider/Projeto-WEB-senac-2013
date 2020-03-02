<html><head><title>Alterar Perfil</title></head>
<body bgcolor="#FF2D3B">
<font color="white"><h2>
<?php
	$nome = $_POST['nome'];
	$cargo = $_POST['cargo'];
	$salario = $_POST['salario'];
	$datnasc = $_POST['datnasc'];
	$sexo = $_POST['sexo'];
	$cpf = $_POST['cpf'];	
	$email = $_POST['email'];	
	$telefone = $_POST['telefone'];	
	$endereco = $_POST['endereco'];	
	$descricao = $_POST['descricao'];
	
	$conexao = mysql_connect("localhost", "root", "123456");
	$banco   = mysql_select_db("BANCOSF", $conexao);
	
	$altera = "UPDATE FUNCIONARIO SET NOME='$nome',CARGO='$cargo', SALARIO='$salario', DATANASc='$datnasc', SEXO='$sexo', CPF='$cpf', EMAIL='$email', TELEFONE='$telefone',ENDERECO='$endereco',DESCRICAO='$descricao' WHERE CPF = '$cpf'";
	
	
	$executar = mysql_query($altera, $conexao);
	
	echo("Perfil Alterado com Sucesso".$altera);
?>
</h2></font>

<p><h2><a href="http://localhost/sf/homeadmgeral.php"><font color="WHITE">Volte ao painel</font></a></h2></p>
</body>
</html>
