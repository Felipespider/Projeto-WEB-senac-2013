<html>
<head><title>Informações do Funcionario</title></head>
<body bgcolor="#FF2D3B"> 
 <font color="white"><h1>Perfil do Funcionario</h1></font>

 <font color="white"><h2>
<?php
   $cpf  = $_POST['cpf'];
   $conexao = mysql_connect("localhost", "root", "123456");
   $produto = mysql_select_db("BANCOSF", $conexao);

   $consulta = "SELECT * FROM FUNCIONARIO WHERE CPF = '$cpf'";
   
   $resultado      = mysql_query($consulta, $conexao);
   
   $registro       =mysql_fetch_array($resultado);
   
   $nome         =$registro ["NOME"];
   $cargo           =$registro ["CARGO"];
   $salario           =$registro ["SALARIO"];
   $datnasc           =$registro ["DATANASc"];
   $sexo = $registro ["SEXO"];
   $cpf = $registro ["CPF"];
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
	print('Descrição: '.$descricao);
	print('<br/>');
	print('<p/>');
?>
</h2></font>
<p><h2><a href="http://localhost/sf/homeadmgeral.php"><font color="WHITE">Volte ao painel</font></a></h2></p>
</body>
</html>