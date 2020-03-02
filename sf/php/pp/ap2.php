<html>
<head>	<title>Alterar Produto</title>	
</head>
<body bgcolor="#4F4F4F" align="center">
<font color="white"><h2>
<?php
 $codigo  = $_POST['codigo'];
   $conexao = mysql_connect("localhost", "root", "123456");
   $produto = mysql_select_db("BANCOSF", $conexao);

   $consulta = "SELECT * FROM PRODUTO WHERE CODIGOP = '$codigo' ";
   $resultado      = mysql_query($consulta, $conexao);
   $registro       =mysql_fetch_array($resultado);
   $nome         =$registro ["NOME"];
   $codigo           =$registro ["CODIGOP"];
   $tipo = $registro ["TIPO"];
   $estoque = $registro ["ESTOQUE"];
   $datval = $registro ["DATADEVAL"];
   $fabricante = $registro ["FABRICANTE"];
   $descricao = $registro ["DESCRICAO"];
   
    print('Informações Atuais');
	print('<p/>');
	print('<br/>');
    print('Nome: '.$nome);
	print('<p/>');
	print('<br/>');
	print('Codigo: '.$codigo);
	print('<p/>');
	print('<br/>');
	print('Tipo: '.$tipo);
    print('<p/>');
	print('<br/>');
	print('Estoque: '.$estoque);
    print('<p/>');
    print('<br/>');
	print('Data de Validade: '.$datval);
	print('<p/>');
	print('<br/>');
	print('Fabricante/Distribuidora: '.$fabricante);
	print('<p/>');
	print('<br/>');
	print('Descrição: '.$descricao);
	print('<p/>');
	print('<br/>');

	$codigo = $_POST['codigo'];

	$conexao = mysql_connect("localhost","root","123456");
	$banco   = mysql_select_db("BANCOSF",$conexao);

	$consulta = "SELECT * FROM PRODUTO WHERE CODIGOP = '$codigo'";

	$resultado = mysql_query($consulta,$conexao);

	$registro = mysql_fetch_array($resultado);

	$nome = $registro["NOME"];
	$codigo   = $registro["CODIGOP"];
	$tipo  = $registro["TIPO"];
	$estoque = $registro["ESTOQUE"];  
	$datval = $registro["DATADEVAL"]; 
    $fabricante = $registro["FABRICANTE"];  	
	$descricao = $registro["DESCRICAO"];  
?>	
</h2></font>
<form name="Enviar" method="Post" action="ap3.php">
<font color="white">Nome:</font> <input type="text" name="nome"/> <br />
<font color="white">Codigo: </font><input type="text" name="codigo"/><font color="black">Obrigatorio</font><br />
<font color="white">Tipo: </font><input type="text" name="tipo"/> <br />
<font color="white">Estoque: </font> <input type="text" name="estoque"/> <br />
<font color="white">Data de validade: </font> <input type="text" name="datval"/> <br />
<font color="white">Fabricante/Destribuidora: </font><input type="text" name="fabricante"/> <br />
<font color="white">Descrição: </font><input type="text" name="descricao"/> <br />
<input type="submit" value="Alterar"/>
</form>
<p><h2><a href="http://localhost/sf/homefuncionario.php"><font color="Red">Cancelar e Voltar</font></a></h2></p>
</body>
</html>