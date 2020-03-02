<html>
<head>	<title>Alterar Perfil Funcionario</title>	
</head>
	<font color="white"><h1>Perfil Atual</h1></font>
<font color="white"><h2>
<?php
   $cpf1  = $_POST['cpf'];
   $conexao = mysql_connect("localhost", "root", "123456");
   $produto = mysql_select_db("BANCOSF", $conexao);

   $consulta = "SELECT * FROM FUNCIONARIO WHERE CPF = '$cpf1'";
   
   $resultado      = mysql_query($consulta, $conexao);
   
   $registro       =mysql_fetch_array($resultado);
   
   $nome         =$registro ["NOME"];
   $cargo           =$registro ["CARGO"];
   $salario           =$registro ["SALARIO"];
   $datnasc           =$registro ["DATANASc"];
   $sexo = $registro ["SEXO"];
   $cpf2 = $registro ["CPF"];
   $email = $registro ["EMAIL"];
   $telefone = $registro ["TELEFONE"];
   $endereco = $registro ["ENDERECO"];
   $descricao           =$registro ["DESCRICAO"];
   
   
	print('Nome: '.$nome);
	print('<br/>');
	print('<p/>');
	print('Cargo: '.$cargo);
	print('<br/>');
	print('<p/>');
	print('Salario: '.$salario);
	print('<br/>');
	print('<p/>');
	print('Data de Nascimento: '.$datnasc);
	print('<br/>');
	print('<p/>');
	print('Sexo: '.$sexo);
	print('<p/>');
	print('<br/>');
	print('CPF: '.$cpf2);
	print('<p/>');
	print('<br/>');
	print('Email: '.$email);
	print('<p/>');
	print('<br/>');
	print('Telefone: '.$telefone);
	print('<p/>');
	print('<br/>');
	print('Endereco: '.$endereco);
	print('<p/>');
	print('<br/>');
	print('Descrição: '.$descricao);
	print('<br/>');
	print('<p/>');

	
	
	
?>
</h2></font>
<body bgcolor="#FF2D3B" align="center">
 <form name="Enviar" method="Post" action="af3.php">
<font color="white">Nome: </font> <input type="text" name="nome"/> <br />
<font color="white">Cargo: </font> <input type="text" name="cargo"/> <br />
<font color="white">Salario: </font> <input type="text" name="salario"/> <br />
<font color="white">CPF: </font><input type="text" name="cpf"/> <br />
<font color="white">Data de Nascimento: </font>  <input type="text" name="datnasc"/> <br />
<font color="white">Sexo: </font>  <input type="text" name="sexo"/> <br />
<font color="white">Email: </font>  <input type="text" name="email"/> <br />
<font color="white">Telefone: </font>  <input type="text" name="telefone"/> <br />
<font color="white">Endereço: </font>  <input type="text" name="endereco"/> <br />
<font color="white">Descriçao: </font> <input type="text" name="descricao"/> <br />
<input type="submit" value="Alterar"/>
</form>
<p><h2><a href="http://localhost/sf/homeadmgeral.php"><font color="Red">Cancelar e Voltar</font></a></h2></p>
</body>
</html>