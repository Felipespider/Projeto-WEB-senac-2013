<html>
<body bgcolor="#4F4F4F">
<font color="white"><h2>
<?php
	
	$codigo = $_POST['codigo'];
	$preco = $_POST['preco'];
	$nome = $_POST['nome'];
	$tipo = $_POST['tipo'];	
	$estoque = $_POST['estoque'];
	$datval = $_POST['datval'];
	$fabricante = $_POST['fabricante'];
	$descricao = $_POST['descricao'];
	
	$conexao = mysql_connect("localhost","root","123456");
	$banco   = mysql_select_db("BANCOSF", $conexao);
	print(mysql_error()."<br />");
	$inserir = "INSERT INTO PRODUTO (CODIGOP,PRECO,NOME, TIPO, ESTOQUE, DATADEVAL, FABRICANTE, DESCRICAO)
	VALUES ('$codigo', '$preco', '$nome' ,'$tipo', '$estoque', '$datval','$fabricante','$descricao')";
	
	
	$executar = mysql_query($inserir, $conexao);
	
	echo("Produto Cadastrado Com Sucesso".$inserir);
?>
</h2></font>
<p><h2><a href="http://localhost/sf/homefuncionario.php"><font color="WHITE">Volte ao painel</font></a></h2></p>
</body>
</html>