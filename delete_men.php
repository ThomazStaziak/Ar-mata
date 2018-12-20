<?php
	$link=mysqli_connect('localhost','root','','tcc');
?>
<?php
	$consulta="select email from mensagem";
	$resultado=mysqli_query($link,$consulta);
	$linha = mysqli_fetch_assoc($resultado);
	// $safe = "SET SQL_SAFE_UPDATES=0;";
	$delete = "delete from mensagem where email = '".$linha['email']."'";
	//$resultsafe=mysqli_query($link, $safe);
	mysqli_query($link,$delete);
		echo "<script type='text/javascript'>
			window.location='mensagem_visual.php'
		</script>";
	// if ($resultdelete) {
	// 	echo "<a href='prods.php'>Dados Excluídos</a>";
	// }else {
	// 	die("Falha ao executar o comando:". mysqli_error());
	// }
?>
