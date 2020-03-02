<html><head><title>visualizar produto</title></head>
<body bgcolor="#4F4F4F">
<font color="white"><h2>
<?php
   $codigo  = $_POST['codigo'];
   $conexao = mysql_connect("localhost", "root", "123456");
   $produto = mysql_select_db("BANCOSF", $conexao);

   $consulta = "SELECT * FROM PRODUTO WHERE CODIGOP = '$codigo'";
   
   $resultado      = mysql_query($consulta, $conexao);
   
   $registro       =mysql_fetch_array($resultado);
   
   $nome         =$registro ["NOME"];
   $cod           =$registro ["CODIGOP"];
   $tipo = $registro ["TIPO"];
   $estoque = $registro ["ESTOQUE"];
   $datval = $registro ["DATADEVAL"];
   $fabricante = $registro ["FABRICANTE"];
   $descricao = $registro ["DESCRICAO"];
   
   
	print('Nome: '.$nome);
	print('<br/>');
	print('<p/>');
	print('Codigo: '.$cod);
	print('<br/>');
	print('<p/>');
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
?>
</h2></font>
<p><h2><a href="http://localhost/sf/homefuncionario.php"><font color="WHITE">Volte ao painel</font></a></h2></p>
</body>
</html>
