<html>
<body bgcolor="#4F4F4F">

<font color="white"><h2>
<?php
	$nome = $_POST['nome'];
	$codigo = $_POST['codigo'];
	$tipo = $_POST['tipo'];
	$estoque = $_POST['estoque'];	
	$datval = $_POST['datval'];	
	$fabricante = $_POST['datval'];	
	$descricao = $_POST['descricao'];	
	
	$conexao = mysql_connect("localhost", "root", "123456");
	$banco   = mysql_select_db("BANCOSF", $conexao);
	
	$altera = "UPDATE produto SET NOME='$nome', CODIGO='$codigo', TIPO='$tipo', Estoque='$estoque', DATADEVAL='$datval', FABRICANTE='$fabricante',DESCRICAO='$descricao' WHERE CODIGO = '$codigo'";
	
	
	$executar = mysql_query($altera, $conexao);
	
	echo("Informaçõs Alteradas com Sucesso");
?>
</font></h>

<p><h2><a href="http://localhost/sf/homefuncionario.php"><font color="WHITE">Volte ao painel</font></a></h2></p>
</body>
</html>
