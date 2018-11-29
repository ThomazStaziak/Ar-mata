<?php
	$link=mysqli_connect('localhost','root','','tcc');
?>
<?php
	$mensagem=$_POST['message'];
	$email = $_POST['email'];
	$nome = $_POST['name'];
	$inserir = "insert into mensagem (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
		mysqli_query($link,$inserir);
		echo "<script type='text/javascript'>
			window.location='index_logado_admin.php'
		</script>";
?>
