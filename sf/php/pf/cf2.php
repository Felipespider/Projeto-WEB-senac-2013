<html>
<body bgcolor="#FF2D3B">
<font color="white"><h2>
<?php

	$CPF = $_POST ['cpf'];
	$NOME = $_POST ['nome'];
	$SEXO = $_POST['sexo'];
	$DATANASC = $_POST['datanasc'];
	$EMAIL = $_POST['email'];
	$TELEFONE = $_POST['telefone'];
	$ENDERECO = $_POST['endereco'];
	$CARGO = $_POST['cargo'];
	$SALARIO = $_POST['salario'];
	$SENHA = $_POST['senha'];
	$DESCRICAO = $_POST['descricao'];

	$conexao = mysql_connect("localhost","root","123456");
$banco = mysql_select_db ("BANCOSF",$conexao);




$inserir = "INSERT INTO funcionario (CPF,NOME,SEXO,DATANASC,EMAIL,TELEFONE,ENDERECO,CARGO,SALARIO,SENHA,DESCRICAO)
values('$CPF','$NOME','$SEXO','$DATANASC','$EMAIL','$TELEFONE','$ENDERECO','$CARGO','$SALARIO','$SENHA','$DESCRICAO')";
$exucutar = mysql_query ($inserir,$conexao);
	
	echo("Funcionario Cadastrado Com Sucesso".$inserir);
?>
</h2></font>
<p><h2><a href="http://localhost/sf/homeadmgeral.php"><font color="WHITE">Volte ao painel</font></a></h2></p>
</body>
</html>