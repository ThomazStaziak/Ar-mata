<?php
	$link=mysqli_connect('localhost','root','','tcc');
?>
<?php
	$consulta="truncate pedidos_rapidos";
	// $safe = "SET SQL_SAFE_UPDATES=0;";
	//$resultsafe=mysqli_query($link, $safe);
	mysqli_query($link,$consulta);
		echo "<script type='text/javascript'>
			window.location='index_logado.php'
		</script>";
	// if ($resultdelete) {
	// 	echo "<a href='prods.php'>Dados Excluídos</a>";
	// }else {
	// 	die("Falha ao executar o comando:". mysqli_error());
	// }
?>
