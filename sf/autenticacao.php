<?php
$host = "localhost";
$user = "root";
$pass = "123456";
$banco = "bancosf";
$conexao = mysql_connect($host,$user,$pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());
?>
<html>
<head>
<title>Redirecionamento</title>
<script type="text/javascript">
	function loginsuccessfully(){
		setTimeout ("window.location='homefuncionario.php'",5000);
}	
	function loginfailed(){
	setTimeout ("window.location='home.php'",5000);
}	
</script>
</head>
<body>
<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$sql = mysql_query("SELECT * FROM funcionario WHERE Cpf = '$usuario' and senha = '$senha'")or die(mysql_error());
$row = mysql_num_rows($sql);
if($row >0){
	session_start();
	$_session['usuario'] = $_POST['usuario'];
	$_session['senha'] = $_POST['senha'];
	echo "<center>Você Foi autenticado com sucesso! Aguarde um Instante.</center>";
	echo"<script>loginsuccessfully()</script>";
}
else {
	echo"<center>Nome de usuário ou senha invalido Aguarde um momento para tentar novamente.</center>";
	echo"<script>loginfailed()</script>";
}
?>
</body>
</html>