<html>
<body bgcolor="#FF2D3B">
<h2><font color="white">
<?php
   $cpf = $_POST['cpf'];
   $conexao = mysql_connect("localhost","root","123456");
   $produto = mysql_select_db("BANCOSF",$conexao);

   $excluir = "DELETE  FROM FUNCIONARIO WHERE CPF= '$cpf'";
   $execultar = mysql_query ($excluir,$conexao);
   print ('funcionario deletado com sucesso');
   ?>
</font></h2>   

<p><h2><a href="http://localhost/sf/homeadmgeral.php"><font color="WHITE">Volte ao painel</font></a></h2></p>
</body>
</html>
 