<?php 
date_default_timezone_set('America/Recife');

?>
<html>
<head> <title>Iniciar Venda</title>	
</head>
	<font color="white"><h1>Iniciar Venda</h1></font>
<body bgcolor="#4F4F4F" align="center">
	<form name="Enviar" method="Post" action="pv2.php">
<font color="white">Codigo da Venda: </font><input type="text" name="codigovend"/> <br />
<font color="white">Data da compra: </font><input type="text" name="datap" value="<?php print(date("d/m/y"));?>"/> <br />
<font color="white">Hora da compra: </font><input type="text" name="hora" value="<?php print(date("H:i"));?>"/> <br />
<input type="submit" value="enviar"/>
</form>
<p><h2><a href="http://localhost/sf/homefuncionario.php"><font color="Red">Cancelar e Voltar</font></a></h2></p>
</body>
</html>