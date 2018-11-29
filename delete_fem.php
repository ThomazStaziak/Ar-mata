<?php
	$link=mysqli_connect('localhost','root','','tcc');
?>
<?php
	session_start();
	$id_prod=$_SESSION['id_prod'];
	$botao=$_GET['publicar'];
	$consulta="select titulo from produtos_fem";
	$resultado=mysqli_query($link,$consulta);
	$linha = mysqli_fetch_assoc($resultado);
	// $safe = "SET SQL_SAFE_UPDATES=0;";
	$delete = "delete from produtos_fem where id = $botao";
	//$resultsafe=mysqli_query($link, $safe);
	mysqli_query($link,$delete);
		echo "<script type='text/javascript'>
			window.location='inserirfem.php'
		</script>";
	// if ($resultdelete) {
	// 	echo "<a href='prods.php'>Dados Excluídos</a>";
	// }else {
	// 	die("Falha ao executar o comando:". mysqli_error());
	// }
?>
