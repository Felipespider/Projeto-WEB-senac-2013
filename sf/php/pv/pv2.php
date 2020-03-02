<html> 
 <head> 
  <title>Confirmação Data e Hora</title>
  </head>
<font color="white"><h2>
<?php
    $codigovend = $_POST['codigovend'];
	$datap = $_POST['datap'];
	$hora = $_POST['hora'];
	
	
	$conexao = mysql_connect("localhost","root","123456");
	$banco   = mysql_select_db("BANCOSF", $conexao);
	print(mysql_error()."<br />");
	
	$inserir = "INSERT INTO vendas (CODIGOVEND,DATAP,HORA)
	VALUES ('$codigovend', '$datap', '$hora')";
	
	
	$executar = mysql_query($inserir, $conexao);
	

	print('Confirmar');

	
?>
<font color="white"><h1></h1></font> </h2></font>
<body bgcolor="#4F4F4F" align="center">
 <form name="Enviar" method="Post" action="pv3.php">
 <font color="white">Codigo da venda: </font> <input type="text" name="codigovend" value="<?php print($codigovend);?>"/> <br />
<font color="white">Codigo do Produto: </font> <input type="text" name="codigo"/> <br />
<font color="white">Quantidade: </font> <input type="text" name="quantidade"/> <br />
<input type="submit" value="Comprar"/>
</form>
<p><h2><a href="http://localhost/sf/homefuncionario.php"><font color="Red">Cancelar e Voltar</font></a></h2></p>
</body>
</html>