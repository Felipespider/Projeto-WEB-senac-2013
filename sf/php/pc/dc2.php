<html>
<body bgcolor="#4F4F4F">
<h2><font color="white">
<?php
   $cpf = $_POST['cpf'];
   $conexao = mysql_connect("localhost","root","123456");
   $produto = mysql_select_db("BANCOSF",$conexao);

   $excluir = "DELETE  FROM CLIENTES WHERE CPF= '$cpf'";
   $execultar = mysql_query ($excluir,$conexao);
   print ('Cliente deletado com sucesso');
   ?>
</font></h2>   

<p><h2><a href="http://localhost/sf/homefuncionario.php"><font color="WHITE">Volte ao painel</font></a></h2></p>
</body>
</html>
 