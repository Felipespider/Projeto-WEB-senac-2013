<html><head><title>Compra</title></head>
<body bgcolor="#4F4F4F">
<center>
<table border=1 bgcolor='white'>
<tr>
<td width=100 height=20 bgcolor="green" colspan=2> <center><font color="white">Venda</font></center> </td>
<td width=100 height=20 bgcolor="green" colspan=2> <center><font color="white">Nome do Produto</font></center> </td>
<td width=100 height=20 bgcolor="green" colspan=2> <center><font color="white">Quantidade</font></center> </td> 
<td width=100 height=20 bgcolor="green" colspan=2> <center><font color="white">Preço</font></center> </td>
</tr>
</table>
<font color="white"><h2>
<?php
	$codigovend = $_POST['codigovend'];
    $codigop = $_POST['codigo'];
	$quantidade = $_POST['quantidade'];

	
	$conexao = mysql_connect("localhost","root","123456");
	$banco   = mysql_select_db("BANCOSF", $conexao);
	print(mysql_error()."<br />");
	$inserir = "INSERT INTO item (CODIGOVEND, CODIGOP, QUANTIDADE)
	VALUES ('$codigovend', '$codigop', '$quantidade')";
	$selecionar = "select * from bancosf ";
	
	$executar = mysql_query($inserir, $conexao);
	

	$consulta = "SELECT * FROM item, vendas, produto where vendas.codigovend = item.codigovend and produto.codigop = item.codigop and vendas.codigovend = '$codigovend' ";
	//print('Venda: '.$consulta);
	$resultado      = mysql_query($consulta, $conexao);
    while ($registro       =mysql_fetch_array($resultado))
	{
	   
		$codigo01         =$registro ["CODIGOVEND"];
		$codigo02         =$registro ["CODIGOP"];
		$codigo03         =$registro ["QUANTIDADE"];
		$codigo04         =$registro ["CODIGOITEM"];
		$preco = $registro ['PRECO'];
		$nome = $registro ['NOME'];
		
		print (" ".$nome. "   " . $preco. " " .$quantidade);
		print('<br/>');
		
		
		
	}
	
	$consulta = "SELECT sum(produto.preco) as soma FROM item, vendas, produto where vendas.codigovend = item.codigovend and produto.codigop = item.codigop and vendas.codigovend = '$codigovend' ";
	$resultado      = mysql_query($consulta, $conexao);
	$registro       =mysql_fetch_array($resultado);
	$soma =  $registro ['soma'];
	
	//print('<br/>Total a pagar: '.$soma);
	//print('<p/>');
    
	
?>	

<table border=1 bgcolor='white'>
<tr>
<td width=100 height=20 bgcolor="green" colspan=2> <center><font color="white"> <?php print($codigovend); ?></font></center> </td>
<td width=100 height=20 bgcolor="green" colspan=2> <center><font color="white"> </font></center> </td>
<td width=100 height=20 bgcolor="green" colspan=2> <center><font color="white"> </font></center> </td> 
<td width=100 height=20 bgcolor="green" colspan=2> <center><font color="white"> <?php print('<br/>Total a pagar: '.$soma); ?></font></center> </td>
</tr>
</table>
</center>

</h2></font>
<p><h2><a href="http://localhost/sf/homefuncionario.php"><font color="WHITE">Volte ao painel</font></a></h2></p>
</body>
</html>
