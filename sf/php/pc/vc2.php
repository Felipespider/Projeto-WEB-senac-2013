<html>
<head><title>Informações do Clientes</title></head>
<body bgcolor="#4F4F4F"> 
 <font color="white"><h1>Perfil do Cliente</h1></font>

 <font color="white"><h2>
<?php
   $cpf  = $_POST['cpf'];
   $conexao = mysql_connect("localhost", "root", "123456");
   $produto = mysql_select_db("BANCOSF", $conexao);

   $consulta = "SELECT * FROM CLIENTES WHERE CPF = '$cpf'";
   
   $resultado      = mysql_query($consulta, $conexao);
   
   $registro       =mysql_fetch_array($resultado);
   
   $nome         =$registro ["NOME"];
   $datnasc           =$registro ["DATANASCIMENTO"];
   $sexo = $registro ["SEXO"];
   $cpf = $registro ["CPF"];
   $email = $registro ["EMAIL"];
   $telefone = $registro ["TELEFONE"];
   $endereco = $registro ["ENDERECO"];
   
   
	print('Nome: '.$nome);
	print('<br/>');
	print('<p/>');
	print('Data de Nascimento: '.$datnasc);
	print('<br/>');
	print('<p/>');
	print('Sexo: '.$sexo);
	print('<p/>');
	print('<br/>');
	print('CPF: '.$cpf);
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
?>
</h2></font>
<p><h2><a href="http://localhost/sf/homefuncionario.php"><font color="WHITE">Volte ao painel</font></a></h2></p>
</body>
</html>